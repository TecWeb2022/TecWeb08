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
    return view('home');
});

Route::view('/home', 'home')
        ->name('home');

Route::view('/profilo', 'profilo')
        ->name('profilo');

Route::view('/modifica', 'modifica')
        ->name('modifica');

Route::get('/faqs', 'FaqController@prova')
->name('faq');