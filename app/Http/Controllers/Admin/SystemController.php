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
            switch(){
                case 'input':
                    $config[$key]['config'] = '<input class="tpl-form-input" name="system_content[]" type="text" />';
                break;
                case 'textarea':
                break;
                case 'radio':
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
        //
    }
    public function check(request $request)
    {
        $res = System::where('system_name',$request -> input('system_name')) -> first();
        if($res != false) {
            return 1;
        } else {
            return 0;
        }
    }
    public function putFile()
    {
        $systemInfo = System::select('system_content','system_name') -> get();
        //将数据写入文件
        file_put_contents(base_path().'/config/systemInfo.php',$systemInfo);
    }
}
