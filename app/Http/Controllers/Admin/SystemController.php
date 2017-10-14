<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\System;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $configs = System::get();
        foreach($configs as $key => $config){
            switch($config->system_type){
                case 'input':
                    $configs[$key]['system_config'] = '<input class="tpl-form-input" name="system_content[]" style="color:black" type="text"  value="'. $config -> system_content .'"/>';
                break;
                case 'img':
                    $configs[$key]['system_config'] = '<div class="tpl-user-panel-profile-picture"><img src="'. $config -> system_content .'" alt="'. $config -> system_content .'"/></div>';
                break;
                case 'textarea':
                    $configs[$key]['system_config'] = '<textarea  name="system_content[]">'.$config->system_content.'</textarea>';
                break;
                case 'radio':
                    //存放最终要返回的格式化的数据的
                    $str = '';
                    $arr = explode(',',$config->system_value);
                    foreach ($arr as $item) {
                        $a = explode('|',$item);
//判断是否需要将被选中这个标签checked添加到当前的元素上
                        $c =  ($config->system_content == $a[0])?'checked':'';
//$a = [0=>1,1=>"开启"] ====><input type="radio" name="system_content" value="1" >开启
                        $str.='<input type="radio" name="system_content"'.$c.' value="'.$a[0].'" >'.$a[1];
                  }
                  $configs[$key]['system_config'] = $str;
                break;
            }
        }
        return view('admin.system.lists',compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request -> all());
        $data = $request -> except('_token');
        foreach($data as $v){
            if ($v == null) {
                return back();
            }
        }
        if (System::insert($data)) {
            return redirect('admin/system');
        } else {
            return back()->withInput();
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
        //取数据，显示编辑页面
        $config = System::find($id);
        return view('admin.system.edit',compact('config'));
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
        //更新数据
        $data = $request -> all();
        $data = $request -> except(['_token','_method']);
        $res = System::where('system_id',$id) -> update($data);
        if ($res) {
            return redirect('admin/system');
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
        //查询要删除的记录的模型
        $conf = system::find($id);
        //执行删除操作
        $re = $conf->delete();

        //根据返回的结果处理成功和失败
        if($re){
            //如果删除成功，更新web.php文件中的配置项
            return 1;
        }   else{
            return 0;
        }
    }
    public function check(request $request)
    {
        $res = System::where('system_field',$request -> input('system_field')) -> first();
        if($res != false) {
            return 1;
        } else {
            return 0;
        }
    }
}
