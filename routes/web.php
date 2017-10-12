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

Route::get('test','Admin\SystemController@putFile');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login','Admin\LoginController@login');
Route::get('/admin/verify','Admin\LoginController@verify');
Route::post('/admin/dologin','Admin\LoginController@dologin');
Route::get('/admin/system/check','Admin\SystemController@check');
Route::get('/admin/cate/check','Admin\CategoryController@check');
Route::get('/admin/cate/addChild/{pid}','Admin\CategoryController@addChild');
Route::post('/admin/cate/doAddChild','Admin\CategoryController@doaddChild');
Route::get('/admin/video/getfields','Admin\VideoController@getChields');
Route::post('admin/user/upload','Admin\UserController@upLoad');
Route::post('admin/video/upload','Admin\VideoController@upLoad');

Route::group(['middleware' => 'adminLogin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/index','LoginController@index');
    Route::get('/logout','LoginController@logout');
	Route::resource('/user','UserController');
	Route::get('check','UserController@check');
	Route::get('dverify','UserController@verify');
	Route::resource('system','SystemController');
	Route::resource('cate','CategoryController');
	Route::resource('video','VideoController');
	Route::get('/user/{id}/editInfo','UserController@editInfo');
	Route::post('/user/auth','UserController@auth');
});
