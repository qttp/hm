<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Cate;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //查询分类信息
        $cate = Cate::where('pid',0) -> get();
        if($request -> only('id')) {
            $arr = $request -> only('id');
            $id = array_pop($arr);
        } else {    
            $id = $cate[0] -> cate_id;
        }
        $lists = Cate::where('pid',$id) -> get();
        $field = ['类型'=>'type','地区'=>'area','资费'=>'money','年代'=>'year'];
        /*
        $cates = $this -> getLeval($cates,$id=0,$lev=0);
        $types = [];
        foreach($cates as $v){
            if($v -> leval == 0){
                $types[ $v -> cate_id ] = $v;
                foreach($cates as $k2 => $v2){
                    if($v2 -> leval == 1 && $v2->pid == $v->cate_id){
                        $types[ $v -> cate_id ][$v2->cate_id] = $v2;
                        foreach($cates as $k3=>$v3){
                            if($v3 -> leval == 2 && $v3->pid == $v2->cate_id){
 $types[ $v -> cate_id ][$v2->cate_id][$v3->cate_id] = $v3;
                            }
                        }
                    }
                }
            }
        }
        */
        return view('admin.video.add',compact('cate','lists','id','field'));
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
        dd($request -> all());
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
        $file = Input::file('video_file');
        dd($file);
        if ($file -> isValid()) {
            $extension = $file->getClientOriginalExtension();
            $newName = date('YmdHis') . mt_rand(10000, 99999) . '.' . $extension;
            //移动保存文件
            $path = $file->move(public_path().'/uploads/video',$newName);
            return $filepath = 'uploads/video/' . $newName;
        }
    }
}
