<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function play($id)
    {
        //获取指定id号的视频进行播放
		$video = Video::find($id);
		//显示页面
		return view('home.video.play',compact('video'));
    }
}
