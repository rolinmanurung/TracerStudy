<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\MailController;
use App\Http\Middleware\CheckRole;


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

    Route::get('/', 'HalamanController@index')->name('home');
    Route::view('/welcome', 'welcome');
    Route::get('/laporan', 'HalamanController@laporan');

Auth::routes();

    Route::group(['middleware' => ['checkrole:admin']], function() {
        //Post
        Route::get('posts/create', 'PostController@create');
        Route::post('posts/store', 'PostController@store');
        Route::get('posts/{post:slug}/edit', 'PostController@edit');
        Route::patch('posts/{post:slug}/update', 'PostController@update');
        Route::delete('posts/{post:slug}/delete', 'PostController@delete');

        //users
        Route::get('edit', 'UserController@edit');
        Route::get('user/{id}', 'UserController@update');

        Route::get('users/export', 'UsersExportController@export');
        Route::get('users/import', 'UsersImportController@show');
        Route::post('users/import', 'UsersImportController@store');

        //Data Alumni
        Route::get('data_alumni', 'DataAlumniController@index');
        Route::get('data_alumni/create', 'DataAlumniController@create');
        Route::post('data_alumni/store', 'DataAlumniController@store');
        Route::post('data_alumni/import', 'DataAlumniController@import');
        Route::get('data_alumni/export', 'DataAlumniController@export');
        Route::get('data_alumni/{id}', 'DataAlumniController@edit');
        Route::post('data_alumni/{id}/update', 'DataAlumniController@update');
        Route::get('data_alumni/{id}/delete', 'DataAlumniController@delete');
        Route::get('data_alumni/{id}/info_kuesioner', 'DataAlumniController@InfoKuesioner');
        Route::get('email/email_info_kuesioner', 'MailController@InfoKuesioner');

        Route::get('data_perusahaan', 'DataPerusahaanController@index');
        Route::get('data_perusahaan/{id}', 'DataPerusahaanController@show');
        Route::get('data_perusahaan/{id}/delete', 'DataPerusahaanController@delete');

    });
    
        Route::get('posts/{post:slug}', 'PostController@show');

    Route::group(['middleware' => ['checkrole:alumni']], function() {
        // Alumni
        Route::get('alumni', 'AlumniController@index');
        Route::get('alumni/{id}', 'AlumniController@edit');
        Route::post('alumni/{id}/update', 'AlumniController@update');
        Route::get('alumni/{id}/kuesioner', 'AlumniController@kuesioner');
        Route::post('alumni/{id}/update_kuesioner', 'AlumniController@update_kuesioner');
        Route::patch('kuesioner/{id}', 'AlumniController@update_kuesioner');
    });
    
//Kuesioner Terhadap Alumni
        Route::get('kta', 'KuesionerTerhadapAlumniController@index')->name('kta');
        Route::get('kta/{id}', 'KuesionerTerhadapAlumniController@edit');
        Route::post('kta/{id}/update', 'KuesionerTerhadapAlumniController@update');
        Route::get('kta/export', 'KuesionerTerhadapAlumniController@data_kuesioner_export')->name('kta.export')->middleware('checkrole:admin');

//Kuesioner Terhadap Perusahaan
        Route::get('ktp', 'KuesionerTerhadapPerusahaanController@create')->name('ktp');
        Route::post('ktp/store', 'KuesionerTerhadapPerusahaanController@store');
        Route::get('ktp/export', 'KuesionerTerhadapPerusahaanController@export')->name('ktp.export')->middleware('checkrole:admin');



        

        

        

// Route::get('home', 'HomeController@index')->name('home');
// Route::get('dashboard', 'DashboardController@index')->name('home');
  
