<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('welcome');
})->name('about');

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/s', function () {
    return view('welcome');
})->name('s');
