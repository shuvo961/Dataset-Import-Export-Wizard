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


Route::get('/download-csv',
    [
        'uses'=> '\App\Http\Controllers\DataController@downloadCSVReport',
        'as'=>'download-csv'

    ]);

Route::get('/registerform',
    [
        'uses'=> '\App\Http\Controllers\HomeController@register',
        'as'=>'registerform'

    ]);

Route::get('/loginform',
    [
        'uses'=> '\App\Http\Controllers\HomeController@login',
        'as'=>'loginform'

    ]);

Route::get('/logout',
    [
        'uses'=> '\App\Http\Controllers\HomeController@logout',
        'as'=>'logout'

    ]);




Route::get('/',
    [
        'uses'=> '\App\Http\Controllers\PagesController@index',
        'as'=>'/'

    ]);

Route::post('/uploadFile',
    [
        'uses'=> '\App\Http\Controllers\PagesController@uploadFile',
        'as'=>'uploadFile'

    ]);


