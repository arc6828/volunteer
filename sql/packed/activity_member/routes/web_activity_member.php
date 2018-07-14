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


Route::get('/activity_member', function () {
    return view('activity_member/index');
})->middleware('role:student,admin_faculty,admin_dsd');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activity_member', 'ActivityMemberController@index');
Route::get('/activity_member/create', 'ActivityMemberController@create');
Route::post('/activity_member', 'ActivityMemberController@store');
Route::get('/activity_member/{id}', 'ActivityMemberController@show');
Route::get('/activity_member/{id}/edit', 'ActivityMemberController@edit');
Route::put('/activity_member/{id}', 'ActivityMemberController@update');
Route::delete('/activity_member/{id}', 'ActivityMemberController@destroy');
Auth::routes();

