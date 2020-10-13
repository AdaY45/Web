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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/brands','App\Http\Controllers\HomeController@brands');
Route::get('/{id}product','App\Http\Controllers\HomeController@oneProduct');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@dashboard');
    Route::get('/edit{id}', 'App\Http\Controllers\Admin\DashboardController@edit');
    Route::post('/save{id}', 'App\Http\Controllers\Admin\DashboardController@update');
    Route::get('/delete{id}', 'App\Http\Controllers\Admin\DashboardController@delete');
    Route::resource('category', 'App\Http\Controllers\Admin\CategoryController', ['as'=>'admin']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
