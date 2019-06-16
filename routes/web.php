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
Auth::routes();

Route::middleware(['auth','general'])->group(function(){
    Route::get('/', function(){
        return redirect()->route('home');
    });
    Route::get('/mypage/{group?}/{skill?}','HomeController@index')->name('home');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::get('admin/index', 'AdminController@index')->name('admin');
});
