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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
  'as' => 'peserta',
  'prefix' => 'peserta'
], function() {
  Route::get('/', 'PesertaController@index');
  Route::post('/', 'PesertaController@store')->name('.store');
  Route::get('/{id}', 'PesertaController@show')->name('.show');
  Route::put('/{id}', 'PesertaController@update')->name('.update');
  Route::delete('/{id}', 'PesertaController@destroy')->name('.destroy');
})

Route::group([
  'as' => 'kelompok',
  'prefix' => 'kelompok'
], function() {
  Route::get('/', 'KelompokController@index');
  Route::post('/', 'KelompokController@store')->name('.store');
  Route::get('/{id}', 'KelompokController@show')->name('.show');
  Route::put('/{id}', 'KelompokController@update')->name('.update');
  Route::delete('/{id}', 'KelompokController@destroy')->name('.destroy');
})

Route::group([
  'as' => 'peserta',
  'prefix' => 'peserta'
], function() {
  Route::get('/', 'PesertaController@index');
  Route::post('/', 'PesertaController@store')->name('.store');
  Route::get('/{id}', 'PesertaController@show')->name('.show');
  Route::put('/{id}', 'PesertaController@update')->name('.update');
  Route::delete('/{id}', 'PesertaController@destroy')->name('.destroy');
})
