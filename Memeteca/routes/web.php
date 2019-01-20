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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios','UserController');

Route::get('/all/usuarios','UserController@alluser')->name('todos');

Route::get('/usuarios','UserController@index')
    ->name('users');
//
//
//Route::get('/usuarios/{user}','UserController@show')
//    ->where('user','[0-9]+')
//    ->name('users.show');
//
//
//Route::get('/usuarios/nuevo','UserController@create')->name('users.create');
//
//Route::post('/usuarios','UserController@store');
//
//Route::get('/usuarios/{user}/editar','UserController@edit')->name('users.edit');
//
//Route::put('/usuarios/{user}','UserController@update')->name('users.update');
//
//Route::delete('/usuarios/{user}','UserController@destroy')->name('users.destroy');



Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/chempionleague','GoalscorerController');
