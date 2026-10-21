<?php

use App\Http\Controllers\Admin\EmployeeController as AdminEmployeeController;
use App\Http\Controllers\Admin\LeaveController as AdminLeaveController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CongesController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['token.auth', 'verified'])->name('dashboard');

Route::middleware(['token.auth', 'verified'])->group(function () {
    Route::view('/mes-conges', 'collaborator.conges')->name('collaborator.conges');
    Route::view('/mes-fiches-de-paie', 'collaborator.payslips')->name('collaborator.payslips');
    Route::view('/mon-pointage', 'collaborator.attendance')->name('collaborator.attendance');
    Route::view('/mes-documents', 'collaborator.documents')->name('collaborator.documents');
});

Route::middleware(['token.auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::get('/employees', [AdminEmployeeController::class, 'index'])->name('employees');
    Route::post('/employees', [AdminEmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/export', [AdminEmployeeController::class, 'export'])->name('employees.export');
    Route::delete('/employees/bulk', [AdminEmployeeController::class, 'bulkDestroy'])->name('employees.bulkDestroy');
    Route::get('/employees/{employee}/cin', [AdminEmployeeController::class, 'downloadCin'])->name('employees.cin');
    Route::put('/employees/{employee}', [AdminEmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [AdminEmployeeController::class, 'destroy'])->name('employees.destroy');

    Route::get('/leaves', [AdminLeaveController::class, 'index'])->name('leaves');
    Route::post('/leaves', [AdminLeaveController::class, 'store'])->name('leaves.store');
    Route::get('/leaves/export', [AdminLeaveController::class, 'export'])->name('leaves.export');
    Route::get('/leaves/{leave}/attachment', [AdminLeaveController::class, 'downloadAttachment'])->name('leaves.attachment');
    Route::patch('/leaves/{leave}/approve', [AdminLeaveController::class, 'approve'])->name('leaves.approve');
    Route::patch('/leaves/{leave}/reject', [AdminLeaveController::class, 'reject'])->name('leaves.reject');
    Route::view('/attendance', 'admin.attendance')->name('attendance');
    Route::view('/departments', 'admin.departments')->name('departments');
    Route::view('/payroll', 'admin.payroll')->name('payroll');
    Route::view('/recruitment', 'admin.recruitment')->name('recruitment');
    Route::view('/documents', 'admin.documents')->name('documents');
    Route::view('/reports', 'admin.reports')->name('reports');
    Route::view('/settings', 'admin.settings')->name('settings');
});

Route::middleware('token.auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/employees', EmployeeController::class);
Route::resource('/conges', CongesController::class);

require __DIR__.'/auth.php';
