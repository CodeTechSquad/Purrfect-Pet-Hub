<?php

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

Route::get('/', function () {
    return View::make('pages.home');
});

Route::get('/login', function () {
    return View::make('pages.login');
});

Route::get('/register', function () {
    return View::make('pages.register');
});

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