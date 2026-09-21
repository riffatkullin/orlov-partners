<?php

use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\Admin\ConsultationRequestController as AdminConsultationRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/consultation', [ConsultationRequestController::class, 'store'])
    ->name('consultation.store');
    Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin/requests', [AdminConsultationRequestController::class, 'index'])
        ->name('admin.requests.index');

    Route::get('/admin/requests/{consultationRequest}', [AdminConsultationRequestController::class, 'show'])
        ->name('admin.requests.show');

    Route::patch('/admin/requests/{consultationRequest}', [AdminConsultationRequestController::class, 'update'])
        ->name('admin.requests.update');

});