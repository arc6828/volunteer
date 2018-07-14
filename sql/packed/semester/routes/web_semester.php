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

Route::get('/semester', 'SemesterController@index');
Route::get('/semester/create', 'SemesterController@create');
Route::get('/semester/{id}/edit', 'SemesterController@edit');
Route::get('/semester/{id}', 'SemesterController@show');
Route::delete('/semester/{id}', 'SemesterController@destroy');

Route::get('/semester', function () {
    return view('semester/index');
})->middleware('auth') ;
Auth::routes();




