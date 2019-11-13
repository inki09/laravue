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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', 'ImportController@test');
Route::Resource('/posts', 'PostController');
Route::get('/map','MapController@test')->name('map.test');*/

Route::get('/test', 'PostController@test' );
Route::get('/{any}', function () {
    return view('post');
})->where('any', '.*');
