<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	/**
	 *功能:后台用户登录页面
	 *return 登录模板
	*/
    public function login(){
    	if (session('AdminLoginFlag')) {
    		return redirect('/admin/index');
    	}
        return view('admin.login');
    }
    public function index(){
    	//是否合法,返回错误信息
    	return view('admin.index');
    }
}
