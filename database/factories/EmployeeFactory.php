<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        $hireDate = $this->faker->dateTimeBetween('-8 years', '-1 month');
        $years = max(0, (int) now()->diffInYears($hireDate));
        $seniority = $years >= 2 ? 'senior' : ($years >= 1 ? 'mid' : 'junior');
        $mobile = '+216 '.$this->faker->numerify('## ### ###');

        return [
            'name' => $this->faker->name(),
            'avatar_url' => null,
            'position' => $this->faker->jobTitle(),
            'department' => $this->faker->randomElement(array_keys(Employee::DEPARTMENTS)),
            'contract_type' => $this->faker->randomElement(array_keys(Employee::CONTRACT_TYPES)),
            'hire_date' => $hireDate->format('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'seniority' => $seniority,
            'status' => $this->faker->randomElement(array_keys(Employee::STATUSES)),
            'bank_account' => 'BIAT '.$this->faker->numerify('## ### ########### ##'),
            'cin' => $this->faker->unique()->numerify('########'),
            'date_of_birth' => $this->faker->dateTimeBetween('-55 years', '-22 years')->format('Y-m-d'),
            'family_status' => $this->faker->randomElement(['celibataire', 'marie', 'divorce', 'veuf']),
            'children' => $this->faker->numberBetween(0, 4),
            'address' => $this->faker->address(),
            'mobile' => $mobile,
            'work_mobile' => $mobile,
            'cnss_number' => $this->faker->numerify('########-##'),
            'cin_file_path' => null,
            'employee_note' => null,
            'leave_rights' => 30,
            'token_leave_days' => 30,
            'token_sick_leave_days' => 15,
            'start_time' => $hireDate->format('Y-m-d').' 08:00:00',
        ];
    }
}
