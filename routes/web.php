<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\Admin\AdminLogInController;
use App\Http\Controllers\Auth\LoginController;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::auth();
Route::middleware('admin.guest')->group(function () {
    // Login Routes
    Route::get('admin/login', [AdminLogInController::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin/login', [AdminLogInController::class, 'login']);
});


Route::middleware(['admin.role:Super Admin'])->prefix('/superAdmin')->name('superAdmin.')->group(function () {
    Route::get('/logout', [AdminLogInController::class, 'logout']);

    Route::resource('users', UserController::class);
    Route::get('users/send-email/{id}', [UserController::class, 'sendEmail']);
    Route::get('users/certificate/{id}', [UserController::class, 'createCertificate']);
    Route::post('users/certificate/{id}/create', [UserController::class, 'storeCertificate']);
    Route::get('users/certificate/{id}/show', [UserController::class, 'showCertificate']);
});
