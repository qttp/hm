<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require_once app_path() . '/Http/Org/code/Code.class.php';
use App\Http\Org\code\Code;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{
    
    public function login()
    {
        if (session('adminLoginFlag')) {
            return redirect('/admin/index');
        }
        return view('admin.login');
    }
    
    public function dologin(request $request)
    {
        if(strtoupper($request -> input('check')) != session('code')){
            return redirect('/admin/login') -> with('errors','verify') -> withInput();
        }
        
        $uname = $request -> input('user_name');
        $user = DB::table('admin_user') -> orWhere('user_name',$uname) -> orWhere('email',$uname) -> orWhere('nick_name',$uname) -> orWhere('tel',$uname) ->  first();
        if(! $user){
            return redirect('/admin/login') -> with('errors','user or password error');
        }

        if(! Hash::check($request -> input('upwd'),$user->upwd)){
            return redirect('/admin/login') -> with('errors','user or password error') -> withInput();
        };
        session(['adminInfo' => $user,'adminLoginFlag' => true]);
        //$life = $request -> input('mark') ? (60*24*7) : 1;
        //ʹ�����ݿ��ֶα�ǵ�¼״̬
        //���ñ���ĵ�¼ʱ���
        //�˴ε�¼ʱ�� - �ϴε�¼ʱ�� > 7��
        return redirect('/admin/index');
    }

    public function index()
    {
    	
    	return view('admin.index');
    }
    
    public function verify()
    {
        (new Code) -> make();
    }
    public function logout(request $request)
    {
        //�����ݿ��������
        DB::table('admin_user') -> where('user_id',session('adminInfo')->user_id) -> update(['last_login'=>time(),'login_ip'=>$request->ip()]);
        $request -> session() -> forget('adminLoginFlag','adminInfo');
        Cookie::queue(session_name(),'');
        return redirect('/admin/login');
    }
}
