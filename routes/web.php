<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Root route → Check login
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('main'); // Agar logged in hai to main.blade.php
    }
    return view('welcome'); // Agar logged in nahi hai to welcome.blade.php
})->name('home');

// Pages
Route::get('/about', [RouteController::class, 'about'])->name('about');
Route::get('/contact', [RouteController::class, 'contact'])->name('contact');
Route::get('/template', [RouteController::class, 'template'])->name('template');
Route::get('/ctemplate', [RouteController::class, 'ctemplate'])->name('ctemplate');
Route::get('/main', [RouteController::class, 'main'])->middleware('auth')->name('main');
Route::get('/m-about', [RouteController::class, 'm_about'])->name('m-about');
Route::get('/m-contact', [RouteController::class, 'm_contact'])->name('m-contact');
Route::get('/content', [RouteController::class, 'content'])->name('content');
// Dynamic template details page
Route::get('/template/{id}', [RouteController::class, 'showTemplate'])->name('template.show');

// Profile page (only logged-in users)
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

// Profile update
Route::put('/profile/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');

// Auth pages (show)
Route::get('/signin', [AuthController::class, 'showSignin'])->name('signin');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');

// Auth actions
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Password reset
Route::get('password/reset', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');
