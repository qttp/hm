<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Cate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Cate::get();
        $cates = $this -> getLeval($cates);
        foreach($cates as $cate){
            $cate -> name = str_repeat('&nbsp',4 * $cate -> leval) . $cate -> cate_name;
        }
        return view('admin.cate.lists',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //取数据
        $cates = Cate::get();
        $cates = $this -> getLeval($cates);
        foreach($cates as $cate){
            $cate -> name = str_repeat('&nbsp',4 * $cate -> leval) . $cate -> cate_name;
        }
        //显示添加模板
        return view('admin.cate.add',compact('cates'));
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
        $data = $request -> except('_token');
        $data['create_time'] = time();
        if (Cate::insert($data)) {
            return redirect('/admin/cate');
        } else {
            return back();
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
        //向数据库取数据
        $cate = Cate::find($id);
        //把数据显示到模板中
        return view('admin.cate.edit',compact('cate'));
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
        $data = $request -> only('cate_name');
        if (Cate::where('cate_id',$id) -> update($data)) {
            return redirect('admin/cate');
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
        //删除
        if (Cate::where('cate_id',$id)->delete()) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function check(request $request)
    {
        $cate_name = $request -> input('cate_name');
        if (Cate::where('cate_name',$cate_name) -> first()) {
            echo 1;
        } else {
            echo 0;
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
    public function addChild($pid)
    {
        //显示添加页面模板
        return view('admin.cate.addChild',compact('pid'));
    }
    public function doAddChild(request $request)
    {
        $cateChild = $request -> except('_token');
        $cateChild['create_time'] = time();
        if (Cate::insert($cateChild)) {
            return redirect('/admin/cate');
        } else {
            return back();
        }
    }
}
