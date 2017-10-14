@extends('home.temp.temp')
@section('content')
<link href="/home/css/play-base.css" rel="stylesheet" type="text/css">
        <link href="/home/css/play-movie.css" rel="stylesheet" type="text/css">
        <link href="/home/css/play-movie.css" rel="stylesheet" type="text/css">
        <link href="/home/css/commentSys.css" rel="stylesheet" type="text/css">
		<link href="/home/css/list.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="/home/js/swfobject.js"></script>
        <div class="playerMain_bg">
            <!-- 播放器区 start -->
            <div data-pb="tmplt=longmovietplt" data-block-name="播放器" id="block-B">
                <div class="flashMovie_channel">
                    <div id="flashArea" class="flashArea">
                        <!--底纹广告-->
                        <div id="1000000000156" class="adv-under">
                        </div>
                        <div id="jujiPlayWrap">
                            <div class="container pt10 padplay" style="position: relative;">
							    <div id="comment-list">
								    <ul>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									    <li><span>12678673</span></li>
									</ul>
								</div>
                                <div class="videoArea-flash clearfix" data-switchlight-disablescroll="true"
                                data-widget-switchlight="light" style="position: relative;">
                                    <!-- flash播放器 start -->
                                    <div data-widget-videoarea="videoarea" class="videoArea">
                                        <!-- 播放器存放位置 -->
                                        <div class="close_light_bg" id="close_light_bg">
                                        </div>
                                        <div class="video" id="CuPlayer">
                                            <b>
                                                <img src="/home/images/loading.gif" />
                                                网页视频播放器加载中，请稍后...
                                                <a href="http://www.cuplayer.com/cuplayer" target="_blank">
                                                    点此升级&gt;&gt;
                                                </a>
                                            </b>
                                        </div>
                                        <script type="text/javascript">
                                            var hmWidth = 880;
                                            var hmHeight = 500;
                                            var so = new SWFObject("/home/player.swf", "ply", hmWidth, hmHeight, "9", "#000000");
                                            so.addParam("allowfullscreen", "true");
                                            so.addParam("allowscriptaccess", "always");
                                            so.addParam("wmode", "opaque");
                                            so.addParam("quality", "high");
                                            so.addParam("salign", "lt");
                                            //播放器配置文件-----------------------------
                                            so.addVariable("JcScpFile", "/home/CuSunV4set.php"); //配置文件地址
                                            //-开播前广告参数-----------------------------
                                            so.addVariable("ShowJcScpAFront", "yes");
                                            so.addVariable("JcScpCountDowns", "7");
                                            so.addVariable("JcScpCountDownsPosition", "top-right");
                                            so.addVariable("JcScpAFrontW", "660");
                                            so.addVariable("JcScpAFrontH", "400");
                                            so.addVariable("JcScpAFrontPath", "/home/other/a650x400_01.swf|/home/other/a650x400_02.swf");
                                            so.addVariable("JcScpAFrontLink", "/");

                                            //-主视频-----------------------------
                                            so.addVariable("JcScpVideoPath", "/{{$video -> video_path}}");
                                            so.addVariable("JcScpImg", "/{{$video -> video_face}}");

                                            //-暂停广告-----------------------------
                                            so.addVariable("ShowJcScpAPause", "yes"); //是否显示暂停广告
                                            so.addVariable("JcScpAPauseW", "300"); //暂停广告地址
                                            so.addVariable("JcScpAPauseH", "250"); //暂停广告高度
                                            so.addVariable("JcScpAPausePath", "/home/other/a300x250_01.jpg|/home/other/a300x250_02.jpg"); //暂停广告地址
                                            so.addVariable("JcScpAPauseLink", ""); //暂停广告链接
                                            so.write("CuPlayer");
											
											//文字广告
											so.addVariable("ShowJcScpAMoveText", "no");
                                        </script>
                                        <script type="text/javascript">
                                            $(function() {
                                                $('#jujiPlayListRight .listcontrol-btn').click(function() {
                                                    $('#jujiPlayListRight').addClass('dn').hide();
                                                    $('#jujiPlayListShow').removeClass('dn').show();
                                                    $('#ply').css('width', '1160px');
													$('#comment-list').width(1160);
                                                });
                                                $('#jujiPlayListShow').click(function() {
                                                    $(this).addClass('dn').hide();
                                                    $('#jujiPlayListRight').removeClass('dn').show();
                                                    $('#ply').css('width', '880px');
													$('#comment-list').width(880);
                                                });
												
												//视频简介
												var i = 0;
												$('.vInfoSide-con .allDesLink').click(function(){
												    i++;
													if(i % 2 !== 0){
													   var info = $(this).prev().attr('title');
													   $(this).prev().attr('title',$(this).prev().html());
													   $(this).prev().html(info);
													   $(this).html('收起');
													}else {
													   var info = $(this).prev().attr('title');
													   $(this).prev().attr('title',$(this).prev().html());
													   $(this).prev().html(info);
													   $(this).html('收起');
													}
												});
												
												//弹幕
												$('#comment-list').bind("selectstart",function(){return false;});
												var j = 0;
												var timing = null;
												var end = 1;
												var info = ['xxxx','!!!','哎，就那样了','过得去','不错吧','赞一个','踩','顶','怎么说呢','不知道','还行吧','不好看']
												function getNum(m,n){
												    return Math.ceil(Math.random() * (n-m+1) + (m-1));
												}
												$('.danmuTit').next().click(function(){
												    j++;
													if (j % 2 == 0) {
												        $(this).removeClass('switch_open');
														//窗口关闭
														$('#comment-list').hide();
														clearInterval(timing);
														
													}else {
													    $(this).addClass('switch_open');
														//窗口开启
														$('#comment-list').show();
														var lists = $('#comment-list').find('span');
														var i = 0;
														timing = setInterval(function(){
															for(var index=0;index <= lists.length - 1;index++){
															    if(end && index){
															        var speed = $(lists[index - 1]).offset().left + 100;
																    if( speed > $(lists[index]).offset().left){
																	    continue;
																	}
																}
																var num = $(lists[index]).offset().left - 10;
																$(lists[index]).offset({left:num});
																if($(lists[index]).offset().left <= 0){
																    end = 0;
																	$(lists[index]).html(info[getNum(0,info.length - 1)]);
																	num = $('#comment-list').find('ul').width();
																	$(lists[index]).offset({left:num});
																}
															};
														},100);
													}
												});
                                            });
                                        </script>
                                    </div>
                                    <!-- flash播放器 end -->
                                    <!-- player left start -->
                                    <div class="videoArea-rightWrap" id="movieListContainer">
                                        <!-- listcontrol-pack -->
                                        <div class="listcontrol-pack dn" id="jujiPlayListShow">
                                            <a href="javascript:void(0);" j-delegate="showPlayList" title="展开列表" rseat="展开列表">
                                                <div class="listcontrol-pack-con">
                                                    <i class="site-icons-play icon-listcontrol-left">
                                                    </i>
                                                    <em class="listcontrol-pack-txt">
                                                        展开列表
                                                    </em>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="videoArea-rightCon" id="jujiPlayListRight">
                                            <!-- 收起btn start-->
                                            <div class="listcontrol" id="jujiPlayListHide">
                                                <a class="listcontrol-btn" title="收起列表" href="javascript:void(0);" j-delegate="hidePlayList"
                                                rseat="收起列表">
                                                    <i class="site-icons-play icon-listcontrol-right">
                                                    </i>
                                                </a>
                                            </div>
                                            <!-- 视频列表 -->
                                            <div class="list">
											<dl>
											    <dt><h5 id="video-title">当前播放</h5></dt>
											</dl>
											<dl>
											  <dt><a href="#"><img src="/{{ $video -> video_face }}"><strong>{{ $video -> video_name }}</strong><span>发布日期:{{ date('Y-m-d H:i:s',$video -> create_time) }}</span></a></dt>
											</dl>
											<dl>
											    <dt><h3 style="color:#eee;font-size:14px;padding: 5px 0;border-bottom:1px solid #eee">相关视频	</h3></dt>
											</dl>
											<dl>
											<dt><a href="#" onclick="changeStream(1);" ><img src="pic/pic02.jpg"><strong>2吉利博瑞牙克石冰雪测试</strong><span>发布日期：2015.03.25</span></a></dt>
											</dl>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 新版功能区 start -->
                        <div class="container">
                            <div class="mod-func">
                                <div data-barrage1_5-type="short" style="display:block;" data-widget-barrage1_5="play"
                                class="play-danmuWrap play-danmuWrap_close">
                                    <div class="funcRight funcRight1014">
                                        <div class="ppCommentIco_box j_widget_ppqt">
                                            <a class="ppCommentIco_link dn j_widget_ppico" href="javascript:;" rseat="707312_jqtl">
                                                <!-- 泡泡评论icon -->
                                                <i class="site-icons-play ppCommentIco-o">
                                                </i>
                                                <!-- 泡泡评论文案 -->
                                                <span>
                                                    热门评论
                                                </span>
                                            </a>
                                            <a class="ppCommentIco_link dn j_widget_qtico" href="javascript:;" rseat="707312_pl">
                                                <!-- 普通评论icon -->
                                                <i class="site-icons-play tongCommentIco-o">
                                                </i>
                                                <!-- 普通评论文案 -->
                                                <span>
                                                    热门评论
                                                </span>
                                            </a>
                                        </div>
                                        <div class="voteEnter_box" data-vote-ele="xiha" style="display:none">
                                            <a class="voteEnter_link" data-vote-ele="link" href="#" target="_blank"
                                            rseat="705152_bfytp">
                                                <img rseat="705152_bfytp" data-vote-ele="img" src="picture/voteenter.gif">
                                            </a>
                                        </div>
                                        <!--顶/踩-->
                                        <div class="disArea actLinkWrap-auto" id="upDownV3">
                                            <div class="vote-upDown-bd my-vote-up" data-updownv3-elem="wrap" data-addaction="hover">
                                                <div class="love-con" data-updownv3-elem="upwrap">
                                                    <a class="" href="#" id="widget-voteupBtn" rseat="顶1">
                                                        <i class="site-icons-play icon-voteup">
                                                        </i>
                                                        <span id="widget-voteupcount" data-vi-elem="voteup" rseat="voteup">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="nasty-con" data-updownv3-elem="downwrap" style="display:black;">
                                                    <a class="" href="#" id="widget-votedownBtn" rseat="踩1">
                                                        <i class="site-icons-play icon-votedown">
                                                        </i>
                                                        <span id="widget-votedowncount" data-vi-elem="votedown" rseat="votedown">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="upandownv2" data-conflict="upandownv2">
                                                </div>
                                            </div>
                                        </div>
                                        <!--subscribe-->
                                        <div data-subscribe-subentry="1-9" data-subscribe-categoryname="" data-subscribe-tvname=""
                                        data-subscribe-subkey="" data-subscribe-subtype="7" data-subscribe-cansubscribe="true"
                                        data-subscribe-group="gp1" data-widget-subscribe="gp1" class="func_favorites func_favorites_new">
                                            <a rseat="收藏" style="display: block;" title="收藏" data-subscribe-showstyle="block"
                                            data-subscribe-elem="newsubscribe" class="link-favorites j_favzj" href="javascript:void(0);">
                                                <i class="site-icons-play icon-favorites">
                                                </i>
                                                <span rseat="shoucang" class="j_favzj_txt">
                                                    收藏
                                                </span>
                                            </a>
                                            <a data-subscribe-elem="newhasSubscribed" style="display:none;" title="已收藏"
                                            class="link-favorites link-favorites-added j_favzj_add" href="javascript:void(0);">
                                                <i class="site-icons-play icon-favorites">
                                                </i>
                                                <span rseat="shoucang" class="j_favzj_addtxt">
                                                    已收藏
                                                </span>
                                            </a>
                                            <!-- 收藏气泡 -->
                                            <div id="subscribeBox" style="display:none;" class="no-login1116">
                                                <div class="no-login1116pop" style="">
                                                    <span class="no-loginarrow">
                                                    </span>
                                                    <a id="subscribeBoxClose" class="shut-btn" href="javascript:;" rseat="subscribeBoxClose">
                                                    </a>
                                                    <p rseat="phone4" class="j_favzj_tip">
                                                        收藏成功，可进入
                                                        <a target="_blank" href="//www.iqiyi.com/u/fav?source=fav" rseat="705263_intofav">
                                                            我的收藏&gt;&gt;
                                                        </a>
                                                        查看所有收藏列表
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- 收藏气泡 end-->
                                        </div>
                                        <!--share-->
                                        <!--mobile looke-->
                                        <div class="iphoneLook">
                                            <!-- 手机看浮层 -->
                                            <div class="func_panels func_panels_new" data-funcareafloater-elem="phone">
                                                <!--手机观看浮层 begin-->
                                                <div class="mod-moblieLook-pop-v1">
                                                    <div class="mobileLook-pop-head">
                                                        用手机看
                                                        <a href="javascript:(void);" class="mobileLook-close" id="data-watchbyphone-closephone">
                                                        </a>
                                                    </div>
                                                    <div class="moblieLook-pop-con">
                                                        <div class="moblieLook-pop_arrowWrap">
                                                            <i class="func_panel_arrow">
                                                            </i>
                                                            <i class="func_panel_arrowInner">
                                                            </i>
                                                        </div>
                                                        <div class="moblieLook-pop-main clearfix">
                                                            <div class="moblieLook-pop-lt">
                                                                <p class="pop-lt_style1">
                                                                    方式1：
                                                                    <span class="fs14 c-333">
                                                                        用手机看
                                                                    </span>
                                                                </p>
                                                                <p class="pop-lt_style2">
                                                                    用爱奇艺APP或微信扫一扫，在手机上继续观看
                                                                </p>
                                                                <p class="pop-lt_style3">
                                                                    <em>
                                                                        当前播放时间：
                                                                    </em>
                                                                    <span id="data-watchbyphone-time">
                                                                        00分12秒
                                                                    </span>
                                                                </p>
                                                                <div class="mob-app-con mt20 clearfix">
                                                                    <div class="mob-app-con-lt fl">
                                                                        <p>
                                                                            <img data-image-code_type="3" data-image-subtype="4" data-image-fromtype="27"
                                                                            id="data-watchbyphone-image" src="picture/mob-ico2.png">
                                                                        </p>
                                                                    </div>
                                                                    <div class="mob-app-con-rt fl">
                                                                        <p class="mob-code-link">
                                                                            <i class="sharePopIcoQ">
                                                                            </i>
                                                                            <a href="//www.iqiyi.com/common/helpandsuggest.html#wenti18">
                                                                                如何使用二维码？
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="app-tag-link mt15">
                                                                    <p>
                                                                        没有安装爱奇艺视频最新客户端？
                                                                        <a id="data-watchbyphone-openapp" href="javascript:void(0);" class="green">
                                                                            点击安装
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="moblieLook-pop-rt fr">
                                                                <p class="pop-lt_style1">
                                                                    方式2：
                                                                    <span class="fs14 c-333">
                                                                        一键下载至手机
                                                                    </span>
                                                                </p>
                                                                <p class="androidPic">
                                                                    <img src="picture/androidico0725.png">
                                                                </p>
                                                                <a href="javascripit:void(0);" id="data-watchbyphone-pushphone" class="down-mobline-btn"
                                                                rseat="15030901_dwmob&amp;t=20">
                                                                    下载至手机
                                                                </a>
                                                                <p class="pop-lt_style4">
                                                                    限爱奇艺安卓6.0以上版本
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gui_love_ceng">
                                                        <a id="data-watchbyphone-closebtn" data-like-elem="closeBtn" class="cloBtn"
                                                        title="关闭">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--手机观看浮层 end-->
                                                <div id="data-watchbyphone-dlf" class="mod_mobile_look" style="display:black;">
                                                    <div class="mobile_look_hd">
                                                        <div class="mod-mobile_closeBtn">
                                                            <a href="javascript:void(0);" class="mobile-btn-close fsBg">
                                                                ×
                                                            </a>
                                                        </div>
                                                        <p class="mobile_look_tit">
                                                            使用微信扫一扫，扫描左侧二维码，下载爱奇艺移动APP
                                                        </p>
                                                        <div class="look_hd_con clearfix">
                                                            <div class="look_hd_lt">
                                                                <p>
                                                                    <img src="picture/1716.png">
                                                                </p>
                                                            </div>
                                                            <div class="look_hd_rt fl">
                                                                <p>
                                                                    <img src="picture/mob-sys.png">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="moblie_look_bd">
                                                        <p class="other-az">
                                                            其他安装方式：手机浏览器输入短链接//71.am/udn
                                                        </p>
                                                        <p class="down-bj">
                                                            下载安装包到本机：
                                                            <a href="https://itunes.apple.com/cn/app/ai-qi-yi-shi-pin-zui-xin-zui/id393765873?mt=8&amp;v=1419921499"
                                                            target="_blank" class="green">
                                                                iphone
                                                            </a>
                                                            &nbsp;&nbsp;
                                                            <a href="https://itunes.apple.com/cn/app/ai-qi-yi-shi-pinhd-zui-xin/id409563112?mt=8&amp;v=1419921990"
                                                            target="_blank" class="green">
                                                                ipad
                                                            </a>
                                                            &nbsp;&nbsp;
                                                            <a href="//app.qiyi.com/common/qiyi.196.apk" target="_blank" class="green">
                                                                android
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div id="data-watchbyphone-searching" class="app_mod-pop" style="width:478px;display: none;">
                                                    <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                        ×
                                                    </a>
                                                    <h3 class="pop_hd">
                                                        <strong class="title">
                                                            爱奇艺账号连接
                                                        </strong>
                                                    </h3>
                                                    <div class="Img-box">
                                                        <span class="Img-con Img-PC">
                                                            <p class="p-pc">
                                                                电脑
                                                            </p>
                                                        </span>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point2">
                                                        </i>
                                                        <span class="Img-con Img-Qiyi">
                                                        </span>
                                                        <i class="Img-Point Img-Point2">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <span class="Img-con Img-Android-green">
                                                            <p class="p-an">
                                                                安卓
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="Txt-box">
                                                        <h3>
                                                            设备搜寻中...
                                                        </h3>
                                                        <p>
                                                            请确保您要连接的设备（仅限安卓）登录了同一爱奇艺账号 且安装并开启不低于V6.0以上版本的爱奇艺客户端
                                                        </p>
                                                    </div>
                                                </div>
                                                <div id="data-watchbyphone-searchfailed" class="app_mod-pop" style="width:478px;display: none;">
                                                    <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                        ×
                                                    </a>
                                                    <h3 class="pop_hd">
                                                        <strong class="title">
                                                            爱奇艺账号连接
                                                        </strong>
                                                    </h3>
                                                    <div class="Img-box Img-box-fail">
                                                        <span class="Img-con Img-PC">
                                                            <p class="p-pc">
                                                                电脑
                                                            </p>
                                                        </span>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point2">
                                                        </i>
                                                        <span class="Img-con Img-Qiyi">
                                                            <em>
                                                            </em>
                                                        </span>
                                                        <i class="Img-Point Img-Point2">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <i class="Img-Point Img-Point1">
                                                        </i>
                                                        <span class="Img-con Img-Android-gray">
                                                            <p class="p-an">
                                                                安卓
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="Txt-box Txt-box-fail">
                                                        <h3>
                                                            连接失败！
                                                        </h3>
                                                        <p>
                                                            请确保您要连接的设备（仅限安卓）登录了同一爱奇艺账号 且安装并开启不低于V6.0以上版本的爱奇艺客户端
                                                        </p>
                                                    </div>
                                                    <div class="pop_ft">
                                                        <a href="javascript:void(0);" j-delegate="watchbyphone-showdownload" class="pop-btn pop-btn130">
                                                            安装客户端
                                                        </a>
                                                        <a href="javascript:void(0);" j-delegate="watchbyphone-showlogintip" class="pop-btn pop-btn130 ml36">
                                                            手机端如何登陆
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="data-watchbyphone-searchresult" class="app_mod-pop" style="width:478px;display: none;">
                                                    <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                        ×
                                                    </a>
                                                    <h3 class="pop_hd">
                                                        <strong class="title">
                                                            爱奇艺云推送
                                                        </strong>
                                                    </h3>
                                                    <div class="pop_facility">
                                                        <div id="data-watchbyphone-srslide" class="app_details_slide" data-slide-usedefaultoffset="true"
                                                        data-slide-itemfocusclass="js_none" data-slide-disp="3" data-slide-step="1"
                                                        data-slide-lbtnclass="last-gray" data-slide-rbtnclass="next-gray">
                                                            <a class="last " data-slide-elem="pbtn" href="javascript:void(0);">
                                                            </a>
                                                            <a class="next " data-slide-elem="nbtn" href="javascript:void(0);">
                                                            </a>
                                                            <div class="app_details_slideBox" data-slide-elem="content">
                                                                <ul data-slide-elem="list" style="position: relative;">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="pop_facility_Txt">
                                                            发现
                                                            <i class="js_watchbyphone-searcuresultcount">
                                                            </i>
                                                            部安卓（Android）设备，请点击进行选择
                                                        </p>
                                                        <div class="pop_ft">
                                                            <a href="javascript:void(0);" data-watchbyphone-btn="startlinkdevice"
                                                            class="pop-btn pop-btn160" rseat="15030901_conet&amp;devino=&amp;t=20">
                                                                开始连接
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="data-watchbyphone-download" class="app_mod-pop" style="width:480px;height:320px;box-shadow:none;border:0;display: none">
                                                    <!--登录弹出层 开始-->
                                                    <div class="usrTxGeneral-box_hover" style="display:block; opacity: 1;"
                                                    data-widget-loginbox="loginbox" data-private-display="block">
                                                        <div data-loginbox-elem="main" class="usrTxGeneral-box usrTx-box_popup usrTx-login-box">
                                                            <i class="nav_arrow">
                                                            </i>
                                                            <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                                ×
                                                            </a>
                                                            <h2>
                                                                请您在手机端下载爱奇艺移动APP（仅支持安卓客户端）
                                                            </h2>
                                                            <div class="usrTxGeneral-box_v3" data-loginbox-elem="table" style="display: block;">
                                                                <div class="iqiyiApp_download">
                                                                    <p class="download_sweep">
                                                                        使用微信扫一扫，下载爱奇艺移动APP
                                                                    </p>
                                                                    <span class="download_codeImg">
                                                                        <img src="picture/download_codeimg.png" width="80" height="80">
                                                                    </span>
                                                                    <span class="download_hintImg">
                                                                        <img src="picture/download_hintimg1.png" width="204" height="80">
                                                                    </span>
                                                                    <p class="short-link">
                                                                        其他安装方式：手机浏览器输入短链接http://71.am/udn
                                                                    </p>
                                                                    <p class="install-link">
                                                                        下载安装包到本机：
                                                                        <a href="https://itunes.apple.com/cn/app/ai-qi-yi-shi-pin-zui-xin-zui/id393765873?mt=8&amp;v=1419921499"
                                                                        target="_blank" class="green">
                                                                            iphone
                                                                        </a>
                                                                        &nbsp;&nbsp;
                                                                        <a href="https://itunes.apple.com/cn/app/ai-qi-yi-shi-pinhd-zui-xin/id409563112?mt=8&amp;v=1419921990"
                                                                        target="_blank" class="green">
                                                                            ipad
                                                                        </a>
                                                                        &nbsp;&nbsp;
                                                                        <a href="//app.qiyi.com/common/qiyi.196.apk" target="_blank" class="green">
                                                                            android
                                                                        </a>
                                                                    </p>
                                                                    <div class="pop_ft" style="margin-top:13px">
                                                                        <a href="javascript:void(0);" j-delegate="watchbyphone-showlogintip" class="pop-btn pop-btn160">
                                                                            安装点此登录
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--登录弹出层 结束-->
                                                </div>
                                                <div id="data-watchbyphone-tuisongsuccess" class="app_mod-pop" style="width:478px;height:318px;display: none;">
                                                    <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                        ×
                                                    </a>
                                                    <h3 class="pop_hd" style="position:relative">
                                                        <strong class="title">
                                                            爱奇艺云推送
                                                        </strong>
                                                    </h3>
                                                    <div class="pop_bd">
                                                        <div class="cellphone-helper tc">
                                                            <div class="img">
                                                                <img src="" width="110" height="110" alt="">
                                                            </div>
                                                            <p class="succeed">
                                                                <i class="succeedImg">
                                                                </i>
                                                                推送
                                                                <em>
                                                                </em>
                                                                成功
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="data-watchbyphone-logintip" class="app_mod-pop" style="width:480px;height:320px;box-shadow:none;border:0;display: none;">
                                                    <!--登录弹出层 开始-->
                                                    <div class="usrTxGeneral-box_hover" style="display:block; opacity: 1;"
                                                    data-widget-loginbox="loginbox" data-private-display="block">
                                                        <div data-loginbox-elem="main" class="usrTxGeneral-box usrTx-box_popup usrTx-login-box">
                                                            <i class="nav_arrow">
                                                            </i>
                                                            <a href="javascript:void(0);" j-delegate="closeWBPfloater" class="close">
                                                                ×
                                                            </a>
                                                            <h2>
                                                                请您在手机端登录爱奇艺移动APP（仅支持安卓客户端）
                                                            </h2>
                                                            <div class="usrTxGeneral-box_v3" data-loginbox-elem="table" style="display: block;">
                                                                <div class="iqiyiApp_download">
                                                                    <p class="download_sweep">
                                                                        使用微信扫一扫，下载爱奇艺移动APP
                                                                    </p>
                                                                    <span class="download_codeImg">
                                                                        <img src="picture/download_codeimg.png" width="80" height="80">
                                                                        <i>
                                                                            180秒后更新
                                                                        </i>
                                                                    </span>
                                                                    <span class="download_hintImg">
                                                                        <img src="picture/download_hintimg2.png" width="204" height="80">
                                                                    </span>
                                                                    <p class="short-link2">
                                                                        打开爱奇艺移动APP，点击“我的-扫一扫”，扫描左侧二维码进行登录
                                                                    </p>
                                                                    <p class="install-link">
                                                                        没有安装爱奇艺视频最新客户端？
                                                                        <a href="">
                                                                            点击安装
                                                                        </a>
                                                                    </p>
                                                                    <div class="pop_ft" style="margin-top:13px">
                                                                        <a href="javascript:void(0);" j-delegate="watchbyphone-showfinddevices"
                                                                        class="pop-btn pop-btn160">
                                                                            重新查找设备
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--登录弹出层 结束-->
                                                </div>
                                                <!--分享弹层-->
                                            </div>
                                            <!-- 手机看浮层 end-->
                                        </div>
                                    </div>
                                    <qchunk id="block-tucaou" data-barrage-ele="barrage" style="display:black;">
                                        <!-- 弹幕开关1 -->
                                        <div class="danmu-close fl">
                                            <div class="clearfix">
                                                <h3 class="fl danmuTit" style="magin-left:20px">
                                                    弹幕
                                                </h3>
                                                <!-- switch fl 关闭 -->
                                                <a class="switch" style="margin-left:30px" href="javascript:void(0);" >
                                                </a>
                                            </div>
                                        </div>
                                        <!-- 弹幕开关 end-->
                                    </qchunk>
                                </div>
                            </div>
                        </div>
                        <!-- 新版功能区 end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 播放器区 end -->
        <!-- 标题区 start -->
        <div class="mod-breadcrumb" style="background:#292929">
            <div class="wrapper wrapper-dianying">
                <div class="clearfix">
                    <div class="wrapper-left">
                        <div class="mod-breadcrumb_left">
                            <div class="mod-play-tits clearfix">
                                <h1 class="mod-play-tit">
                                    <span id="widget-videotitle">
                                        {{ $video -> video_name }}
                                    </span>
                                    <span class="score" id="playerAreaScore" data-score-wrap="score" data-score-tvid="330590800">
                                        <span class="num" data-score-num="1">
                                        </span>
                                        <em data-score-num="2">
                                        </em>
                                    </span>
                                </h1>
                            </div>
                            <div class="mod-crumb_ft clearfix">
                                <div class="mod-crumb_bar">
                                    <span class="mod-play_tags" id="datainfo-navlist" data-page-version="pcwdev30">
                                        <a rseat="bread2_1" class="c999" title="爱奇艺首页" href="//www.iqiyi.com"
                                        target="_blank">
                                            爱奇艺
                                        </a>
                                        &gt;
                                        <a rseat="bread2_2" class="c999" title="VIP会员" href="//vip.iqiyi.com"
                                        target="_blank">
                                            VIP会员
                                        </a>
                                        &gt;
                                        <a rseat="bread2_3" class="c999" title="电影" href="//www.iqiyi.com/dianying/"
                                        target="_blank">
                                            电影
                                        </a>
                                    </span>
                                    <span class="mod-tags_item" id="datainfo-taglist">
                                        <a rseat="bread3_1" href="//list.iqiyi.com/www/1/2------------------.html"
                                        title="美国" target="_blank" id='thirdPartyTagList'>
                                            美国
                                        </a>
                                        <a rseat="bread3_2" href="//list.iqiyi.com/www/1/-9-----------------.html"
                                        title="科幻" target="_blank">
                                            科幻
                                        </a>
                                        <a rseat="bread3_3" href="//list.iqiyi.com/www/1/-11-----------------.html"
                                        title="动作" target="_blank">
                                            动作
                                        </a>
                                    </span>
                                </div>
                                <div class="mod-source clearfix">
                                    <div style="display:inline-block;margin-right:20px;color:#ccc">
                                        播放人气:{{ $video -> read_count }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 简介浮层 start--> 
            <!-- 短视频简介浮层 end-->
        </div>
        </div>
        <!-- 标题区 end-->
        </div>
        <!-- 内容区 -->
        <div id="movie-score-show">
        </div>
        <div class="wrapper wrapper-dianying" data-content-wrapper="wrapper">
            <div style="displayblack;" id="check-is-movie-tpl">
            </div>
            <div data-pb="tmplt=longmovietplt" data-relate-widget="relateMovie" data-anchor-elem="relatedvideo"
            id="block-F" class="" data-asyn-pb="true">
                <!-- 111-->
                <div style="display:black;" id="check-is-movie-tpl">
                </div>
            </div>
            <div class="wrapper-left">
                <div data-pb="tmplt=longmovietplt" data-like-widget="guessLike" id="block-G"
                class="" data-asyn-pb="true">
                    <div class="wrapper-piclist wrapper-piclist-spread" data-widget-qiyu="bee"
                    data-qiyu-fc="a9c41388b79eac19" data-qiyu-requeststatus="0" data-qiyu-rltnum="16"
                    data-qiyu-numofcutname="180" data-qiyu-domain="www" data-qiyu-albumid=""
                    data-qiyu-area="bee" data-qiyu-categoryid="" data-qiyu-tpler="art" data-qiyu-vfrm="3-2-bee-1">
                        <div class="play-title mb15 mt40" rseat="love">
                            <h2 class="play-title-bd">
                                猜你喜欢
                            </h2>
                            <a href="javascript:void(0);" class="piclist-switch J_changed" rseat="707281_change">
                                <i class="site-icons-play icon-piclist-switch">
                                </i>
                                <span>
                                    换一换
                                </span>
                            </a>
                        </div>
                        <div id="1000000000321" style="height:0;width:1;margin:0;overflow:hidden;display:none;">
                        </div>
                        <div id="widget-promotionad-con" data-img-param="posterURL" class="popularize popularize-160210 site-piclist-mix"
                        data-qiyu-elem="promotionad" style="displayblack;">
                        </div>
                        <div data-qiyu-elem="list">
                            <ul class="site-piclist site-piclist-160210 site-piclist-160210Tr site-piclist-160210-describe">
                                <li class="" data-qiyu-idx="0">
                                    <div class="site-piclist_pic toggle-collect" >
                                        <!-- 电影模板的电影，电视剧，综艺，片花新增收藏功能-->
                                        <a target="_blank" href="http://www.iqiyi.com/v_19rrh4muho.html#vfrm=3-2-bee-1" class="site-piclist_pic_link" title="沼泽怪物">
                                            <img src="http://pic1.qiyipic.com/image/20150328/61/c5/c5/v_105214119_m_601_m2_180_236.jpg"
                                            alt="沼泽怪物" title="沼泽怪物" width="110" height="70">
                                            <p class="site-piclist_icons-lt">
                                            </p>
                                            <p class="site-piclist_icons" rseat="like_qidan11">
                                            </p>
                                            <div class="wrapper-listTitle">
                                                <div class="mod-listTitle">
                                                    <span rseat="like_qishu11" class="mod-listTitle_right" data-private-display=""
                                                    style="display: none;">
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="site-piclist_icons-lb">
                                                <i class="mark-1080p">
                                                </i>
                                            </p>
                                        </a>
                                        <!-- 电影模板的电影，电视剧，综艺，片花新增收藏功能-->
                                        <a target="_blank" class="site-piclist_icons-rb" data-guesslink-fav="item"
                                        data-favid="229735600" href="javascript:;" j-delegate="guesslinkfav">
                                            <i class="collect-star-icon">
                                            </i>
                                        </a>
                                    </div>
									<div class="site-piclist_info">
                                        <div class="site-title_score">
                                            <div class="title">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rrgxgtf8.html#vfrm=3-2-bee-1" title="蜿龙"
                                                    rseat="707201_like_title13" target="_blank">
                                                        蜿龙
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <p title="恐怖蜿龙攻击小镇" class="site-piclist_info_describe">
                                            恐怖蜿龙攻击小镇
                                        </p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <!-- -->
                <div data-pb="tmplt=longmovietplt" data-anchor-elem="comment" id="block-I"
                data-asyn-pb="true">
                    <div id="qitancommonarea" data-pb-s2="1019_1" data-pb-shrtp="1" class="clearfix margin_b20 ugc_cmt"
                    data-qitancomment-playorder="1" data-qitancomment-tvyear="20120608" data-qitancomment-qitanid="11731362"
                    data-widget-qitancomment="comment" data-qitancomment-url="//static.qiyi.com/js/qitanv6/qitan_video_page.js"
                    data-qitancomment-tvid="265155200" data-qitancomment-title="百万巨鳄" data-qitancomment-type="1"
                    data-qitancomment-ugc="ugc_cmt">
                        <div class="loading_new" data-reloadbtn="loading" rseat="tg_load" data-private-display=""
                        style="display: none;">
                            <img src="http://www.qiyipic.com/common/fix/play_images/play_loadingNew.gif">
                        </div>
                        <div data-elem-pl="pinglunmain">
                            <link href="http://static.qiyi.com/css/common/commentSys.css" rel="stylesheet"
                            type="text/css">
                            <div style="display: block; position: relative;" class="cs-feed-areaAdapt-signle">
                                <div class="cs-feed-area" data-elem="parent">
                                    <div class="cs-feed-wrap cfw-v3" data-elem="feedlist">
                                        <div class="cs-feed-hd" data-widget-tab="tab">
                                            <ul>
                                                <li class="selected" data-elem-btn="type" data-tab-index="0">
                                                    评论
                                                    <em>
                                                        (
                                                        <i data-elem-num="pinglunargs">
                                                            3114
                                                        </i>
                                                        )
                                                    </em>
                                                    <span class="tip_t">
                                                        <i class="tip_outer">
                                                        </i>
                                                        <i class="tip_inner">
                                                        </i>
                                                    </span>
                                                </li>
                                                <li data-elem-btn="type" data-tab-index="1">
                                                    影评
                                                    <em>
                                                        (
                                                        <i data-elem-num="yingpingargs">
                                                            0
                                                        </i>
                                                        )
                                                    </em>
                                                    <span class="tip_t">
                                                        <i class="tip_outer">
                                                        </i>
                                                        <i class="tip_inner">
                                                        </i>
                                                    </span>
                                                </li>
                                                <li data-elem-btn="type" data-tab-index="2">
                                                    投票
                                                    <em>
                                                        (
                                                        <i data-elem-num="toupiaoargs">
                                                            0
                                                        </i>
                                                        )
                                                    </em>
                                                    <span class="tip_t">
                                                        <i class="tip_outer">
                                                        </i>
                                                        <i class="tip_inner">
                                                        </i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-widget-tab="base" id="arguments">
                                            <div class="cs-feed-bd" data-pinglun-main="base">
                                                <div data-input-type="inputDataArea">
                                                    <div class="cs-feed-section cs-feed-section-Wauto" data-feedwidget-elem="feedcontent">
                                                        <div class="section-bd">
                                                            <div class="cs-form cs-form-comment">
                                                                <div class="say-textarea-comment">
                                                                    <div class="form-item pr">
                                                                        <textarea class="form-textarea-comment grayDark" placeholder="我来说两句..."
                                                                        data-feedcontent-elem="feedcontent">
                                                                        </textarea>
                                                                        <div class="feed-submit-success" data-elem-tip="succ" style="display:none;">
                                                                            <i class="csIcon csIcon-feed-submit-success">
                                                                            </i>
                                                                            <em class="desc">
                                                                                发布成功!
                                                                            </em>
                                                                        </div>
                                                                        <span class="say-des">
                                                                            还可以输入
                                                                            <strong data-elem-wordcount="wordcount">
                                                                                140
                                                                            </strong>
                                                                            字
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-commentOpt-area say-commentOpt-area">
                                                                    <div>
                                                                        <div class="say_personInfo">
                                                                            <a href="//www.iqiyi.com/u/1455686071" class="imgBox" data-elem-title="title"
                                                                            title="zhangxiaowen007">
                                                                                <img src="http://www.qiyipic.com/common/fix/headicons/male-70.png" alt=""
                                                                                data-elem-pic="pic" width="100%" height="100%">
                                                                            </a>
                                                                            <p class="txtBox">
                                                                                <a href="//www.iqiyi.com/u/1455686071" data-user-name="name">
                                                                                    zhangxiaowen007
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="fr">
                                                                            <div class="item-info dn" data-elem-tip="tip" style="float:left;margin:5px;">
                                                                                <i class="icon-des">
                                                                                </i>
                                                                                <em class="form-des">
                                                                                </em>
                                                                            </div>
                                                                            <div class="fl mt5" data-widget-tool="tool">
                                                                                <form action="//api-t.iqiyi.com/qx_api/comment/user_upload_pic" method="post"
                                                                                target="picframe" name="uploadpic" enctype="multipart/form-data" style="overflow:hidden;">
                                                                                    <a class="upload-img" href="javascript:;" hidefocus="true" title="插入图片"
                                                                                    data-widget-upload="upload">
                                                                                        <i class="csIcon csIcon-insert-img">
                                                                                        </i>
                                                                                        <input class="upload-input" title="" name="pic" id="uploadpic" size="1"
                                                                                        data-elem-btn="upload" type="file">
                                                                                    </a>
                                                                                    <em class="vm-inline-block-inline grayDark ml5 mr5">
                                                                                        |
                                                                                    </em>
                                                                                    <em class="vm-inline-block-inline grayDark">
                                                                                        同步到:
                                                                                    </em>
                                                                                    <a class="mr5" href="//www.iqiyi.com/u/thirdparty" target="_blank" title="设置分享到新浪微博">
                                                                                        <i class="csIcon csIcon-share-sina-disabled" data-delegate="sharethird"
                                                                                        rseat="14" data-share-elem="sina" data-share="0" data-nosync="0">
                                                                                        </i>
                                                                                    </a>
                                                                                    <a class="mr5" href="//www.iqiyi.com/u/thirdparty" target="_blank" title="设置分享到QQ空间">
                                                                                        <i class="csIcon csIcon-share-qzone-disabled" rseat="14" data-delegate="sharethird"
                                                                                        data-share-elem="qzone" data-share="0" data-nosync="0">
                                                                                        </i>
                                                                                    </a>
                                                                                    <a class="mr5" href="//www.iqiyi.com/u/thirdparty" target="_blank" title="设置分享到人人网">
                                                                                        <i class="csIcon csIcon-share-renren-disabled" rseat="14" data-delegate="sharethird"
                                                                                        data-share-elem="renren" data-share="0" data-nosync="0">
                                                                                        </i>
                                                                                    </a>
                                                                                    <input name="antiCsrf" value="d6ed2eabd73d9907375caf82d0d7e7a4" type="hidden">
                                                                                </form>
                                                                            </div>
                                                                            <a href="javascript:;" class="say-largeBtn ml20 cs-btn-disabled" data-elem-feed-publisher="feed-publisher"
                                                                            rseat="509011_set">
                                                                                发表评论
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-input-type="yingpingArea" class="dn">
                                                    <div class="cs-feed-section" data-widget="setreview" data-feedwidget-elem="feedcontent">
                                                        <div class="section-bd">
                                                            <div class="cs-form cs-form-comment">
                                                                <div class="say-textarea-movie">
                                                                    <div class="form-item">
                                                                        <div class="sayReview_title">
                                                                            <label for=" ">
                                                                                标题：
                                                                            </label>
                                                                            <input placeholder="写个吸引人的标题吧" class="sayBox-input" data-elem-yptitle="title"
                                                                            value="" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-item">
                                                                        <div class="sayReview_rate">
                                                                            <label for=" ">
                                                                                评分：
                                                                            </label>
                                                                            <div class="cs-score cs-score-set clearfix" data-widget="score">
                                                                                <div class="score-set">
                                                                                    <i class="csIcon csIcon-star-empty" data-elem="score">
                                                                                    </i>
                                                                                    <i class="csIcon csIcon-star-empty" data-elem="score">
                                                                                    </i>
                                                                                    <i class="csIcon csIcon-star-empty" data-elem="score">
                                                                                    </i>
                                                                                    <i class="csIcon csIcon-star-empty" data-elem="score">
                                                                                    </i>
                                                                                    <i class="csIcon csIcon-star-empty" data-elem="score">
                                                                                    </i>
                                                                                </div>
                                                                                <div class="score-des">
                                                                                    <strong data-elem="count">
                                                                                        0
                                                                                    </strong>
                                                                                    分
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-item bbn pr">
                                                                        <div class="sayReview_import">
                                                                            <textarea class="form-textarea-comment" data-elem-content="content" placeholder="我来说两句..">
                                                                            </textarea>
                                                                            <div class="feed-submit-success" data-elem-tip="succ" style="displayblack;">
                                                                                <i class="csIcon csIcon-feed-submit-success">
                                                                                </i>
                                                                                <em class="desc">
                                                                                    发布成功!
                                                                                </em>
                                                                            </div>
                                                                            <span class="say-des">
                                                                                至少还需要输入
                                                                                <strong data-yp-wordcount="wordcount">
                                                                                    140
                                                                                </strong>
                                                                                字
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-commentOpt-area say-commentOpt-area">
                                                                    <div>
                                                                        <div class="say_personInfo">
                                                                            <a href="//www.iqiyi.com/u/1455686071" class="imgBox" data-elem-title="title"
                                                                            title="zhangxiaowen007">
                                                                                <img src="http://www.qiyipic.com/common/fix/headicons/male-70.png" alt=""
                                                                                data-elem-pic="pic" width="100%" height="100%">
                                                                            </a>
                                                                            <p class="txtBox">
                                                                                <a href="//www.iqiyi.com/u/1455686071" data-user-name="name">
                                                                                    zhangxiaowen007
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="fr">
                                                                            <div class="item-info dn" data-elem-tip="tip" style="float:left;margin:5px;">
                                                                                <i class="icon-des">
                                                                                </i>
                                                                                <em class="form-des">
                                                                                </em>
                                                                            </div>
                                                                            <div class="fl mt5" data-widget-tool="tool">
                                                                                <form method="post" target="picframe" name="uploadpic" enctype="multipart/form-data"
                                                                                style="overflow:hidden;">
                                                                                    <em class="vm-inline-block-inline grayDark">
                                                                                        同步到:
                                                                                    </em>
                                                                                    <a class="mr5" href="javascript:;" title="新浪微博">
                                                                                        <i class="csIcon csIcon-share-sina" data-delegate="sharethird" data-share-elem="sina"
                                                                                        data-share="1" data-nosync="1">
                                                                                        </i>
                                                                                    </a>
                                                                                    <a class="mr5" href="javascript:;" title="腾讯微博">
                                                                                        <i class="csIcon csIcon-share-qzone" data-delegate="sharethird" data-share-elem="qzone"
                                                                                        data-share="1" data-nosync="1">
                                                                                        </i>
                                                                                    </a>
                                                                                    <a class="mr5" href="javascript:;" title="人人网">
                                                                                        <i class="csIcon csIcon-share-renren" data-delegate="sharethird" data-share-elem="renren"
                                                                                        data-share="1" data-nosync="0">
                                                                                        </i>
                                                                                    </a>
                                                                                </form>
                                                                            </div>
                                                                            <a href="javascript:;" class="say-largeBtn ml20" title="发表" data-reviewid=""
                                                                            data-elem-btn="submit" rseat="509011_yp">
                                                                                发表影评
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-input-type="voteArea" class="dn cs-feed-noContent">
                                                    <a href="javascript:;" class="say-largeBtn csIcon-insert-vote">
                                                        发起投票
                                                    </a>
                                                </div>
                                                <div class="mt20">
                                                    <div class="mt15 dn" data-elem="load" data-private-display="" style="display: none;">
                                                    </div>
                                                    <div class="mt15" data-widget-feed-list="feed-list">
                                                        <div class="cs-feed-sort" data-type-elem="sort">
                                                            <div class="sort-tab">
                                                                <a class="vm-inline-block-inline selected" href="javascript:;" rseat="29"
                                                                data-elem-btn="sort" data-cur="1" data-elem-sorttype="hot">
                                                                    按热门
                                                                </a>
                                                                <span class="vm-inline-block-inline ml5 mr5">
                                                                    |
                                                                </span>
                                                                <a class="vm-inline-block-inline" href="javascript:;" rseat="2" data-elem-btn="sort"
                                                                data-cur="0" data-elem-sorttype="add_time">
                                                                    按时间
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cs-feed-analyze" data-subject-main="true">
                                                            <label for="" class="cfa_left">
                                                                大家都在说:
                                                            </label>
                                                            <ul class="analyzeBox">
                                                                <li class="">
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            鳄鱼
                                                                        </em>
                                                                        <i>
                                                                            ( 509 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left: 7px; display: none;">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                52%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                48%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            大s
                                                                        </em>
                                                                        <i>
                                                                            ( 95 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                90%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                10%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            电影
                                                                        </em>
                                                                        <i>
                                                                            ( 87 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left: 7px; display: none;">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                67%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                33%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            小孩
                                                                        </em>
                                                                        <i>
                                                                            ( 57 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left: 7px; display: none;">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                58%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                42%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            流泪
                                                                        </em>
                                                                        <i>
                                                                            ( 42 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                75%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                25%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="cfa_btn-ff6e1e " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            感情
                                                                        </em>
                                                                        <i>
                                                                            ( 30 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                58%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                42%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="cfa_btn-5aa700 " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            结局
                                                                        </em>
                                                                        <i>
                                                                            ( 27 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                50%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                50%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <a href="javascript:void(0)" class=" cfa_btn-666666 " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            阿毛
                                                                        </em>
                                                                        <i>
                                                                            ( 75 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                48%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                52%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class=" cfa_btn-666666 " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            动物
                                                                        </em>
                                                                        <i>
                                                                            ( 73 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                47%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                53%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class=" cfa_btn-666666 " data-subject="choose"
                                                                    rseat="507161_2">
                                                                        <em class="cfa_keyword">
                                                                            人类
                                                                        </em>
                                                                        <i>
                                                                            ( 45 )
                                                                        </i>
                                                                    </a>
                                                                    <div class="cfa_percentBox" style="left:7px;display:none">
                                                                        <span class="tip_t">
                                                                            <i class="tip_outer">
                                                                            </i>
                                                                            <i class="tip_inner">
                                                                            </i>
                                                                        </span>
                                                                        <div class="cfa_percent">
                                                                            <span>
                                                                                <i class="assistDisdain assist">
                                                                                </i>
                                                                                22%
                                                                            </span>
                                                                            <span>
                                                                                <i class="assistDisdain disdain">
                                                                                </i>
                                                                                78%
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div data-feed-list-elem="feed-list">
                                                            <div data-feed-content-list-elem="feed-content-list">
                                                                <div class="cs-feed-contentArea" data-contentid="45833625048">
                                                                    <div class="cs-feed-section">
                                                                        <div class="section-hd">
                                                                            <a href="http://www.iqiyi.com/u/2143892995" target="_blank" rel="nofollow">
                                                                                <img user-id="2143892995" rseat="4" src="http://img7.qiyipic.com/passport/20161124/1e/8e/passport_2143892995_147995407985445_130_130.jpg"
                                                                                j-delegate="userinfopopup" data-userinfopopup-id="2143892995" width="50"
                                                                                height="50">
                                                                            </a>
                                                                        </div>
                                                                        <div class="section-bd">
                                                                            <div class="cs-feed-item cs-feed-item-first">
                                                                                <div class="fl">
                                                                                    <a rel="nofollow" class="feed-fontBold fsb" href="http://www.iqiyi.com/u/2143892995"
                                                                                    rseat="3" title="" target="_blank" j-delegate="userinfopopup" data-userinfopopup-id="2143892995">
                                                                                        阳光男孩_qq2040
                                                                                    </a>
                                                                                    <i data-vipheader-elem="vipicon" class="">
                                                                                    </i>
                                                                                    <em class="feed-desc" data-elem="time">
                                                                                        07-19
                                                                                    </em>
                                                                                    <a href="http://app.iqiyi.com/mobile/player/index.html#mobile" title="通过 爱奇艺视频 Android Phone"
                                                                                    target="_blank" rseat="8">
                                                                                        <img src="http://www.qiyipic.com/common/fix/images_v6/icon/icon_from_phone.png"
                                                                                        alt="" class="vt_m" width="16" height="16">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="fr">
                                                                                    <a class="grayDark fn dn" href="javascript:;" title="举报" data-elem-btn="report"
                                                                                    data-uid-report="2143892995" data-delegate="report" classid="1" report-contentid="45833625048"
                                                                                    contentid="45833625048" userid="2143892995">
                                                                                        举报
                                                                                    </a>
                                                                                </div>
                                                                                <div class="fr">
                                                                                    <a class="grayDark dn" href="javascript:;" title="删除" data-elem-btn="del"
                                                                                    data-uid-del="2143892995" data-delegate="delete" contentid="45833625048">
                                                                                        删除
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cs-feed-item">
                                                                                <p class="feed-comment">
                                                                                    这几年这个电影看了很多遍 看一次哭一次 真的特别感动 站在每个人的角度去看 电影里演的都很真实 不明白评分怎么这么低 个人觉的比捉妖记更有意义
                                                                                    无论是特效还是各方面 真的特别喜欢
                                                                                </p>
                                                                            </div>
                                                                            <div class="cs-feed-item">
                                                                                <span data-delegate="like" contentid="45833625048">
                                                                                    <a href="javascript:;" title="赞" rseat="30">
                                                                                        赞
                                                                                    </a>
                                                                                    <em class="feed-desc">
                                                                                        (
                                                                                        <span data-elem-num="like">
                                                                                            536
                                                                                        </span>
                                                                                        )
                                                                                    </em>
                                                                                </span>
                                                                                <span class="ml5 mr5 grayDark">
                                                                                </span>
                                                                                <span data-delegate="response" data-replyid="45833625048" data-type="1"
                                                                                rseat="18">
                                                                                    <a href="javascript:;" title="回复">
                                                                                        回复
                                                                                    </a>
                                                                                    <em class="feed-desc">
                                                                                        (
                                                                                        <span data-elem-num="reply">
                                                                                            43
                                                                                        </span>
                                                                                        )
                                                                                    </em>
                                                                                </span>
                                                                                <span class="ml5 mr5 grayDark">
                                                                                </span>
                                                                                <span data-ctype="1" rseat="10">
                                                                                    <a href="javascript:;" title="分享" data-delegate="share" data-content="这几年这个电影看了很多遍     看一次哭一次   真的特别感动     站在每个人的角度去看   电影里演的都很真实     不明白评分怎么这么低   个人觉的比捉妖记更有意义    无论是特效还是各方面   真的特别喜欢"
                                                                                    contentid="45833625048">
                                                                                        分享
                                                                                    </a>
                                                                                    <span class="cs-feed-share" data-delegate="zhuan">
                                                                                        <span class="share-icons share-icons-remove" data-elem-btn="shareicons"
                                                                                        isbind="true">
                                                                                            <a href="javascript:;" class="csIcon csIcon-share-qweibo mr5" title=""
                                                                                            data-elem-type="2" rseat="10">
                                                                                            </a>
                                                                                            <a href="javascript:;" class="csIcon csIcon-share-sina mr5" title="" data-elem-type="1"
                                                                                            rseat="10">
                                                                                            </a>
                                                                                            <a href="javascript:;" class="csIcon csIcon-share-qzone mr5" title=""
                                                                                            data-elem-type="0" rseat="10">
                                                                                            </a>
                                                                                            <a href="javascript:;" class="csIcon csIcon-share-renren" title="" data-elem-type="3"
                                                                                            rseat="10">
                                                                                            </a>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                <div class="fr dn" data-delegate="closeview" data-btn-close="review" data-review-contentid="45833625048">
                                                                                    <a href="javascript:;" class="grayDark dib" title="收起">
                                                                                        收起
                                                                                        <i class="csIcon csIcon-feed-content-unflod ml5">
                                                                                        </i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cs-feed-item cs-feed-item-topGap " data-elem-box="45833625048">
                                                                                <div class="cs-form cs-form-comment">
                                                                                    <div class="form-item pr" data-pl-reply="box">
                                                                                        <div class="sayBox">
                                                                                            <input placeholder="回复一下你的看法..." class="sayBox-input" data-widget-feedcontent="feedcontent"
                                                                                            data-elem-comment="45833625048" type="text">
                                                                                            <div class="say-limit">
                                                                                                <em class="say-words">
                                                                                                    <strong data-elem-count="count" isout="0">
                                                                                                        0
                                                                                                    </strong>
                                                                                                    /140字
                                                                                                </em>
                                                                                                <a href="javascript:;" title="回复" rseat="18" class="say-Btn" data-elem-feed-button="button"
                                                                                                contentid="45833625048">
                                                                                                    回复
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="errorBox dn" data-error-box="plreply">
                                                                                            <div class="item-info">
                                                                                                <i class="icon-des">
                                                                                                </i>
                                                                                                <em class="form-des" data-error-tip="reply">
                                                                                                </em>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cs-feed-item">
                                                                                        <div class="cs-feed-sort cs-feed-fs12" data-type-elem="sort">
                                                                                            <div class="sort-tab">
                                                                                                <a class="vm-inline-block-inline selected" href="javascript:;" rseat="511191_1"
                                                                                                data-delegate="replysort" data-cur="1" data-elem-sorttype="hot" contentid="45833625048">
                                                                                                    按热门
                                                                                                </a>
                                                                                                <span class="vm-inline-block-inline ml5 mr5">
                                                                                                    |
                                                                                                </span>
                                                                                                <a class="vm-inline-block-inline " href="javascript:;" rseat="511191_3"
                                                                                                data-delegate="replysort" data-cur="0" data-elem-sorttype="add_time" contentid="45833625048">
                                                                                                    按时间
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-elem-list="reply">
                                                                                            <!-- 追加评论  -->
                                                                                            <div class="cs-feed-contentArea" reply-contentid="60909761021">
                                                                                                <div class="cs-feed-section">
                                                                                                    <div class="section-hd">
                                                                                                        <a rel="nofollow" href="http://www.iqiyi.com/u/1253750534" target="_blank">
                                                                                                            <img class="commentImg" src="http://www.qiyipic.com/common/fix/headicons/male-70.png"
                                                                                                            j-delegate="userinfopopup" data-userinfopopup-id="1253750534" width="30"
                                                                                                            height="30">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="section-bd">
                                                                                                        <div class="cs-feed-item cs-feed-item-first">
                                                                                                            <div class="fl">
                                                                                                                <a rel="nofollow" class="feed-fontBold" href="http://www.iqiyi.com/u/1253750534"
                                                                                                                title="" target="_blank" j-delegate="userinfopopup" data-userinfopopup-id="1253750534">
                                                                                                                    139****3921_m1600
                                                                                                                </a>
                                                                                                                <i data-vipheader-elem="vipicon" class="">
                                                                                                                </i>
                                                                                                                <em class="feed-desc" data-elem="time">
                                                                                                                    17小时前
                                                                                                                </em>
                                                                                                            </div>
                                                                                                            <div class="fr">
                                                                                                                <a class="grayDark dn" href="javascript:;" data-elem-btn="reply_report"
                                                                                                                data-uid-report="1253750534" data-delegate="report" userid="1253750534"
                                                                                                                title="举报" parentid="45833625048" contentid="60909761021" classid="">
                                                                                                                    举报
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="fr">
                                                                                                                <a class="grayDark dn" href="javascript:;" data-elem-btn="reply_del" data-uid-report="1253750534"
                                                                                                                data-delegate="responsedel" userid="1253750534" title="删除" parentid="45833625048"
                                                                                                                contentid="60909761021">
                                                                                                                    删除
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="cs-feed-item">
                                                                                                            <p class="feed-comment">
                                                                                                                回复：@139****3921_m1600 撒逼
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div class="cs-feed-item">
                                                                                                            <span>
                                                                                                                <span data-delegate="like" contentid="60909761021">
                                                                                                                    <a href="javascript:;" title="赞" rseat="30">
                                                                                                                        赞
                                                                                                                    </a>
                                                                                                                    <em class="feed-desc">
                                                                                                                        (
                                                                                                                        <span data-elem-num="like">
                                                                                                                            0
                                                                                                                        </span>
                                                                                                                        )
                                                                                                                    </em>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                            <span class="ml5 mr5 grayDark">
                                                                                                            </span>
                                                                                                            <span>
                                                                                                                <a href="javascript:;" title="回复" data-delegate="reply" rseat="18" data-elem="showpage"
                                                                                                                replyid="60909761021" contentid="45833625048" uname="139****3921_m1600">
                                                                                                                    回复
                                                                                                                </a>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cs-feed-pageArea">
                                                                                            <div class="cs-feed-item cs-feed-item-more">
                                                                                                <a href="javascript:;" class="f1 ml45" title="查看更多" data-delegate="tomove"
                                                                                                data-contentid="45833625048" data-num="499" data-type="3" rseat="511191_2">
                                                                                                    查看更多回复&gt;&gt;
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- 网站评论结束  -->
                                                            </div>
                                                            <div class="cs-feed-contentArea bbn">
                                                                <div class="cs-feed-item">
                                                                    <div class="fl">
                                                                        <a href="javascript:;" class="cs-btn-large cs-btn-green" data-delegate="sendFeed">
                                                                            发表评论
                                                                        </a>
                                                                    </div>
                                                                    <div class="fr">
                                                                        <div class="cs-page" data-elem-page="page" data-elem-totalpage="311.4"
                                                                        rseat="13">
                                                                            <span class="noPage">
                                                                                上一页
                                                                            </span>
                                                                            <span href="#arguments" data-elem="curpage" class="curPage">
                                                                                1
                                                                            </span>
                                                                            <a href="#arguments" data-page="2" data-delegate="feedpage" data-pb=""
                                                                            rseat="511191_5">
                                                                                2
                                                                            </a>
                                                                            <a href="#arguments" data-page="3" data-delegate="feedpage" data-pb=""
                                                                            rseat="511191_5">
                                                                                3
                                                                            </a>
                                                                            <a href="#arguments" data-page="4" data-delegate="feedpage" data-pb=""
                                                                            rseat="511191_5">
                                                                                4
                                                                            </a>
                                                                            <a href="#arguments" data-page="5" data-delegate="feedpage" data-pb=""
                                                                            rseat="511191_5">
                                                                                5
                                                                            </a>
                                                                            <span>
                                                                                ...
                                                                            </span>
                                                                            <a href="#arguments" data-page="312" data-delegate="feedpage" data-pb=""
                                                                            rseat="511191_5">
                                                                                312
                                                                            </a>
                                                                            <a href="#arguments" data-page="2" data-delegate="feedpage" class="a1"
                                                                            data-pb="" rseat="511191_5">
                                                                                下一页
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-feed-wrap fl mb20 noBorder" data-elem="pageshow">
                                    </div>
                                    <div class="cs-feed-wrap cfw-v3">
                                        <div class="cs-feed-bd" data-elem="setreview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                </div>
            </div>
            <div class="wrapper-right">
                <div data-pb="tmplt=longmovietplt" id="block-K" data-asyn-pb="true" data-elem-fengyunbang="fengyunbang">
                    <div class="fyb_mt">
                        <div class="adWrapper-rt" data-advideo-extension="wrap" data-advideo-qipuid=""
                        id="block-AA" data-block-name="logo">
                        </div>
                        <div id="widget-tab-3" data-tabname="fengyunbang" data-widget-hoverclick="true"
                        data-widget-topwrapper="topwrapper" data-widget-lazyloadcontent="10" data-bangdan-type="jsgetinc">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd">
                                   视频排行榜
                                    <span class="tip_t">
                                        <i class="tip_outer">
                                        </i>
                                        <i class="tip_inner">
                                        </i>
                                    </span>
                                </h2>
                            </div>
                            <div class="play-tab-music clearfix">
                                <a class="selected" href="javascript:void(0)" data-tab-title="widget-tab-3"
                                data-seq="1" data-tab-name="totalBang" data-lazyhover="true" inc-url="//www.iqiyi.com/40/7a/1-1036361-5064750-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    总榜
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="2" data-tab-name="华语" data-lazyhover="true" inc-url="//www.iqiyi.com/8d/d7/1-1036361-5064751-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    华语
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="3" data-tab-name="美国" data-lazyhover="true" inc-url="//www.iqiyi.com/4a/1d/1-1036361-5064752-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    美国
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="4" data-tab-name="韩国" data-lazyhover="true" inc-url="//www.iqiyi.com/72/32/1-1036361-5064753-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    韩国
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="5" data-tab-name="爱情" data-lazyhover="true" inc-url="//www.iqiyi.com/fc/ba/1-1036361-5064754-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    爱情
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="6" data-tab-name="动作" data-lazyhover="true" inc-url="//www.iqiyi.com/7f/85/1-1036361-5064755-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    动作
                                </a>
                                <a class="" href="javascript:void(0)" data-tab-title="widget-tab-3" data-elem="tabtitle"
                                data-seq="7" data-tab-name="vipBang" data-lazyhover="true" inc-url="//www.iqiyi.com/4d/db/1-1036361-5064756-3271662.inc"
                                style="display:black;" rseat="704111_movietab">
                                    会员
                                </a>
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" data-seq="1" style="display:black;">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="2">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="3">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="4">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="5">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="6">
                            </div>
                            <div class="play-rank" data-tab-body="widget-tab-3" style="display:black;"
                            data-seq="7">
                            </div>
                        </div>
                        <div class="loading_new" data-widget-toploading="toploading">
                            <img src="picture/play_loadingnew.gif">
                        </div>
                    </div>
                </div>
                <!-- -->
                <!--- 大剧热综单图推荐---->
                <div class="mt30 dn" data-imgrecomend-widget="widget">
                    <a href="#" data-elem="imgrecomend" j-delegate="loction2Watched" data-aid=""
                    title="" target="_blank">
                        <img width="280" height="140" alt="" src="" data-elem="imgurl" rseat="701041_dzrzpic">
                    </a>
                </div>
                <!-- guanggao-->
                <!-- -->
                <!--滚动吸顶标尺dom无实意-->
                <div id="scrollScaleDom">
                </div>
                <div id="paopaoRankListModule">
                    <div class="vInfoSide-video" data-dramastar-elem="dramastar">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_content">
                                    视频简介
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <span class="vInfoSide-name">
                                        {{ $video -> video_name }}
                                    </span>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            导演：
                                        </em>
                                        <span class="limitTxt">
                                            <a href="//www.iqiyi.com/lib/s_206969505.html" rseat="707181_director"
                                            target="_blank" title="马特·里夫斯">
                                                {{ $video -> director }}
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            地区：
                                        </em>
                                        <span class="limitTxt">
                                            <a href="//list.iqiyi.com/www/1/2------------------.html" title="美国" target="_blank"
                                            rseat="707181_region">
                                                美国
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            类型：
                                        </em>
                                        <span class="limitTxt">
                                            <a href="//list.iqiyi.com/www/1/-9-----------------.html" title="科幻" target="_blank"
                                            rseat="707181_genres">
                                                科幻
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            语言：
                                        </em>
                                        <span class="limitTxt">
                                            英语
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            主要演员：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <a href="#" target="_blank">
                                                {{ $video -> actor }}
                                            </a>
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            主要简介：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <span class="partDes" title="{{ $video -> video_desc }}" >
                                                @if(strlen($video -> video_desc) > 80 ) {{substr($video -> video_desc,0,80)}}... @else {{ $video -> vidio_desc }} @endif
                                            </span>
                                            <span class="allDesLink" data-elem-descbtn="controlBtn" rseat="707181_lookup">
                                                展开&gt;
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="vInfoSide-star dn" data-dramastar-elem="dramastar214497005">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_star">
                                    演员介绍
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <a href="//www.iqiyi.com/lib/s_214497005.html" class="vInfoSide-name"
                                    target="_blank" rseat="707181_name">
                                        安迪·瑟金斯
                                    </a>
                                    <a href="//www.iqiyi.com/paopao/quan02_216282847.html" class="rl-name_iconPp"
                                    target="_blank">
                                    </a>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            生日：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                1964-4-20
                                            </span>
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            简介：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <span class="partDes">
                                                安迪·瑟金斯，英国人，著名演员。正在上映的电影《猩球崛起》中，领导猩猩闹革命的凯撒，称得上是今年银幕上最让人印象深刻的角色之一。为这个角色注入灵魂的关键人物正是安迪·瑟金斯。《金..
                                            </span>
                                            <a href="//www.iqiyi.com/lib/s_214497005.html" class="allDesLink" target="_blank"
                                            rseat="707181_details">
                                                查看详情&gt;
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                                <h4 class="vInfoStar-h4 mt15">
                                    代表作品
                                </h4>
                                <ul class="piclist-vertical-10356">
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_205026114.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_109749_li_601_180_101.jpg" alt="猩球崛起：黎明之战" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_205026114.html" rseat="707181_works" target="_blank">
                                                    猩球崛起：黎明之战
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_212056414.html" target="_blank" rseat="707181_works">
                                                <img src="picture/v_112879834_m_601_180_101.jpg" alt="猩球崛起3：终极之战" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_212056414.html" rseat="707181_works" target="_blank">
                                                    猩球崛起3：终极之战
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/v_19rrn1zfaw.html" target="_blank" rseat="707181_works">
                                                <img src="picture/v_108701568_m_601_m2_180_101.jpg" alt="糖果屋大道" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/v_19rrn1zfaw.html" rseat="707181_works" target="_blank">
                                                    糖果屋大道
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2007
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="vInfoSide-star dn" data-dramastar-elem="dramastar215447005">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_star">
                                    演员介绍
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <a href="//www.iqiyi.com/lib/s_215447005.html" class="vInfoSide-name"
                                    target="_blank" rseat="707181_name">
                                        杰森·克拉克
                                    </a>
                                    <a href="//www.iqiyi.com/paopao/quan02_.html" class="rl-name_iconPp" target="_blank">
                                    </a>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            生日：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                1969-7-17
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            身高：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                0cm
                                            </span>
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            简介：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <span class="partDes">
                                                杰森·克拉克（Jason Clarke） 男， 生于1969年7月17日，家乡是澳大利亚的温顿，昆士兰洲。 他的父亲的工作曾是为人剪羊毛。
                                                杰森录过许多澳大利亚电视节目，包括《谋..
                                            </span>
                                            <a href="//www.iqiyi.com/lib/s_215447005.html" class="allDesLink" target="_blank"
                                            rseat="707181_details">
                                                查看详情&gt;
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                                <h4 class="vInfoStar-h4 mt15">
                                    代表作品
                                </h4>
                                <ul class="piclist-vertical-10356">
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_207267214.html" target="_blank" rseat="707181_works">
                                                <img src="picture/v_109944228_m_601_m4_180_101.jpg" alt="绝命海拔" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_207267214.html" rseat="707181_works" target="_blank">
                                                    绝命海拔
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2015
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_205026114.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_109749_li_601_180_101.jpg" alt="猩球崛起：黎明之战" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_205026114.html" rseat="707181_works" target="_blank">
                                                    猩球崛起：黎明之战
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_210222214.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_114409_li_601_180_101.jpg" alt="人类合约" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_210222214.html" rseat="707181_works" target="_blank">
                                                    人类合约
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2008
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="vInfoSide-star dn" data-dramastar-elem="dramastar214322405">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_star">
                                    演员介绍
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <a href="//www.iqiyi.com/lib/s_214322405.html" class="vInfoSide-name"
                                    target="_blank" rseat="707181_name">
                                        加里·奥德曼
                                    </a>
                                    <a href="//www.iqiyi.com/paopao/quan02_231753847.html" class="rl-name_iconPp"
                                    target="_blank">
                                    </a>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            生日：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                1958-3-21
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            地区：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                英国
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            身高：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                178cm
                                            </span>
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            简介：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <span class="partDes">
                                                1958年3月，加里·奥德曼出生在英国伦敦，父亲是焊工，而母亲是一位家庭主妇。他曾经获得英国Rose Bruford戏剧学院的奖学金，并于1979年获得了戏剧艺术学的学士学位。在..
                                            </span>
                                            <a href="//www.iqiyi.com/lib/s_214322405.html" class="allDesLink" target="_blank"
                                            rseat="707181_details">
                                                查看详情&gt;
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                                <h4 class="vInfoStar-h4 mt15">
                                    代表作品
                                </h4>
                                <ul class="piclist-vertical-10356">
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_207013114.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_164792_li_601_180_101.jpg" alt="红字" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_207013114.html" rseat="707181_works" target="_blank">
                                                    红字
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                1995
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_201098214.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_19900_li_601_m1_180_101.jpg" alt="空军一号" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_201098214.html" rseat="707181_works" target="_blank">
                                                    空军一号
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                1997
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_207504614.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_127683_li_601_180_101.jpg" alt="小红帽" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_207504614.html" rseat="707181_works" target="_blank">
                                                    小红帽
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2011
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="vInfoSide-star dn" data-dramastar-elem="dramastar214888905">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_star">
                                    演员介绍
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <a href="//www.iqiyi.com/lib/s_214888905.html" class="vInfoSide-name"
                                    target="_blank" rseat="707181_name">
                                        凯丽·拉塞尔
                                    </a>
                                    <a href="//www.iqiyi.com/paopao/quan02_.html" class="rl-name_iconPp" target="_blank">
                                    </a>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            生日：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                1976-3-23
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            身高：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                0cm
                                            </span>
                                        </span>
                                    </li>
                                    <li class="vInfo-full">
                                        <em>
                                            简介：
                                        </em>
                                        <span class="vInfo-full-con">
                                            <span class="partDes">
                                                凯丽·拉塞尔，美国歌手、影星。1998年，凯丽·拉塞尔开始出演让自己的名字家喻户晓的角色，WB剧集《Felicity》中的同名主人公，这是一位为了自己心爱的人而放弃去斯坦福医学院..
                                            </span>
                                            <a href="//www.iqiyi.com/lib/s_214888905.html" class="allDesLink" target="_blank"
                                            rseat="707181_details">
                                                查看详情&gt;
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                                <h4 class="vInfoStar-h4 mt15">
                                    代表作品
                                </h4>
                                <ul class="piclist-vertical-10356">
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_210521714.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_263177_li_601_180_101.jpg" alt="美国谍梦第4季" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_210521714.html" rseat="707181_works" target="_blank">
                                                    美国谍梦第4季
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电视剧
                                            </div>
                                            <div class="vertical-details-txt">
                                                2016
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_207861414.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_113083_li_601_m1_180_101.jpg" alt="大学生费莉希蒂第1季" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_207861414.html" rseat="707181_works" target="_blank">
                                                    大学生费莉希蒂第1季
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电视剧
                                            </div>
                                            <div class="vertical-details-txt">
                                                2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_202543714.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_34717_li_601_m1_180_101.jpg" alt="美国谍梦第1季" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_202543714.html" rseat="707181_works" target="_blank">
                                                    美国谍梦第1季
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电视剧
                                            </div>
                                            <div class="vertical-details-txt">
                                                2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="vInfoSide-star dn" data-dramastar-elem="dramastar214713005">
                        <div class="">
                            <div class="play-title mb15 pt22">
                                <h2 class="play-title-bd" rseat="707181_star">
                                    演员介绍
                                </h2>
                            </div>
                            <div class="vInfoSide-con">
                                <h3 class="vInfoSide-tit">
                                    <a href="//www.iqiyi.com/lib/s_214713005.html" class="vInfoSide-name"
                                    target="_blank" rseat="707181_name">
                                        托比·凯贝尔
                                    </a>
                                    <a href="//www.iqiyi.com/paopao/quan02_216231047.html" class="rl-name_iconPp"
                                    target="_blank">
                                    </a>
                                </h3>
                                <ul class="vInfoSide-kv clearfix">
                                    <li>
                                        <em>
                                            生日：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                1982-7-9
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            地区：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                英国
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <em>
                                            身高：
                                        </em>
                                        <span class="limitTxt">
                                            <span>
                                                188cm
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                                <h4 class="vInfoStar-h4 mt15">
                                    代表作品
                                </h4>
                                <ul class="piclist-vertical-10356">
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_208061614.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_225641_li_601_m1_180_101.jpg" alt="金刚：骷髅岛" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_208061614.html" rseat="707181_works" target="_blank">
                                                    金刚：骷髅岛
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/v_19rr99kwus.html" target="_blank" rseat="707181_works">
                                                <img src="picture/v_111156703_m_601_180_101.jpg" alt="魔兽（国语）" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/v_19rr99kwus.html" rseat="707181_works" target="_blank">
                                                    魔兽（国语）
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2016
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="piclist-vertical-img">
                                            <a href="//www.iqiyi.com/lib/m_209156014.html" target="_blank" rseat="707181_works">
                                                <img src="picture/li_240988_li_601_180_101.jpg" alt="宾虚" rseat="707181_works">
                                            </a>
                                        </div>
                                        <div class="piclist-vertical-details">
                                            <h3>
                                                <a href="//www.iqiyi.com/lib/m_209156014.html" rseat="707181_works" target="_blank">
                                                    宾虚
                                                </a>
                                            </h3>
                                            <div class="vertical-details-txt">
                                                电影
                                            </div>
                                            <div class="vertical-details-txt">
                                                2016
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 内容区 end-->
        <!-- -->
        <div class="wrapper wrapper-dianying" data-pb="tmplt=longmovietplt" id="block-M">
            <div id="widget-tab-4" data-footer-recommend="wrap">
                <ul class="play_recom_title">
                    <li class="selected" data-tab-title="widget-tab-4">
                        <a href="javascript:;" rseat="612231_video_page_new">
                            最新上线
                            <span class="tip_t">
                                <i class="tip_outer">
                                </i>
                                <i class="tip_inner">
                                </i>
                            </span>
                        </a>
                    </li>
                </ul>
                <h2 class="video_recom_tit dn">
                    视频推荐
                </h2>
                <div class="video_recom_main">
                    <!-- 最新上线 -->
                    <ul class="video_recom_item" data-tab-body="widget-tab-4">
                        <li>
                            <a rseat="612231_video_page_vn1" href="//www.iqiyi.com/v_19rr7vtqa8.html"
                            title="下半城风云" target="_blank">
                                <i class="play_recomIcon">
                                </i>
                                下半城风云
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
@endsection