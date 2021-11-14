<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
});
Route::get('/tracerstudy', function () {
    return view('tracerstudy');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/kpa', function () {
    return view('kpa');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();
Route::get('/beranda', 'halamanController@index')->name('beranda');

Route::get('/home', 'HomeController@index')->name('home');