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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::prefix('contact')->group(function(){
    Route::get('/', 'MailController@home')->name('contact'); //add auth mw
    Route::get('/delete/{id}', 'MailController@delete')->name('delete')->where('id', '[0-9]+'); //add auth mw
    Route::post('/', 'MailController@send')->name('send');
});

Route::prefix('posts')->group(function(){
    Route::get('/search/{type?}/{bussiness?}/', 'PostController@search')->name('search');
    Route::get('/search/{id}', 'PostController@find')->name('find-post')->where('id', '[0-9]+');
    Route::post('/new', 'PostController@new')->name('new-post'); //add auth mw
});