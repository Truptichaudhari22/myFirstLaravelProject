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
    return view('login');
});

Route::get('/list','UserController@list');
Route::get('/create','UserController@create');
Route::get('/login','UserController@login');
Route::post('/loginsubmit','UserController@loginsubmit');
Route::post('/createsubmit','UserController@createsubmit');




// Route::group(['middleware'=>['LogCheck']],function(){
// Route::get('/list','UserController@list');
// Route::post('/loginsubmit','UserController@loginsubmit');
// Route::post('/createsubmit','UserController@createsubmit');

// });