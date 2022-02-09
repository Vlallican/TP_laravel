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
    return view('welcome');
});

//Route::get('pattern/{n}', 'PatternController@show')->where('n', '[0-9]+');
Route::get('singleton', 'SingletonController@show');
Route::get('factory', 'FactoryController@factory');
Route::get('facade', 'FacadeController@facade');
Route::get('aggregation', 'AggregationController@aggregation');
Route::get('observeur', 'ObserveurController@observeur');
Route::get('strategie', 'StrategieController@strategie');
Route::get('command', 'CommandController@command');
