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

//未登录路由设置
Route::get('/admin/login','Admin\LoginController@login');
Route::get('/admin/verify','Admin\LoginController@verify');
Route::post('/admin/dologin','Admin\LoginController@dologin');

//后台路由组
Route::group(['middleware' => 'adminLogin','prefix'=>'admin','namespace'=>'Admin'],function(){
	//已登录路由设置
    Route::get('/index','LoginController@index');
    Route::get('/logout','LoginController@logout');
	//后台管理员路由设置
	Route::resource('/user','UserController');
	Route::get('check','UserController@check');
	Route::post('/user/upload','UserController@upLoad');
	Route::post('/user/edit/{id}','UserController@update');
	Route::get('/dverify','UserController@verify');
	//分类路由设置
	Route::post('/cate/doAddChild','CategoryController@doaddChild');
	Route::get('/cate/addChild/{pid}','CategoryController@addChild');
	Route::resource('cate','CategoryController');
	Route::get('/cate/check','CategoryController@check');
	//视频路由设置
	Route::get('/video/getfields','VideoController@getChields');
	Route::post('/video/changeStatus','VideoController@changeStatus');
	//视频文件上传
	Route::post('/video/upload','VideoController@upLoad');
	Route::post('/video/upload/videoface','VideoController@upLoadFace');
	Route::resource('/video','VideoController');
	Route::get('/user/{id}/editInfo','UserController@editInfo');
	Route::post('/user/auth','UserController@auth');
	//系统路由配置项
	Route::resource('/system','SystemController');
	Route::get('/system/check','SystemController@check');
});

//前台路由首页
Route::group(['middleware'=>'index'],function(){
	Route::get('/','Home\IndexController@index');
});
//前台未登录路由组
Route::group(['middleware'=>'index','prefix'=>'home','namespace' => 'Home'],function(){
	Route::resource('/index','IndexController');
	//分类
	Route::get('/cate/{pid}','CateController@index');
	Route::resource('/video','VideoController');

	//播放路由设置
	Route::get('/{id}/play','VideoController@play');
});
