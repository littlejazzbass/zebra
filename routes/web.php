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

Route::get('/',function(){
    return view('welcome');
});
Route::middleware(['auth','general'])->group(function(){
    Route::get('/mypage/skill/','HomeController@index')->name('home');
});
