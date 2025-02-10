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
//Vista de Bienvenida
Route::get('/', function () {return view('welcome');});

//vistas para el inico de sesion
Route::view('/login', 'login')->name('login');
Route::get('/logout', 'LoginAdmin@logout')->name('auth.logout');

//vista del dashboard
Route::get('/dashboardIntf','dashboardcontroler@dashboard')->name('dashboard');
Route::get('/dashboard', 'dashboardcontroler@dashboard')->middleware('auth');

//Vistas de creación
Route::get('/createStudentIntf', 'createController@interfaceCreate') ->name('createStudentIntf'); 
Route::get('/createGroup', 'createController@interfaceGroup')->name('createGroupIntf');

// Vistas de eliminación
Route::get('/deleteStudentIntf', 'deleteController@showInterface')->name('delStudentIntf');
Route::get('/delGroupIntf', 'deleteController@showInterfaceGroup')->name('delGroupIntf');

//vistas de actualización
Route::get('/updateStudentIntf', 'updateController@showInterface')->name('updateStudentIntf');
Route::get('/updateGroupIntf', 'updateController@showInterfaceGroup')->name('updateGroupIntf');

// vista de muestra de tablas
Route::get('/showTableStudent', 'showTController@showStudent')->name('tableStudentIntf');
Route::get('/showTableGroups', 'showTController@showTableGroups')->name('tableGroupsIntf');

// busqueda alumno
Route::get('/searchStudentForUp', 'showTController@searchStudentForUp')->name('searchStuUp');
Route::get('/searchStudentForDown', 'showTController@searchStudentForDown')->name('searchStuDown');

//busqueda Grupo
Route::get('/searchGroupForUp', 'showTController@searchGroupForUp')->name('searchGroupUp');
Route::get('/searhGroupForDown', 'showTController@searchGroupforDown')->name('searchGroupDown');

Route::get('/searchStudentForUp/{matricula}', 'showTController@searchStudForUpBtn')->name('searchStuBtnUp');
Route::get('/searchStudentForDown/{matricula}', 'showTController@searchStudForDownBtn')->name('searchStuBtnDown');

Route::get('/searchGroupForUp/{matricula}', 'showTController@searchGrpForUpBtn')->name('searchGrpBtnUp');
Route::get('/searchGroupForDown/{matricula}', 'showTController@searchGrpForDownBtn')->name('searchGrpBtnDown');

//Logica del login
Route::post('/login', 'LoginAdmin@login')->name('auth.login');

// Logica para estudiante
Route::post('/createStudent', 'createController@registerStudent')->name('createStudent');
Route::post('/deleteStudent', 'deleteController@deleteStudent')->name('deleteStudent');
Route::post('/updateStudent', 'updateController@updateStudent')->name('updateStudent');

// Logica para los grupos
Route::post('/createGroup', 'createController@createGroup')->name('postCreateGroup');
Route::post('/deleteGroup', 'deleteController@deleteGroup')->name('postDelGroup');
Route::post('/updateGroup', 'updateController@updateGroup')->name('postUptGroup');

