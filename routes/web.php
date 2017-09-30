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

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('common.list');
    })->name('admin.dashboard');

    Route::get('list', function () {
        return view('common.list');
    })->name('admin.list');

    Route::get('add', function () {
        return view('common.add');
    })->name('admin.add');

    Route::get('view', function () {
        return view('common.view');
    })->name('admin.view');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
