<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Cate;
use App\Http\Model\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $data['type'] = $request -> only('type')  == false ? '' : $request -> only('type');
        $data['keywords'] = $request -> only('keywords') == false ? '' : $request -> only('keywords');
        if($data['type'] != null){
            $data['type'] = $data['type']['type'];
            $data['keywords'] = $data['keywords']['keywords'];
            $videos = Video::where($data['type'],'like','%'. $data['keywords'] .'%') -> join('cate','video.cate_id','=','cate.cate_id') -> paginate(2);
        } else {
		//取数据 一对一
        $videos = DB::table('video') -> join('cate','video.cate_id','=','cate.cate_id') -> paginate(2);
        }
        $status = ['禁用','待审核','正常'];
        return view('admin.video.lists',compact('videos','status','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //查询分类信息,获取顶级分类
        $types = Cate::where('pid',0) -> get();
        if($request -> only('id')) {
            $arr = $request -> only('id');
            $id = array_pop($arr);
        } else {    
            $id = $types[0] -> cate_id;
        }
        $lists = Cate::where('pid',$id) -> get();
        return view('admin.video.add',compact('types','lists','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request -> except(['upload_face','_token']);
        $types = Cate::where('pid',$data['cate_id']) -> get();
        $tag = '';
		if(intval($data['hours']) == false || intval($data['minutes']) == false) {
			return back();
		};
		//计算视频的应有时长
		$data['video_time'] = ($data['hours'] * 60 + $data['minutes']) * 60;
		unset($data['hours']);
		unset($data['minutes']);
        foreach($types as $type) {
            if (array_key_exists($type -> field_name,$data)) {
                if(is_array($data[$type -> field_name])){
                    //拼接字符串
                    $tag .= implode(',',$data[$type -> field_name]) . '||';
                } else {
                    $tag .= $data[$type -> field_name] . '||';
                }
                unset($data[$type -> field_name]);
            }
        }
        $data['tag'] = $tag;
        $data['create_time'] = time();
        //保存到数据库,视频表
        if (Video::insert($data)) {
            return redirect('/admin/video');
        } else {
            return back() -> withInput();
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
        $video = Video::find($id);
        return view('admin.video.edit',compact('video'));
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
        //
        $video = $request -> except('_token','_method');
        if (Video::where('video_id',$id) -> update($video)) {
            return redirect('/admin/video');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //查询对应的视频文件是否存在
        $video = Video::find($id);
        if ($video == null) {
            return 0;
        }
        //删除对应的视频
        if (Video::where('video_id',$id) -> delete()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getLeval($data,$id=0,$leval=0)
    {
        $subTree = [];
        foreach($data as $v){
            if ($v -> pid == $id) {
                $v -> leval = $leval;
                $subTree[] = $v;
                $subTree = array_merge($subTree,$this->getLeval($data,$v -> cate_id,$leval+1));
            }
        }
        return $subTree;
    }
    public function getChields(request $request)
    {
        $types = Cate::where('pid',$request->only('cate_id')) -> get();
        $cates = [];
        foreach($types as $type){
            $cates[$type -> cate_id] = Cate::where('pid',$type -> cate_id) -> get();
            $cates[$type -> cate_id]['cate_name'] = $type -> cate_name;
        }
        return $cates;
    }

    public function upLoad(request $request)
    {
        //上传视频文件
        $file = Input::file('file');
        if ($file -> isValid()) {
            $extension = $file->getClientOriginalExtension();
            $newName = date('YmdHis') . mt_rand(10000, 99999) . '.' . $extension;
            //移动保存文件
            $path = $file->move(public_path().'/uploads/video/file/',$newName);
            return $filepath = 'uploads/video/file/' . $newName;
        }
    }
    public function upLoadFace(request $request)
    {
        $file = Input::file('upload_face');
        if ($file -> isValid()) {
            $extension = $file->getClientOriginalExtension();
            $newName = date('YmdHis') . mt_rand(10000, 99999) . '.' . $extension;
            //移动保存视频封面文件
            $path = $file->move(public_path().'/uploads/video/face/',$newName);
            return $filepath = 'uploads/video/face/' . $newName;
        }
    }
    public function changeStatus(request $request)
    {
        $data = $request -> except('_token');
        //查询数据库是否存在此数据
        $video = Video::find($data['id']);
        if ($video == null) {
            return 0;
        }

        //判断是否是指定的值
        switch($data['status']){
            case 'open':
                $status = 2;
            break;
            case 'close':
                $status = 0;
            break;
            default:
                return 0;
            break;
        }

        //向数据库更改数据
        $re = Video::where('video_id',$data['id']) -> update(['status' => $status]);
        if($re) {
            return 1;
        } else {
            return 0;
        }
    }
}
