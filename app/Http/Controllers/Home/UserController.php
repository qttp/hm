<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\HomeUser

class UserController extends Controller
{
    public function index(request $request)
    {
        //��ѯ���е��û�������ʾ
        $keywords = $request -> input('keywords') ? $request -> input('keywords') : '';
        $type = $request -> input('type') ? $request -> input('type') : 'uname';
        $users = Homeuser::where($type,'like',"%{$keywords}%") -> paginate(3);
//        $users = Homeuser::where('uid','>',0) -> paginate(5);
        $vip = ['�ǻ�Ա','��Ա'];
        $status = ['δ����','����','����'];
        $chStatus = ['ɾ��','�ⶳ','����'];
//        $sex = ['Ů','��'];
        return view('admin.homeuser.lists',compact(['keywords','type','users','vip','status','chStatus']));

    }
	
	public function destroy($id)
    {
        //�û�״̬�䶯,0:δ����->ɾ�� 1:����->�ⶳ 2:����->����
//        $chStatus = ['ɾ��','�ⶳ','����'];
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
