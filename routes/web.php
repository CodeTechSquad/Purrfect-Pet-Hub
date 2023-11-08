<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


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
    return View::make('pages.home');
});

// Route::get('/login', function () {
//     return View::make('pages.login');
// });
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [AuthController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/about', function () {
    return View::make('pages.about');
});

Route::get('/services', function () {
    return View::make('pages.services');
});

Route::get('/blog', function () {
    return View::make('pages.blog');
});

Route::get('/shop', function () {
    return View::make('pages.shop');
});

Route::get('/gallery', function () {
    return View::make('pages.gallery');
});

Route::get('/contact', function () {
    return View::make('pages.contact');
});

Route::get('/admin', function () {
    return View::make('pages.admin');
});



Route::get('/dbconn', function () {
    return View::make('dbconn');
});

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
        Route::post('/login_handler', [AdminController::class, 'login_handler'])->name('login_handler');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/home', [AdminController::class, 'showHome'])->name('home');
    });
});

