<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\TestMail;
use App\Mail\NotifPengisianTS;

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


Route::get('tentang', 'HalamanController@tentang');
Route::get('laporan', 'HalamanController@laporan');
Route::get('/kta', 'HalamanController@kta');
Route::get('/ktp', 'HalamanController@ktp');

//Kuesioner Perusahaan
Route::post('/ktp/create', 'KuesionerPerusahaanController@create');

//Kuesioner Alumni
Route::get('/kta/{id}/kuesioner', 'KuesionerAlumniController@kuesioner');
Route::post('/kta/{id}/update', 'KuesionerAlumniController@update');




Auth::routes();
Route::get('/home', 'LoginController@authenticate')->name('home');



Route::group(['middleware' => ['auth']], function(){

	Route::get('/dashboard', [
		'as'	=> 'dashboard',
		'uses'  => 'HalamanController@dashboard'
	]);

	//admin
	Route::get('/admin', 'AdminController@index')->name('admin');

	//Data AlumniController
	Route::get('/manajemen-data-alumni', 'AdminController@manajemenDataAlumni')->name('manajemenDataAlumni');
	Route::post('/manajemen-data-alumni/create', 'AdminController@createDataAlumni');
	Route::get('/manajemen-data-alumni/{id}/edit', 'AdminController@editDataAlumni');
	Route::post('/manajemen-data-alumni/{id}/update', 'AdminController@updateDataAlumni');
	Route::get('/manajemen-data-alumni/{id}/delete', 'AdminController@deleteDataAlumni');
	Route::get('/manajemen-data-alumni/{id}/emailIsiTS', 'EmailController@isiTracerStudy')->name('isiTracerStudy');
	Route::delete('/deleteall', 'EmailController@deleteAll');
	

	//Data Perusahaan
	Route::get('/manajemen-data-perusahaan', 'AdminController@manajemenDataPerusahaan')->name('manajemenDataPerusahaan');
	Route::post('/manajemen-data-perusahaan/create', 'AdminController@createDataPerusahaan');
	Route::get('/manajemen-data-perusahaan/{id}/edit', 'AdminController@editDataPerusahaan');
	Route::post('/manajemen-data-perusahaan/{id}/update', 'AdminController@updateDataPerusahaan');
	Route::get('/manajemen-data-perusahaan/{id}/delete', 'AdminController@deleteDataPerusahaan');

	//Alumni
	Route::get('/alumni', 'AlumniController@index')->name('alumni');

	//Perusahaan
	Route::get('/perusahaan', 'AlumniController@index');

	Route::post('/kta/create', 'KuesionerAlumniController@create');
});





