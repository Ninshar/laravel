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

//Route::any('query5', ['uses' => 'StudentController@query5']);

Route::any('query6', ['uses' => 'StudentController@query6']);

Route::any('orm1', ['uses' => 'StudentController@orm1']);
Route::any('orm2', ['uses' => 'StudentController@orm2']);

Route::any('request1', ['uses' => 'StudentController@request1']);


Route::any('dome', function(){
    return view('dome');
});