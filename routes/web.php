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


Route::get('/dashboard', 'dashboardcontroler@dashboard')->name('dashboard');
Route::get('/createStudent', 'createController@interfaceCreate') ->name('createInterface');
Route::get('/deleteControler', 'deleteContoler@showInterface')->name('delInterface');
Route::get('/login', 'LoginAdmin@index')->name('login');
Route::get('/dashboard', 'dashboardcontroler@dashboard')->middleware('auth');
Route::get('/updateStudent', 'updateController@showInterface')->name('updateInterface');
Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', 'LoginAdmin@login')->name('auth.login');
Route::post('/createStudent', 'createController@registerStudent')->name('createStudent');
Route::post('/deleteStudent', 'deleteController@deleteStudent')->name('deleteStudent');
Route::post('/createGroup', 'createController@createGroup')->name('createGroup');
Route::post('/updateStudent', 'updateController@updateStudent')->name('updateStudent');