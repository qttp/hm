<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Model\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //查询所有的用户并且显示
        $keywords = $request -> input('keywords') ?? '';
        $type = $request -> input('type') ?? 'uname';
        $users = User::where($type,'like',"%{$keywords}%") -> paginate(2);
        $auth = ['普通管理员','超级管理员'];
        $sex = ['女','男'];
        return view('admin.user.lists',compact(['users','auth','sex','keywords']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加模板让用户创建
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except(['_token','reupwd']);
        //插入数据
        $data['reg_time'] = time();
        $data['upwd'] = Hash::make($data['upwd']);
        $data['face'] = 'default.jpg';
        $res = User::insert($data);
        if ($res) {
           echo 1;
        } else {
           echo 0;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = $request -> all();
        $obj = new User();
        if (! $obj -> verify('/^\S{2,8}$/',$data['nick_name'])) {
            $err = '设置昵称不符合规范';
            return back() -> withInput();
        }
        if ($obj -> verify('/^1[345678]\d{9}$/',$data['tel'])) {
            $err = '设置手机号码不符合规范';
            return back() -> withInput();
        }
        if ($obj -> verify('/^\w+@\w+(\.cn|\.com|\.net){1,2}$/',$data['email'])) {
            $err = '设置邮箱不符合规范';
            return back() -> withInput();
        }
        dd($request -> all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     *功能:判断置指定数据是否存在于数据库中
     *param 请求的参数
     *return 存在返回数据,否则返回false
    */
    public function check(request $request){
        $obj = new User();
        $where = $obj -> checkType($request -> input('type'));
        if (! $where) {
            echo 0;
            return false;
        }
        $info = User::where($where,$request ->input('val'))->first();
        if($info){
            echo 1;
        } else {
            echo 0;
        }
    }
    public function verify(request $request)
    {
        $obj = new User();
        $key = $obj -> checkType($request -> input('type'));
        $val = $request -> input('val');
        if (! $key) {
            echo 0;
            return false;
        }
        if (! DB::table('admin_user') -> where($key,$val) -> count()){
            if (User::where($key,$request -> input('old'))->update([$key=>$val])) {
                echo 1;
            } else {
                echo 0;
            }
        }
        echo 0;
    }
}
