<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\System;

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
        foreach($request -> all() as $v){
            if (! $v) {
                return back();
            }
        }
        if ($request -> input('mark')) {
            $data = $request -> except(['_token','mark']);
            $data['system_value'] = 1;
        } else {
            $data = $request -> except('_token');
            $data['system_value'] = 0;
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
}
