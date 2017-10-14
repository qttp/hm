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
        //��ȡָ��id�ŵ���Ƶ���в���
		$video = Video::find($id);
		//��ʾҳ��
		return view('home.video.play',compact('video'));
    }
}
