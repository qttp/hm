<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Cate;
use App\Http\Model\Video;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        //获取顶级分类
        $cates = Cate::where('pid',0) -> get();
        //计算选中的类别
        $pid = $this -> types($pid);
        $current = array_pop($pid);
		//取二级分类
		$types = Cate::where('pid',$current) -> get();
		//获取对应标签的视频
		$videos = $this -> getVideo($current,$pid);
        //向模板分配变量
		return view('home.cate.list',compact(['cates','types','pid','current','videos']));
    }

    private function types($types)
    {   
        if (Intval($types)) {
            
            $cates = Cate::where('pid',$types) -> get();
            
            $arr = [];
            foreach($cates as $k => $type){
                $arr[$k] = $type -> field_name .'='. $types .'_'. $type -> cate_id;
            }
            array_push($arr,$types);
            return $arr;
        }
        
        $types = explode('|-|',$types);
        array_pop($types);
        
        
        preg_match('/\S+=(\d)+_/',$types[0],$pid);
        
        array_push($types,$pid[1]);
        return $types;
    }
	private function getVideo($current,$types)
	{
		//分割数组
		$str ='';
		foreach($types as $k => $type){
			$tag = explode('_',$type);
			if(count($tag) <= 2){
				$tag['2'] = '';
			} else {
				$tag['2'] = '_' . $tag['2'];
			}
			$tag = substr(strrchr($tag['0'],'='),1) . '_' . $tag['1'] . $tag['2'];
			$str .= $tag . '\S+';
		}
		$str =  '/' . rtrim($str,'\S+') . '/';
		//获取所有视频然后进行正则匹配
		$videos = Video::where('cate_id',$current) -> get();
		$resource = [];
		foreach ($videos as $video) {
			preg_match($str,$video -> tag,$preg);
			if(count($preg)){
				$resource[] = $video;
			}
		}
		if (count($resource) > 0) {
		    return $resource;
		} else {
			return $videos;
		}
	}
}