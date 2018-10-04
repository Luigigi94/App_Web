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
    return view('home');
});

Route::get('about',function (){
   return view('about');
})->name('acerca');

Route::get('Contact', function (){
   return view('Contact');
})->name('contacto');

Route::get('Post',function (){
    return view('Post');
})->name('Post');

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Auth::routes();

Route::get('activate/{token}', 'Auth\[email protected]')
    ->name('activate');
