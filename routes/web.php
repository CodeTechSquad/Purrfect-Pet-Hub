<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\Admin;
use App\Http\Controllers\BlogController;

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
        Route::get('/home', [AdminController::class, 'index'])->name('home');

    });
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
     // User Management
     Route::get('/users', [AdminController::class, 'index'])->name('index');
     Route::get('/users/{user}/edit', [AdminController::class, 'edit'])->name('edit');
     Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('destroy');

     // Blog Management
        Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('edit');
});


