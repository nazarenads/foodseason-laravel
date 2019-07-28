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
});
Route::get('/forgottenpassword', function () {
    return view('forgottenpass');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/recoverpassword', function () {
    return view('recoverpass');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/profile', function () {
    return view('profile');

});Route::get('/feed', function () {
    return view('feed', 'RecipeController@show');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/recipe', function () {
    return view('recipe');
});
Route::get('/newfriends', function () {
    return view('newfriends');
});
Route::get('/feed', function () {
    return view('feed');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
