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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('', 'Erick@index')->name('login');

Route::post('login', 'Erick@authenticate')->name('authenticate');

Route::get('home', 'Erick@home')->name('home');

Route::get('video/{id}', 'Erick@video')->name('video');
Route::post('video/create', 'Erick@store');
Route::post('video/update', 'Erick@update');
Route::delete('video/delete', 'Erick@delete');

Route::get('logout', 'Erick@logout')->name('logout');
Route::get('register', 'Erick@register')->name('register');
;