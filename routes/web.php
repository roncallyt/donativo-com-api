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


Route::namespace('Site')->group(function (){

    Route::get('/','HomeController')->name('site.home');
    Route::get('/sobre','SobreController')->name('site.sobre');
    Route::get('/blog','BlogController@index')->name('site.blog');
    Route::get('/blog/{id?}','BlogController@show')->name('site.blog');
    Route::get('/contato','ContatoController@index')->name('site.contato');
    Route::post('/contato','ContatoController@send')->name('site.contato');

});

Route::namespace('Painel')->group(function (){

    Route::group(['middleware'=>'auth'],function () {

        Route::get('/painel','HomeController')->name('painel.home');
        Route::get('/painel/contato','ContatoController@index')->name('painel.contato');
        Route::get('/painel/contato/restore/{id}','ContatoController@restore')->name('painel.contato.restore');
        Route::get('/painel/contato/delete/{id}','ContatoController@delete')->name('painel.contato.delete');
        Route::get('/painel/blog','BlogController@index')->name('painel.blog');
        Route::get('/painel/blog/novo','BlogController@novo')->name('painel.blog.novo');
        Route::post('/painel/blog/novo','BlogController@cadastrar')->name('painel.blog.novo');
        Route::get('/painel/blog/edita/{id}','BlogController@editar')->name('painel.blog.edita');
        Route::put('/painel/blog/edita/{id}','BlogController@atualizar')->name('painel.blog.edita');
        Route::get('/painel/blog/delete/{id}','BlogController@delete')->name('painel.blog.delete');


    });

    Route::get('/painel/login','LoginController@index')->name('login');
    Route::post('/painel/login','LoginController@logar')->name('login');
    Route::get('/painel/sair','LoginController@logout')->name('logout');
});


