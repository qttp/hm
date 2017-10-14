<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\HomeUser

class UserController extends Controller
{
    public function index(request $request)
    {
        //查询所有的用户并且显示
        $keywords = $request -> input('keywords') ? $request -> input('keywords') : '';
        $type = $request -> input('type') ? $request -> input('type') : 'uname';
        $users = Homeuser::where($type,'like',"%{$keywords}%") -> paginate(3);
//        $users = Homeuser::where('uid','>',0) -> paginate(5);
        $vip = ['非会员','会员'];
        $status = ['未激活','冻结','正常'];
        $chStatus = ['删除','解冻','冻结'];
//        $sex = ['女','男'];
        return view('admin.homeuser.lists',compact(['keywords','type','users','vip','status','chStatus']));

    }
	
	public function destroy($id)
    {
        //用户状态变动,0:未激活->删除 1:冻结->解冻 2:正常->冻结
//        $chStatus = ['删除','解冻','冻结'];
        $homeuser = Homeuser::find($id);
        switch($homeuser -> status){
            case 0:
                $re = Homeuser::where('uid',$id) -> delete();
                break;
            case 1:
                $re = Homeuser::where('uid',$id) -> update(['status' => 2]);
                break;
            case 2:
                $re = Homeuser::where('uid',$id) -> update(['status' => 1]);
                break;
            default:
                echo 0;
                break;
        }

        if ($re) {
            echo 1;
        } else {
            echo 0;
        }

    }
	
	public function check(request $request){
        $obj = new Homeuser();
        $where = $obj -> checkType($request -> input('type'));
        if (! $where) {
            echo 0;
            return false;
        }
        $info = Homeuser::where($where,$request ->input('val'))->first();
        if($info){
            echo 1;
        } else {
            echo 0;
        }
    }
	
	public function verify(request $request)
    {
        $obj = new Homeuser();
        $key = $obj -> checkType($request -> input('type'));
        $val = $request -> input('val');
        if (! $key) {
            echo 0;
            return false;
        }
        if (! DB::table('homeuser') -> where($key,$val) -> count()){
            if (Homeuser::where($key,$request -> input('old'))->update([$key=>$val])) {
                echo 1;
            } else {
                echo 0;
            }
        }
        echo 0;
    }
}
