<?php

use App\Http\Controllers\Auth\ForgotPWController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPWController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UploadController;
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
// home
Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // media
    Route::post('/upload/store', [UploadController::class, 'store'])->name('upload.store');
    Route::delete('/media/{media_id}/destroy', [UploadController::class, 'destroy'])->name('upload.delete');
    // template
    Route::post('/template/create', [TemplateController::class, 'store'])->name('template.store');
    // send template page
    Route::get('/send_template', [TemplateController::class, 'index'])->name('dashboard.send.mail');
});


// auth
Route::middleware('guest')->group(function () {
    // login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    // register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    // forgot pw
    Route::get('/forgot-password', [ForgotPWController::class, 'index'])->name('password.forgot');
    Route::post('/forgot-password', [ForgotPWController::class, 'send_reset_link']);
    // reset pw
    Route::get('/reset-password/{token}', [ResetPWController::class, 'index'])->name('password.reset');
    Route::post('/reset-password', [ResetPWController::class, 'reset_pw'])->name('reset_pw');
});

// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// subscribe member
//Route::get('/unsubscribe', [MemberController::class, 'subscribe'])->name('subscribe');
Route::post('/subscribe', [MemberController::class, 'subscribe'])->name('subscribe');
Route::put('/unsubscribe', [MemberController::class, 'unsubscribe'])->name('unsubscribe');
