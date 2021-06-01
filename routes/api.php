<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/login', 'Api\AuthController@login')->name('login');

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/logout', 'Api\AuthController@logout')->name('logout');

    Route::prefix('categorias')->group(function() {
        Route::get('/', 'Api\CategoryController@index')->name('category.index');
        Route::post('/', 'Api\CategoryController@store')->name('category.store');
        Route::get('/{category}', 'Api\CategoryController@show')->name('category.show');
        Route::patch('/{category}', 'Api\CategoryController@update')->name('category.update');
        Route::delete('/{category}', 'Api\CategoryController@delete')->name('category.delete');
    });
});
