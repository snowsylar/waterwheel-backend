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
Route::get('greeting', function () {
    return 'Greeting';
});
Route::get('test', 'TestController@index')->name('test');
Route::get('setCache', 'TestController@setCache')->name('setCache');
Route::get('getCache', 'TestController@getCache')->name('getCache');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/foo', function () {
    $exitCode = Artisan::call('email:send', [
        'user' => 1, '--queue' => 'default'
    ]);

    var_dump($exitCode);

    //
});
