<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\Admin\AdminLogInController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\User\UserLogInController;
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

// Route::auth();

//Admin Routes
Route::middleware('admin.guest')->group(function () {
    Route::view('/', 'auth.login');
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


//User Routes
Route::middleware('user.guest')->group(function () {
    Route::get('/user/login', [UserLogInController::class, 'showUserLoginForm'])->name('user.login');
    Route::post('/user/login', [UserLogInController::class, 'login']);
});

Route::middleware('user.auth')->prefix('user')->group(function () {
   Route::get('/profile',function(){
    dd('hi');
   });
});
