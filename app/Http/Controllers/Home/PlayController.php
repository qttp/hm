<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Video;

class PlayController extends Controller
{
    public function play($id)
    {
    	//获取指定的视频
    	$video = Video::find($id);
    	//显示播放页
    	return view('home.play',compact('video'));
    }
}
