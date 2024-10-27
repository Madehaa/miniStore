<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');


// Route::get('/mobile-products', [HomeController::class, 'showMobileProducts'])->name('mobileproducts');
// Route::get('/testimonials', [HomeController::class, 'showTestimonials'])->name('testimonials');



// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login request
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Handle logout request
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('reg');
// Route to handle registration form submission
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

