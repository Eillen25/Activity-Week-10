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

//Route::get('/[linknya]', ControllerYgHandleRequest);
//Route::post('/[linknya]', ControllerYgHandleRequest);

/*Route::post('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//$basepath_controller = "App\Http\Controllers\";


Route::get('/', 'App\Http\Controllers\AwalController@index');
Route::get('/login', 'App\Http\Controllers\AwalController@login');
Route::get('/register', 'App\Http\Controllers\AwalController@register');
// Route::post('/tangkap', 'App\Http\Controllers\AwalController@tangkap');

Route::post('/authentication', 'App\Http\Controllers\AwalController@authentication');
Route::get('/rahasia', 'App\Http\Controllers\AwalController@rahasia');
Route::get('/logout', 'App\Http\Controllers\AwalController@logout');
Route::get('/secret', 'App\Http\Controllers\AwalController@secret');
