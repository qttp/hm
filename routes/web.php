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
Route::get('/hm',function(){
    return view('/v/play');
});

Route::get('/vi',function(){
    return view('/v/vi');
});
Route::get('/index',function(){
    return view('/v/index');
});
Route::get('/info',function(){
    return view('v/info');
});
Route::get('/list',function(){
    return view('v/list');
});
Route::get('/vipinfo',function(){
    return view('v/vipInfo');
});
Route::get('/search',function(){
    return view('v/search');
});
Route::get('/question',function(){
    return view('v/question');
});
