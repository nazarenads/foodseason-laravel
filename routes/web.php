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


Route::get('/newfriends', function () {
    return view('newfriends');
})->middleware('auth');


//RECIPES ROUTES
Route::get('/index', 'RecipeController@index');
//Route::get('/filter/{palabra}', 'RecipeController@showSearch');
Route::get('/filter/{palabra}', 'RecipeController@searchRecipes');
Route::get('/index/{tagName}', 'RecipeController@filterByTagName');
Route::get('/addRecipe', 'RecipeController@create');
Route::post('/addRecipe', 'RecipeController@store');
Route::get('/editrecipe/{id}', 'RecipeController@edit');
Route::post('/editrecipe/{id}', 'RecipeController@update');
Route::get('/deleterecipe/{id}', 'RecipeController@showDestroy');
Route::post('/deleterecipe/{id}', 'RecipeController@destroy');
Route::get('/recipe/{id}', 'RecipeController@show');



//USERS AND PROFILES ROUTES
Auth::routes();
Route::get('/editprofile', 'ProfileController@create')->middleware('auth');
Route::post('/editprofile', 'ProfileController@updateProfile')->name('editprofile')->middleware('auth');
Route::get('/newfriends', function () {
    $users=User::Where("id","!=",Auth::user()->id)->withCount(['followers','follows'])->get();
    return view('newfriends', compact("users"));
})->middleware('auth');
Route::get('/{username}', 'RecipeController@showUserRecipes')->name('profile');
Route::get('/{username}', 'UsersController@show');
Route::get('/{username}/followers', 'UsersController@followers');
Route::get('/{username}/follows', 'UsersController@follows');
Route::post('/{username}/follow', 'UsersController@follow')->middleware('auth');
Route::post('/{username}/unfollow', 'UsersController@unfollow');

//
// Route::get('/home', 'HomeController@index')->name('home');
