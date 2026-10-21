<?php

namespace Database\Seeders;

use App\Models\AttendanceRecord;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    public function run(): void
    {
        $employees = Employee::where('status', '!=', 'inactif')->orderBy('id')->get();
        $today = today();

        for ($offset = 30; $offset >= 0; $offset--) {
            $day = $today->copy()->subDays($offset);

            if ($day->isWeekend()) {
                continue;
            }

            foreach ($employees as $employee) {
                $data = $this->recordFor($employee, $day, $today);

                AttendanceRecord::updateOrCreate(
                    ['employee_id' => $employee->id, 'work_date' => $day->toDateString()],
                    $data
                );
            }
        }
    }

    private function recordFor(Employee $employee, Carbon $day, Carbon $today): array
    {
        $email = strtolower((string) $employee->email);
        $isToday = $day->isSameDay($today);

        $baseRecord = [
            'check_in' => null,
            'check_out' => null,
            'break_start' => null,
            'break_end' => null,
            'break_minutes' => 0,
            'mode' => 'none',
            'status' => 'present',
            'notes' => null,
            'anomaly_ignored' => false,
        ];

        if ($employee->status === 'conge') {
            return array_merge($baseRecord, [
                'status' => 'leave',
                'notes' => 'Congé annuel validé par la RH.',
            ]);
        }

        if ($isToday) {
            if (in_array($email, ['f.ghorbel@carthagetech.tn', 'jane@example.com'], true)) {
                return array_merge($baseRecord, [
                    'status' => 'absent',
                    'notes' => 'Absence non justifiée — rappel envoyé.',
                ]);
            }

            if ($email === 'y.trabelsi@carthagetech.tn') {
                return $this->standardRecord($employee, $baseRecord, '08:54', '17:38', 50, 'late', 'rfid');
            }

            if ($email === 'n.karray@carthagetech.tn') {
                return array_merge($baseRecord, [
                    'check_in' => '08:22:00',
                    'break_start' => '12:30:00',
                    'break_end' => '13:20:00',
                    'break_minutes' => 50,
                    'mode' => 'biometric',
                    'status' => 'present',
                ]);
            }

            if ($email === 's.mezghani@carthagetech.tn') {
                return $this->standardRecord($employee, $baseRecord, '08:18', '16:40', 45, 'present', 'biometric');
            }

            if ($email === 'm.zghal@carthagetech.tn') {
                return $this->standardRecord($employee, $baseRecord, '08:10', '17:45', 60, 'remote', 'web');
            }
        }

        if ($email === 'm.zghal@carthagetech.tn' && $day->isWednesday()) {
            return $this->standardRecord($employee, $baseRecord, '08:10', '17:45', 60, 'remote', 'web');
        }

        if ($email === 'y.trabelsi@carthagetech.tn' && $day->isTuesday()) {
            return $this->standardRecord($employee, $baseRecord, '08:52', '17:40', 50, 'late', 'rfid');
        }

        if ($email === 'k.chaabane@carthagetech.tn' && $day->isMonday()) {
            return $this->standardRecord($employee, $baseRecord, '08:49', '17:50', 45, 'late', 'rfid');
        }

        $checkInMinutes = 8 * 60 + 10 + (($employee->id * 3) % 25);
        $checkOutMinutes = 17 * 60 + 30 + (($employee->id * 5) % 16);

        if ($employee->id % 4 === 0) {
            $checkOutMinutes = 18 * 60 + 5;
        }

        $break = 45 + (($employee->id * 5) % 20);
        $mode = $employee->id % 2 === 0 ? 'biometric' : 'rfid';

        return $this->standardRecord(
            $employee,
            $baseRecord,
            $this->formatMinutes($checkInMinutes),
            $this->formatMinutes($checkOutMinutes),
            $break,
            'present',
            $mode
        );
    }

    private function standardRecord(
        Employee $employee,
        array $baseRecord,
        string $checkIn,
        string $checkOut,
        int $breakMinutes,
        string $status,
        string $mode
    ): array {
        $in = Carbon::createFromFormat('H:i', $checkIn);
        $breakStart = $in->copy()->addHours(4)->addMinutes(5);
        $breakEnd = $breakStart->copy()->addMinutes($breakMinutes);

        return array_merge($baseRecord, [
            'check_in' => $checkIn.':00',
            'check_out' => $checkOut.':00',
            'break_start' => $breakStart->format('H:i:s'),
            'break_end' => $breakEnd->format('H:i:s'),
            'break_minutes' => $breakMinutes,
            'mode' => $mode,
            'status' => $status,
        ]);
    }

    private function formatMinutes(int $minutes): string
    {
        return str_pad((string) intdiv($minutes, 60), 2, '0', STR_PAD_LEFT)
            .':'.str_pad((string) ($minutes % 60), 2, '0', STR_PAD_LEFT);
    }
}
