<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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


//Halaman
    Route::get('/', 'halamanController@index')->name('beranda');
    Route::get('laporan', 'halamanController@laporan')->name('laporan');
    Route::get('about', 'halamanController@about')->name('about');
    Route::get('ktp', 'halamanController@ktp')->name('ktp');
    Route::get('kta', 'halamanController@kta')->name('kta');


// kuesioner
    //Alumni
    Route::get('kta/{id}/kueioner', 'KuesionerController@isikta')->name('isikta');
    //Perusahaan
    Route::post('ktp/create', 'KuesionerController@ktp')->name('ktp.create');








Auth::routes();
Route::get('beranda', 'halamanController@tentang')->name('beranda');

Route::get('/home', 'HomeController@index')->name('home');

//users
Route::get('/users/export', 'UsersExportController@export');
Route::get('/users/import', 'UsersImportController@show');
Route::post('/users/import', 'UsersImportController@store');
