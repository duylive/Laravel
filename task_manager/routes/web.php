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
}) -> name('welcome');

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create', function () {

    });

    Route::post('store', function () {

    });

    Route::get('{id}/show', function () {

    });

    Route::get('{id}/edit', function () {


    });

    Route::patch('{id}/update', function () {

    });

    Route::delete('{id}', function () {

    });
});
Route::resource('customers', 'CustomerController');

Route::prefix('tasks')->group(function () {
    Route::get('index', function () {
        return view('tasks.index');
    });

    Route::get('create', function () {

    });

    Route::post('store', function () {

    });

    Route::get('{id}/show', function () {

    });

    Route::get('{id}/edit', function () {


    });

    Route::patch('{id}/update', function () {

    });

    Route::delete('{id}', function () {

    });
});
Route::resource('tasks', 'TaskController');

Route::get('/tasks', 'TaskController@index')->name('tasks.index');

Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');

Route::post('/tasks', 'TaskController@store')->name('tasks.store');
