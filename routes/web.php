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
    return view('home');
})->name('home');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

// Route::get('/editprofile', 'ProfileController@index');
// Route::post('/editprofile', 'ProfileController@updateProfile')->name('editprofile');

// Route::get('/editprofile', function () {
//     return view('editprofile');
// })->name('editprofile')->middleware('auth');

Route::get('/newfriends', function () {
    return view('newfriends');
})->middleware('auth');




//RECIPES ROUTES
Route::get('/recipe/{id}', 'RecipeController@show')->name('recetasPorId');
Route::get('/addRecipe', 'RecipeController@create')->name('crearRecetas');
Route::post('/addRecipe', 'RecipeController@store')->name('guardarRecetas');
//Route::get('/feed', 'RecipeController@index')->name('feed');
Route::get('/index', 'RecipeController@index')->name('indiceDeRecetas');

//USERS AND PROFILES ROUTES
Auth::routes();
Route::get('/editprofile', 'ProfileController@create')->middleware('auth');
Route::post('/editprofile', 'ProfileController@updateProfile')->name('editprofile')->middleware('auth');
Route::get('/newfriends', function () {
    return view('newfriends');
})->middleware('auth');


//
// Route::get('/home', 'HomeController@index')->name('home');
