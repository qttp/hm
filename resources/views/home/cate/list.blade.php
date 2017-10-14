@extends('home.temp.temp')
@section('content')
		<link href="/video/css/list_new.css" rel="stylesheet" type="text/css">
        <div class="page-list  page-list-type1">
            <div class="wrapper-content clearfix mb20">
                <div class="site-main">
                    <!-- 分类 -->
                    <div id="types" class="mod_sear_menu mt20 mb30">
                        <div class="mod_sear_list" data-widget-expcol="expcol" data-expcol-cls="mod_sear_list_open">
                            <h3>
                                频道：
                            </h3>
                            <ul class="mod_category_item">
                                @foreach($cates as $k => $cate)
                                <li @if($cate -> cate_id == $current) class="selected"  @endif >
                                    <a href="{{ url('/home/cate/'.$cate -> cate_id ) }}">
                                        {{ $cate -> cate_name }}
                                    </a>
                                </li>
								@endforeach
                            </ul>
                        </div>
						@foreach($types as $key => $list)
                        <div class="mod_sear_list">
                            <h3>
                                {{ $list -> cate_name }}：
                            </h3>
                            <ul class="mod_category_item cates" name="{{$list -> field_name}}">
								<?php $str = $list -> field_name .'='. $current . '_' . $list -> cate_id; ?>
                                <li @if($pid[$key] == $str) class="selected" @endif>
                                    <a href="javascript:;" name="{{ $current . '_' . $list -> cate_id }}">
                                        全部
                                    </a>
                                </li>
								<?php $gats = App\Http\Model\Cate::where('pid',$list -> cate_id) -> get() ?>
								@foreach($gats as $gat)
								<?php $str = $list -> field_name . '=' . $current . '_' .  $gat -> pid  . '_' .$gat -> cate_id; ?>
								<li  @if($pid[$key] == $str) class="selected" @endif>
                                    <a href="javascript:;" name="{{ $current . '_' . $gat -> pid  . '_' .$gat -> cate_id }}">
                                        {{ $gat -> cate_name }}
                                    </a>
                                </li>
								@endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    <!-- 分类 end-->
                    <div class="mb15 clearfix">
                        <div class="sort-result-container">
                            <div class="sort-result-l">
                                <div class="sort-result-l  border-n fl mt5">
                                    <em class="vm-inline c-999">
                                        排序：
                                    </em>
                                    <a href="/www/1/-------------11-1-1-iqiyi--.html" title="按热门排序" class="checkBox-item             selected
                                    ml5">
                                        <span class="search-checkBox">
                                            <i class="search-checkBox-inner">
                                            </i>
                                        </span>
                                        <em class="vm-inline">
                                            热门
                                        </em>
                                    </a>
                                    <a href="/www/1/-------------4-1-1-iqiyi--.html" title="按更新时间排序" class="checkBox-item         
                                    ml5">
                                        <span class="search-checkBox">
                                            <i class="search-checkBox-inner">
                                            </i>
                                        </span>
                                        <em class="vm-inline">
                                            更新时间
                                        </em>
                                    </a>
                                    <a href="/www/1/-------------8-1-1-iqiyi--.html" title="按评分排序" class="checkBox-item         
                                    ml5">
                                        <span class="search-checkBox">
                                            <i class="search-checkBox-inner">
                                            </i>
                                        </span>
                                        <em class="vm-inline">
                                            评分
                                        </em>
                                    </a>
                                </div>
                                <div class="list-popularizeAdv">
                                    <a href="http://www.iqiyi.com/dianying" target="_blank">
                                        <img src="picture/movieforlist.jpg" />
                                    </a>
                                </div>
                                <div class="sort-result-r fr mt5">
                                    <a data-searchpingback-elem="link" data-searchpingback-param="ptype=9&target=&site=iqiyi"
                                    href="/www/1/-------------11-1-1-iqiyi--.html" title="仅花猫视频专辑" class="checkBox-item             selected
                                    ml5">
                                        <span class="search-checkBox">
                                            <i class="search-checkBox-inner">
                                            </i>
                                        </span>
                                        <em class="vm-inline">
                                            花猫视频
                                        </em>
                                    </a>
                                    <a data-searchpingback-elem="link" data-searchpingback-param="ptype=9&target=&site="
                                    href="/www/1/-------------11-1-1---.html" rel="nofollow" title="全网专辑" class="checkBox-item      ml5">
                                        <span class="search-checkBox">
                                            <i class="search-checkBox-inner">
                                            </i>
                                        </span>
                                        <em class="vm-inline">
                                            全网
                                        </em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-cols">
                        <div class="wrapper-piclist" data-widget-listviptip="listviptip">
                            <ul class="site-piclist site-piclist-180236 site-piclist-auto">
                                @foreach($videos as $video)
								<li>
                                    <div class="site-piclist_pic">
                                        <a alt="{{ $video -> video_path }}" title="{{ $video -> video_path }}" href="/home/{{ $video -> video_id }}/play"
                                        class="site-piclist_pic_link" target="_blank">
                                            <img width="180" height="236" alt="{{ $video -> video_face }}" title="{{ $video -> video_face }}"
                                            src="/{{ $video -> video_face }}" />
                                            <div class="wrapper-listTitle">
                                                <div class="mod-listTitle">
                                                    <p class="viedo_rb">
                                                        <span class="icon-vInfo">
                                                            {{ date('H:i:s',$video -> video_time) }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="site-piclist_info">
                                        <div class="mod-listTitle_left">
                                            <p class="site-piclist_info_title ">
                                                <a title="{{ $video -> video_name }}" href="/home/{{ $video -> video_id }}/play" target="_blank">
                                                   {{ $video -> video_name }}
                                                </a>
                                            </p>
                                        </div>
                                        <div class="role_info">
                                            主演：{{ $video -> actor }}
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 页码 开始 -->
        <div data-ugcplayhistory-elem="pager" class="mod-page">
            <span class="noPage">
                上一页
            </span>
            <span data-key="1" class="curPage">
                1
            </span>
            <a data-key="2" data-search-page="item" title="跳转至第2页" href="/www/1/-------------11-2-1-iqiyi--.html">
                2
            </a>
            <a data-key="3" data-search-page="item" title="跳转至第3页" href="/www/1/-------------11-3-1-iqiyi--.html">
                3
            </a>
            <a data-key="4" data-search-page="item" title="跳转至第4页" href="/www/1/-------------11-4-1-iqiyi--.html">
                4
            </a>
            <a data-key="5" data-search-page="item" title="跳转至第5页" href="/www/1/-------------11-5-1-iqiyi--.html">
                5
            </a>
            <a data-key="6" data-search-page="item" title="跳转至第6页" href="/www/1/-------------11-6-1-iqiyi--.html">
                6
            </a>
            <a data-key="7" data-search-page="item" title="跳转至第7页" href="/www/1/-------------11-7-1-iqiyi--.html">
                7
            </a>
            <a data-key="8" data-search-page="item" title="跳转至第8页" href="/www/1/-------------11-8-1-iqiyi--.html">
                8
            </a>
            <a data-key="9" data-search-page="item" title="跳转至第9页" href="/www/1/-------------11-9-1-iqiyi--.html">
                9
            </a>
            <a data-key="10" data-search-page="item" title="跳转至第10页" href="/www/1/-------------11-10-1-iqiyi--.html">
                10
            </a>
            <a data-key="down" class="a1" data-search-page="item" title="跳转至2页" href="/www/1/-------------11-2-1-iqiyi--.html">
                下一页
            </a>
        </div>
        <div class="site-main">
            <!--列表页底部通栏广告-->
            <div id="1000000000048" class="ad-wrapper clearfix">
                <div class="divide-green-h">
                </div>
            </div>
        </div>
<script type="text/javascript">
	$(function(){
		$('#types').find('.cates').each(function(){
			$(this).find("li").click(function(){
				$(this).siblings().removeClass();
				$(this).attr('class','selected');
				var str = '';
				$('.cates').find('li[class="selected"]').each(function(){
					str += $(this).parent().attr('name') + '=' + $(this).find('a').attr('name') + '|-|';
				});
				location.href = "{{ url('/home/cate') }}/" + str;
			});
		});
	});
</script>
@endsection