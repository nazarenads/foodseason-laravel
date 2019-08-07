<?php

use App\User;
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
    return view('home');
})->name('index');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
//
// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile')->middleware('auth');

// Route::get('/editprofile', 'ProfileController@index');
// Route::post('/editprofile', 'ProfileController@updateProfile')->name('editprofile');

// Route::get('/editprofile', function () {
//     return view('editprofile');
// })->name('editprofile')->middleware('auth');





//RECIPES ROUTES
Route::get('/index', 'RecipeController@index');
Route::get('/feed', 'UsersController@showFollowedRecipes')->name('feed');
Route::get('/filter', 'RecipeController@searchRecipes');
Route::get('/noResults', 'RecipeController@show')->name('noResults');
Route::get('/index/{tagName}', 'RecipeController@filterByTagName');
Route::get('/addRecipe', 'RecipeController@create')->name('addRecipe')->middleware('auth');
Route::post('/addRecipe', 'RecipeController@store')->name('addRecipe')->middleware('auth');
Route::get('/editrecipe/{id}', 'RecipeController@edit')->middleware('auth');
Route::post('/editrecipe/{id}', 'RecipeController@update')->middleware('auth');
Route::get('/deleterecipe/{id}', 'RecipeController@showDestroy')->middleware('auth');
Route::post('/deleterecipe/{id}', 'RecipeController@destroy')->name('deleteRecipe');
Route::post('/feed', 'RecipeController@destroy')->middleware('auth');
Route::get('/recipe/{id}', 'RecipeController@show')->middleware('auth');
Route::get('/recipeDeleted', 'RecipeController@show')->middleware('auth');



//USERS AND PROFILES ROUTES
Auth::routes();
Route::get('/editprofile', 'ProfileController@create')->middleware('auth');
Route::post('/editprofile', 'ProfileController@updateProfile')->name('editprofile')->middleware('auth');
Route::get('/newfriends', 'UsersController@showNewFriends')->name('newfriends')->middleware('auth');
Route::get('/{username}', 'RecipeController@showUserRecipes')->name('profile')->middleware('auth');
Route::get('/{username}', 'UsersController@show')->name('profile')->middleware('auth');
Route::get('/{username}/followers', 'UsersController@followers')->middleware('auth');
Route::get('/{username}/follows', 'UsersController@follows')->middleware('auth');
Route::post('/{username}/follow', 'UsersController@follow')->middleware('auth');
Route::post('/{username}/unfollow', 'UsersController@unfollow')->middleware('auth');

//
// Route::get('/home', 'HomeController@index')->name('home');
