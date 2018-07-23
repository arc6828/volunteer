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

//WELCOME
Route::get('/', function () {
    return view('welcome');
});

//AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Volunteer
Route::resource('/activity','ActivityController');

Route::resource('/student','StudentController');

//THEME
Route::get('/dashboard', function () {
    return view('monster-lite/index');
});
Route::get('/icon-fontawesome', function () {
    return view('monster-lite/icon-fontawesome');
});
Route::get('/map-google', function () {
    return view('monster-lite/map-google');
});
Route::get('/pages-blank', function () {
    return view('monster-lite/pages-blank');
});
Route::get('/icon-fontawesome', function () {
    return view('monster-lite/icon-fontawesome');
});
Route::get('/pages-error-404', function () {
    return view('monster-lite/pages-error-404');
});
Route::get('/pages-profile', function () {
    return view('monster-lite/pages-profile');
});
Route::get('/table-basic', function () {
    return view('monster-lite/table-basic');
});



//OTHERS
Route::get('/bootstrap', function () {
 return view('bootstrap/index');
});

