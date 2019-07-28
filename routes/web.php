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
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/feed', function () {
    return view('feed', 'RecipeController@show');
});
Route::get('/editprofile', function () {
    return view('editprofile');
})->name('editprofile')->middleware('auth');

Route::get('/recipe', function () {
    return view('recipe');
});
Route::get('/newfriends', function () {
    return view('newfriends');
})->middleware('auth');
Route::get('/feed', function () {
    return view('feed');
})->middleware('auth');
Auth::routes();
// 
// Route::get('/home', 'HomeController@index')->name('home');
