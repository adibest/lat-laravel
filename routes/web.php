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
    return view('layout2.app');
});

Route::get('/pangkat2/{angka}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/proses', 'PegawaiController@proses');

Route::get('/test' , function () {
	return view('layout.app');
});

Route::get('/article' , function () {
	return view('article.index');
});

Route::get('/category' , function () {
	return view('category.index');
});

Route::get('/kamar/{fulan}', 'LuasKamarController@LuasKamar');
Route::post('/hasil', 'LuasKamarController@hasil');

Route::get('/article2/{judul}/{article}' , function () {
	return view('article2.index');
})->name('artikel');

Route::get('/category2' , function () {
	return view('category2.index');
});