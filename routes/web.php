<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CongesController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\ReportsController;







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
    Route::get('/recruitment', [RecruitmentController::class, 'index'])->name('recruitment');
    Route::post('/recruitment/candidates', [RecruitmentController::class, 'storeCandidate'])->name('recruitment.candidates.store');
    Route::put('/recruitment/candidates/{candidate}', [RecruitmentController::class, 'updateCandidate'])->name('recruitment.candidates.update');
    Route::delete('/recruitment/candidates/{candidate}', [RecruitmentController::class, 'destroyCandidate'])->name('recruitment.candidates.destroy');
    Route::patch('/recruitment/candidates/{candidate}/stage', [RecruitmentController::class, 'moveStage'])->name('recruitment.candidates.stage');
    Route::post('/recruitment/candidates/{candidate}/interviews', [RecruitmentController::class, 'storeInterview'])->name('recruitment.candidates.interviews.store');
    Route::delete('/recruitment/interviews/{interview}', [RecruitmentController::class, 'destroyInterview'])->name('recruitment.interviews.destroy');
    Route::post('/recruitment/offers', [RecruitmentController::class, 'storeOffer'])->name('recruitment.offers.store');
    Route::put('/recruitment/offers/{jobOffer}', [RecruitmentController::class, 'updateOffer'])->name('recruitment.offers.update');
    Route::delete('/recruitment/offers/{jobOffer}', [RecruitmentController::class, 'destroyOffer'])->name('recruitment.offers.destroy');

    Route::get('/documents', [DocumentsController::class, 'index'])->name('documents');
    Route::post('/documents', [DocumentsController::class, 'store'])->name('documents.store');
    Route::post('/documents/zip', [DocumentsController::class, 'zipSelection'])->name('documents.zip');
    Route::get('/documents/{document}/download', [DocumentsController::class, 'download'])->name('documents.download');
    Route::put('/documents/{document}', [DocumentsController::class, 'update'])->name('documents.update');
    Route::delete('/documents/{document}', [DocumentsController::class, 'destroy'])->name('documents.destroy');

    Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
    Route::get('/reports/export/{dataset}', [ReportsController::class, 'exportCsv'])->name('reports.export');
    Route::post('/reports/schedules', [ReportsController::class, 'storeSchedule'])->name('reports.schedules.store');
    Route::put('/reports/schedules/{schedule}', [ReportsController::class, 'updateSchedule'])->name('reports.schedules.update');
    Route::delete('/reports/schedules/{schedule}', [ReportsController::class, 'destroySchedule'])->name('reports.schedules.destroy');
    Route::post('/reports/schedules/{schedule}/send', [ReportsController::class, 'sendNow'])->name('reports.schedules.send');
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
