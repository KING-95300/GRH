<?php

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
    Route::view('/employees', 'admin.employees')->name('employees');
    Route::view('/leaves', 'admin.leaves')->name('leaves');
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
