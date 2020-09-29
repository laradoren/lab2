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

Auth::routes();

Route::namespace('\App\Http\Controllers')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('pages', 'PagesController', ['except' => ['show, create, store']]);
});

Route::get('/{url}', [
    'as'   => 'page::read',
    'uses' => '\App\Http\Controllers\PagesController@show'
])->where('url', '[^\s]+');
