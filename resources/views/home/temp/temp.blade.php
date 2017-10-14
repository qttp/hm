<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            {{ session('systemInfo')['web_title'] }}
        </title>
        <meta name="title" content="{{ session('systemInfo')['web_title'] }}" />
        <meta name="keywords" content="{{ session('systemInfo')['keywords'] }}"
        />
        <meta name="description" content="{{ session('systemInfo')['description'] }}"
        />
        <link type="text/css" rel="stylesheet" href="/home/css/v3-basic_other.css">
		<link rel="stylesheet" type="text/css"  href="/home/css/login-style.css"/>
		<script type="text/javascript" src="/home/js/jquery.min.js">
        </script>
		<script type="text/javascript" src="/home/js/login.js"></script>
        <script type="text/javascript" src="/home/js/sea1.2.js">
        </script>
		<script type="text/javascript" src="/layer/layer.js"></script>
		<script type="text/javascript">
		    $(function(){
				//update
			    $('#data-widget-parent').hover(function(){
				    $(this).find('#data-widget-navuploadfloater').show();
				},function(){
				    $(this).find('#data-widget-navuploadfloater').hide();
				});
				//summary
			    $('#data-widget-navmessagefloater').hover(function(){
				    $(this).find('.qy_nav_pop').show();
					$('#data-widget-navmessagefloater ul').children().click(function(){
					    $(this).siblings().removeClass();
						$(this).addClass('selected');
					});
				},function(){
				    $(this).find('.qy_nav_pop').hide();
				});
				//hisitory
				$('#widget-playhistory-new').hover(function(){
				    $(this).find('.qy_nav_pop').show();
				},function(){
				    $(this).find('.qy_nav_pop').hide();
				});
				//轮播图
				var billTime = null;
				var cnt = $('.focus_img_list li').length - 1;
				var i = 0;
				function startImgs()
				{
				billTime = setInterval(function(){
				    ++i;
				    if(i > cnt) {
					  i = 0;
					}
					if (i < 0) {
					  i = cnt;
					}
					$('.focus_img_list li').eq(i).siblings().css({display:'none',opacity:'0'});
					$('.focus_img_list li').eq(i).css({display:'block',opacity:'1'});
					$('.focus_dotList li').eq(i).siblings().removeClass();
					$('.focus_dotList li').eq(i).addClass('selected');
				},3000);
				
				}
				//按钮
				$('.focus_leftArrow').click(function(){
					clearInterval(billTime);
					var _this = null;
					var index = $('.focus_dotList li[class=selected]').index();
					if (index <= 0) {
					    index = cnt + 1;
					}
					$('.focus_img_list li').css({display:'none',opacity:'0'});
					$('.focus_img_list li').eq(index - 1).css({display:'block',opacity:'1'});
					$('.focus_dotList li').removeClass();
					$('.focus_dotList li').eq(index - 1). addClass('selected');
					i = index;
					startImgs();
				});
				
				$('.focus_rightArrow').click(function(){
					clearInterval(billTime);
					var _this = null;
					var index = $('.focus_dotList li[class=selected]').index();
					if (index >= cnt) {
					    index = -1;
					}
					$('.focus_img_list li').css({display:'none',opacity:'0'});
					$('.focus_img_list li').eq(index + 1).css({display:'block',opacity:'1'});
					$('.focus_dotList li').removeClass();
					$('.focus_dotList li').eq(index + 1). addClass('selected');
					i = index + 1;
					startImgs();
				});
				startImgs();
			})
		</script>
    </head>
    
    <body class="qypage-1380" data-body-wigdet="body">
        <script type="text/javascript">
            window.Q = window.Q || {},
            Q.PageInfo = Q.PageInfo || {},
            Q.PageInfo.respInfo = {
                cnf: [{
                    layout: 0,
                    cls: "qypage-980",
                    range: {
                        min: 0,
                        max: 1259
                    },
                    extraInfo: {
                        domicpeoplenum: 10
                    }
                },
                {
                    layout: 1,
                    cls: "qypage-1180",
                    range: {
                        min: 1259,
                        max: 1419
                    },
                    extraInfo: {
                        domicpeoplenum: 12
                    }
                },
                {
                    layout: 2,
                    cls: "qypage-1380",
                    range: {
                        min: 1419,
                        max: 9999
                    },
                    extraInfo: {
                        domicpeoplenum: 15
                    }
                }],
                curLayout: 2
            }; !
            function() {
                var e = Q.$("body"),
                a = Q.page.getViewWidth() > Q.page.getWidth() ? Q.page.getWidth() : Q.page.getViewWidth();
                if (Q && Q.PageInfo && Q.PageInfo.respInfo) {
                    var g = Q.PageInfo.respInfo.cnf;
                    e.removeClass(g[Q.PageInfo.respInfo.curLayout].cls);
                    for (var n = 0; n < g.length; n++) if (a >= g[n].range.min && a <= g[n].range.max && !e.hasClass(g[n].cls)) {
                        e.addClass(g[n].cls),
                        Q.PageInfo.respInfo.curLayout = g[n].layout;
                        break
                    }
                }
            } ();
        </script>
        <!--导航开始-->
        <div id="block-A" data-block-name="导航">
            <div class="topNavWrap-player" data-widget-compatible="wrap" data-ipadhack-elem="nav">
                <div class="navPlayer topNav-player topNav-fixed" data-widget-navctrl="player"
                data-widget-toplinefloater="blackFloater">
                    <div class="navcont clearfix">
                        <div class="topNavLt">
                            <a>
                                <img title="花猫视频" alt="花猫视频" src="/home/images/logo.png" />
                            </a>
                        </div>
                        <!-- nav first Start -->
                        <div class="navboxFirst navboxFirst-channel navboxWx" data-widget-navctrl-elem="first"
                        style="display:none">
                            <div class="mod-navPop clearfix">
                                <div class="navPop_bd clearfix">
                                    <ul class="nav_one clearfix">
                                        <li>
                                            <a rseat="娱乐" href="http://yule.iqiyi.com">
                                                娱乐
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="体育" href="http://sports.iqiyi.com">
                                                体育
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="资讯" href="http://news.iqiyi.com">
                                                资讯
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_two clearfix">
                                        <li>
                                            <a rseat="电影" href="http://www.iqiyi.com/dianying/">
                                                电影
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="电视剧" href="http://www.iqiyi.com/dianshiju/" data-widget="navdot"
                                            data-dot-cid="5">
                                                电视剧
                                                <i style="display:none;" class="tip_dot" data-newicon="dot">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="片花" href="http://trailer.iqiyi.com">
                                                片花
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="综艺" href="http://www.iqiyi.com/zongyi/">
                                                综艺
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="网络电影" href="http://www.iqiyi.com/weidianying/">
                                                网络电影
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="脱口秀" href="http://talkshow.iqiyi.com/">
                                                脱口秀
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_three clearfix">
                                        <li>
                                            <a rseat="动漫" href="http://www.iqiyi.com/dongman/">
                                                动漫
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="生活" href="http://life.iqiyi.com">
                                                生活
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="儿童" href="http://child.iqiyi.com/">
                                                儿童
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="母婴" href="http://baby.iqiyi.com">
                                                母婴
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="教育" href="http://edu.iqiyi.com/">
                                                教育
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="健康" href="http://www.iqiyi.com/health/">
                                                健康
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_four clearfix">
                                        <li>
                                            <a rseat="音乐" href="http://music.iqiyi.com">
                                                音乐
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="搞笑" href="http://fun.iqiyi.com">
                                                搞笑
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="时尚" href="http://f.iqiyi.com">
                                                时尚
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="原创" href="http://dv.iqiyi.com">
                                                原创
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="旅游" href="http://www.iqiyi.com/lvyou/">
                                                旅游
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="拍客" href="http://paike.iqiyi.com">
                                                拍客
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_five clearfix">
                                        <li>
                                            <a rseat="财经" href="http://business.iqiyi.com">
                                                财经
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="军事" href="http://mil.iqiyi.com">
                                                军事
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="科技" href="http://tech.iqiyi.com">
                                                科技
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="公益" href="http://gongyi.iqiyi.com/">
                                                公益
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="汽车" href="http://auto.iqiyi.com">
                                                汽车
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="纪录片" href="http://www.iqiyi.com/jilupian/">
                                                纪录片
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_six clearfix">
                                        <li>
                                            <a rseat="风云榜" href="http://top.iqiyi.com">
                                                风云榜
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="奇秀直播" href="http://x.pps.tv/" target="_blank">
                                                奇秀直播
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="全网影视" href="http://v.iqiyi.com" target="_blank">
                                                全网影视
                                            </a>
                                        </li>
                                        <li class="menuLink-pad">
                                            <a rseat="直播中心" href="http://www.iqiyi.com/live/">
                                                直播中心
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="全网搜索" href="http://so.iqiyi.com">
                                                全网搜索
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="应用商店" href="http://store.iqiyi.com" target="_blank">
                                                应用商店
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_seven clearfix">
                                        <li>
                                            <a rseat="商城" href="http://mall.iqiyi.com?odfrm=AQY01" target="_blank">
                                                商城
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="大头" href="http://datou.iqiyi.com/">
                                                大头
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="文学" href="http://wenxue.iqiyi.com" target="_blank">
                                                文学
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="游戏视频" href="http://games.iqiyi.com/">
                                                游戏视频
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="VIP会员" href="http://vip.iqiyi.com/" class="nav_link-vip">
                                                <i class="icon-vip">
                                                </i>
                                                <span class="nav_linkTx-e">
                                                    VIP会员
                                                </span>
                                            </a>
                                            <a rseat="花猫视频号" href="http://aipindao.iqiyi.com/" class="nav_link-pd">
                                                花猫视频号
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="漫画" href="http://www.iqiyi.com/manhua/">
                                                漫画
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="游戏中心" href="http://g.iqiyi.com/">
                                                游戏中心
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="VR" href="http://vr.iqiyi.com/">
                                                VR
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="个人中心" href="http://www.iqiyi.com/u">
                                                个人中心
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- vip新结构 -->
                                    <ul class="nav_eight nav_eight-vip clearfix">
                                        <li>
                                            <a href="http://vip.iqiyi.com/?fc=b4df9faa4b31aec4" class="nav_link-vipNew"
                                            rseat="vip_a">
                                                <i class="icon-vipGold">
                                                </i>
                                                <span class="nav_link-vipTx">
                                                    VIP会员
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- vip新结构 end -->
                                </div>
                                <!-- app download start -->
                                <div class="mod-appDownload-nav j_pca_pb" rseat="pcltdown_1501192">
                                    <a href="" pubarea="pcltdown_1501192" data-widget-getUrl="layerDownloadUrl"
                                    class="appDownload-nav_img" title="" rseat="pcltdown_1501192">
                                    </a>
                                    <p class="appDownload-nav_desc">
                                        <span>
                                            提高3倍流畅度！
                                        </span>
                                        <a href="" pubarea="pcltdown_1501192" data-widget-getUrl="layerDownloadUrl"
                                        class="appDownload-nav_link">
                                            立即下载
                                        </a>
                                    </p>
                                </div>
                                <!-- app download end -->
                            </div>
                        </div>
                        <iframe class="frame-leftMenu" frameborder="0" data-navctrl-elem="underframe">
                        </iframe>
                        <!-- nav first End -->
                        <div class="topNavRt topNavRt_new" data-widget-navmsgtips="navmsgtips">
                            <!-- 引导VIP用户绑定手机号 -->
                            <div data-vip-bind="mobile">
                            </div>
                            <!-- 引导VIP用户绑定手机号 end-->
                            <div data-widget-activity="topNavBox">
                            </div>
                            <!--活动通知结构-->
                            <!--topNavRt topLogin start-->
                            <div class="topLogin" id="data-temp-new" data-con="head" style="display: block;">
                                <!--add bofang jilu-->
                                <div class="topNav_user usrTx-box" data-widget-indexpageuserinfo="indexpageuserinfo">
                                    <div class="usrTx-outer" data-widget-userregistlogin="userregistlogin"
                                    id="widget-userregistlogin" style="display: none;">
                                        <!-- 控制积分弹层和用户名 -->
                                        <span id="userboxparent">
                                            <!--个人积分弹出层 开始-->
                                            <div class="usrTx-new_hover" style="display: none;" data-widget-userbox="userbox">
                                            </div>
                                            <!--个人积分弹出层 结束-->
                                            <span j-user="name" style="display: none;" class="usrTx-name" data-elem="topUserName"
                                            data-private-display="block">
                                                <span data-widget-score="name">
                                                    <a href="http://www.iqiyi.com/u/" rel="nofollow" rseat="tj_usrclk" class="usrTx_newWrap clearfix">
                                                        <span class="myName" id="top-username">
                                                        </span>
                                                        <i data-vipheader-elem="vipicon" class="kthy0201" style="display: none;">
                                                        </i>
                                                        <i data-vipheader-elem="notvipicon" style="display: none;" class="no-kthy0201"
                                                        data-private-display="">
                                                        </i>
                                                        <b>
                                                        </b>
                                                    </a>
                                                </span>
                                                <span class="my-jifen0409" data-widget-score="score" data-private-display=""
                                                style="display: none;">
                                                </span>
                                            </span>
                                        </span>
                                        <span>
                                            <!--登录-->
                                            <div data-elem="topLoginBar" class="usrTx-login">
                                                <a class="login0201" href="javascript:void(0)" data-elem="topLoginPanel">
                                                    登录
                                                </a>
                                                <!--登录弹出层 开始-->
                                                <div class="usrTxGeneral-box_hover usrLogin-pop" style="display: none;"
                                                data-widget-loginbox="loginbox" data-private-display="block">
                                                </div>
                                            </div>
                                            <div class="fl ml5 mr5" data-elem="splitline">
                                                |
                                            </div>
                                            <!--注册-->
                                            <div data-elem="topRegisterBar" class="usrTx-register">
                                                <a href="javascript:void(0)" data-elem="topRegistPanel" class="register0201">
                                                    注册
                                                </a>
                                                <!--注册弹出层 开始-->
                                                <div class="usrTxGeneral-box_hover usrTxGeneral-box_hover_reg usrLogin-pop"
                                                style="display: none;" data-widget-registbox="registbox">
                                                </div>
                                                <!--注册弹出层 结束-->
                                            </div>
                                        </span>
                                        <!--usrTx-outer end-->
                                    </div>
                                </div>
                                <!--add vip-->
                                <!--topNav_vip start-->
                                <div class="topNav_vip" data-vipheader-elem="wrapper" id="widget-vipheader"
                                data-vipheader-cls="topNav_vip">
                                    <!--添加VipblockHover可显示VIP层-->
                                    <a class="gx0201" href="http://serv.vip.iqiyi.com/order/preview.action?pid=a0226bd958843452&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" j-data-elem="zjuser"
                                    data-private-display="" style="display: block;" rseat="tj_opvip">
                                        开通VIP
                                    </a>
                                    <a class="gx0201" href="http://serv.vip.iqiyi.com/order/pre.action?pid=a232698bebb30ebd"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
                                    <a class="gx0201" href="http://serv.vip.iqiyi.com/order/guide.action?pid=a0226bd958843452&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
                                    <a class="gx0201" href="http://vip.iqiyi.com/?fc=a988b1d4503873af" j-playhistory="title"
                                    data-vipheader-elem="header" style="display: none;">
                                        VIP会员
                                    </a>
                                    <a class="gx0201" href="http://serv.vip.iqiyi.com/order/preview.action?pid=adb3376b039b970b&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
                                    <p class="pub_arrow" style="display:none">
                                    </p>
                                </div>
                                <!--add vip end-->
                                <!--上传-->
                                <div class="topNav_upload" id="data-widget-parent" data-class="topNav_upload-nologin"
                                data-widget="navdot" data-dot-cid="a">
                                    <div class="icon-qidanTip" data-newicon="a" style="display:none;">
                                        <i class="nav_mag_dot">
                                        </i>
                                    </div>
                                    <a href="javascript:void(0)" data-elem="uploadEntry" data-class="arrow-selected"
                                    rseat="tj_upld" class="topNav_upload_title" rseat="tj_upld">
                                        <i class="nav_upload_icon" data-newicon="dot">
                                        </i>
                                        上传
                                        <b>
                                        </b>
                                    </a>
                                    <div style="opacity: 1; display:none" id="data-widget-navuploadfloater"
                                    class="topNav_upload_menu">
                                        <div class="topNav_upload-inner">
                                            <span class="nav-login_arrow">
                                                <i class="tip_outer">
                                                </i>
                                                <i class="tip_inner">
                                                </i>
                                            </span>
                                            <ul class="topNav_upload-bd">
                                                <li>
                                                    <a href="javascript:void(0);" data-widget="navdot" data-dot-cid="b" j-delegate="uploadVideo"
                                                    rseat="tjup_load">
                                                        上传视频
                                                        <i style="display:none;" class="nav_mag_dot" data-newicon="b">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/editor/" rel="nofollow" data-widget="navdot"
                                                    data-dot-cid="c" rseat="tjup_editor">
                                                        制作视频
                                                        <i style="display:none;" class="nav_mag_dot" data-newicon="c">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/channel" rel="nofollow" rseat="tjup_kj"
                                                    data-navuploadfloater-elem="zone">
                                                        我的空间
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/home" rel="nofollow" rseat="tjup_sp">
                                                        视频管理
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/a/home" rel="nofollow" rseat="tjup_ll"
                                                    class="j_avideo_data">
                                                        播放数据
                                                    </a>
                                                </li>
                                                <li class="no-login">
                                                    <a href="//mp.iqiyi.com/finance/income" rel="nofollow" data-elem="checkShare"
                                                    rseat="tjup_fc">
                                                        查看分成
                                                    </a>
                                                </li>
                                                <li data-elem="navprofile" class="profile">
                                                    <a href="http://www.iqiyi.com/u/a/profile" rel="nofollow" rseat="tjup_hx">
                                                        用户画像
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/dv/iPartner.html" rseat="tjup_sq">
                                                        申请分成
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <iframe data-elem="bg" class="frameLayer frameLayer_upload">
                                        </iframe>
                                    </div>
                                </div>
                                <!--上传-->
                                <!-- 客户端下载 -->
                                <div class="topNav_appDL j_pca_pb" id="wnav-appdown" data-resp-min="1380"
                                data-widget="navdot" data-dot-cid="app" style="display: none;" rseat="pcltdown_15030501">
                                    <a data-widget-appdown="playpage" href="" pubarea="pcltdown_15030501"
                                    data-widget-getUrl="layerDownloadUrl" title="下载花猫视频视频桌面版" class="topNav_appDL_link"
                                    rseat="pcltdown_15030501">
                                        下载客户端
                                    </a>
                                    <div class="icon-qidanTip" data-newicon="app" style="display: none;">
                                        <i class="nav_mag_dot">
                                        </i>
                                    </div>
                                </div>
                                <!--消息开始-->
                                <div class="topNav_update" id="data-widget-navmessagefloater" data-navmessagefloater-showcls="topNav_update-hover">
                                    <!-- 头部 -->
                                    <span data-navmessagefloater-elem="title" class="toGeng">
                                        <!-- 角标 -->
                                        <div style="display:none;" class="icon-qidanTip" data-navmessagefloater-elem="numtip"
                                        data-navmsgtips-icon="icon">
                                            <i class="nav_mag_dot">
                                            </i>
                                        </div>
                                        <a href="javascript:void(0)" class="gx" rseat="tj_ favorite">
                                            消息
                                            <b>
                                            </b>
                                        </a>
                                    </span>
                                    <!-- 弹层 -->
                                    <div class="qy_nav_pop" data-navmessagefloater-elem="body">
                                        <div class="nav_pop_inner">
                                            <!-- 箭头 -->
                                            <div class="nav_pop_arrow">
                                                <i class="arrow-inner">
                                                </i>
                                                <i class="arrow-outer">
                                                </i>
                                            </div>
                                            <!-- 标题 -->
                                            <div class="nav_pop_title">
                                                <ul class="pop_title_list">
                                                    <li class="selected" data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:void(0);" rseat="更新提醒">
                                                            更新提醒
                                                            <i class="title_item_tip" style="display:none;" data-navmessagefloater-elem="num">
                                                                6
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:void(0);" rseat="与我相关">
                                                            与我相关
                                                            <i class="title_item_tip" style="display:none;" data-navmessagefloater-elem="num">
                                                                6
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:void(0);" rseat="系统通知">
                                                            系统通知
                                                            <i class="title_item_tip" style="display:none;" data-navmessagefloater-elem="num">
                                                                6
                                                            </i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- 内容 -->
                                            <div class="nav_pop_main" data-playhistory-elem="navpopmain">
                                                <div class="pop_main_inner" data-navmessagefloater-elem="tabbody">
                                                </div>
                                                <div class="pop_main_inner" style="display:none;" data-navmessagefloater-elem="tabbody">
                                                </div>
                                                <div class="pop_main_inner" style="display:none;" data-navmessagefloater-elem="tabbody">
                                                </div>
                                            </div>
                                            <!-- 底部 -->
                                            <div class="nav_pop_footer clearfix">
                                                <div class="pop_footer_sign">
                                                    <a href="javascript:void(0);" data-navmessagefloater-elem="markreadbtn"
                                                    rseat="全部标记已读">
                                                        全部标记为已读
                                                    </a>
                                                </div>
                                                <div class="pop_footer_more">
                                                    <a data-navmessagefloater-elem="morebtn" rseat="查看更多">
                                                        查看更多>>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 垫片 -->
                                    <div style="display: block;">
                                        <iframe src="about:blank" frameborder="0" style="position: absolute; z-index: 4; top: 25px; left: -156px; width: 300px; height: 375px; background-color: rgb(255, 255, 255); display: none; background-position: initial initial; background-repeat: initial initial;">
                                        </iframe>
                                    </div>
                                </div>
                                <!--消息结束-->
                                <!--topNav_records start-->
                                <div class="topNav_update topNav_records topNav_records" data-playhistory-cls="topNav_update"
                                id="widget-playhistory-new">
                                    <a class="a1 jilu" onfocus="this.blur();" href="#" data-playhistory-elem="title"
                                    rseat="tj_record">
                                        播放记录
                                        <b>
                                        </b>
                                    </a>
                                    <div class="qy_nav_pop" data-playhistory-elem="body" style="position:absolute; right:0; top:25px;">
                                        <div class="nav_pop_inner" data-playhistory-elem="nulltip">
                                            <div class="noRecorder_tips">
                                                您还没有观看任何视频
                                            </div>
                                            <!-- 箭头 -->
                                            <div class="nav_pop_arrow">
                                                <i class="arrow-inner">
                                                </i>
                                                <i class="arrow-outer">
                                                </i>
                                            </div>
                                            <!-- 弹层内容 开始 -->
                                            <div class="nav_pop_main nav_pop_main-recorder">
                                                <!-- 时间线 -->
                                                <div class="timeLine" data-playhistory-elem="timeline">
                                                </div>
                                                <!-- 播放记录-登录 -->
                                                <div class="historytips" style="display:none;" data-playhistory-elem="tip"
                                                data-name="exactRecord">
                                                    <div class="historytips-bg">
                                                    </div>
                                                    <div class="historytips-txt" data-playhistory-elem="tiptext" style="cursor: pointer;">
                                                        花猫视频用户将能永久保存播放记录
                                                    </div>
                                                    <a href="javascript:void(0)" class="iconjl-close" j-delegate="historyTip-close"
                                                    style="display: block;" data-playhistory-elem="tipclose">
                                                    </a>
                                                </div>
                                                <div class="pop_main_inner">
                                                    <div class="nav_pop_recorderWrap nav_pop_recorderWrap-v2" data-playhistory-elem="content">
                                                        <div class="unReader" style="height: 140px; line-height: 24px; overflow: hidden; padding-top: 60px; text-align: center; display: none;"
                                                        data-playhistory-elem="loadingtip">
                                                            <img src="picture/load.gif">
                                                            <br>
                                                            <span class="j-historyMaskLoading-txt" data-playhistory-elem="loadingtiptext">
                                                                正在为您读取历史记录
                                                            </span>
                                                        </div>
                                                        <!--播放记录2.5：筛选操作-->
                                                        <div class="allVideo-checkbox fr">
                                                            <label class="checkBox-item checkBox-selected" data-playhistory-elem="allvideo"
                                                            checkcls="checkBox-selected">
                                                                <i class="site-icons icon-checkBox">
                                                                </i>
                                                                <span class="vl-inline">
                                                                    过滤短视频
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div data-playhistory-elem="reloadingtip" class="pop_noItem_inner " style="display:none">
                                                            <div class="no-longVideo">
                                                                <em class="fs14 mainColor c-999">
                                                                    云端记录加载失败，请稍后
                                                                    <a data-playhistory-elem="reloading" href="javascript:void(0);" class="green">
                                                                        刷新重试
                                                                    </a>
                                                                </em>
                                                            </div>
                                                        </div>
                                                        <div class="pop_noItem_inner dn" data-playhistory-elem="longnulltip">
                                                            <div class="no-longVideo">
                                                                <em class="fs14 mainColor c-999">
                                                                    暂无长视频（电视剧、纪录片、动漫、综艺、电影）播放记录，
                                                                    <a data-playhistory-elem="readmore" href="javascript:void(0);" class="green">
                                                                        查看全部
                                                                    </a>
                                                                </em>
                                                            </div>
                                                        </div>
                                                        <!-- 播放记录-今天 -->
                                                        <div class="nav_pop_recorder" data-playhistory-elem="today">
                                                            <div class="recorder_timeTip">
                                                                <i class="icon-timeTipDot">
                                                                    ●
                                                                </i>
                                                                <span class="timeTip">
                                                                    今天
                                                                </span>
                                                            </div>
                                                            <div class="recorder_list">
                                                                <ul class="recorder_list_inner" data-playhistory-elem="todaylist">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- 播放记录-今天 -->
                                                        <div class="nav_pop_recorder" data-playhistory-elem="week">
                                                            <div class="recorder_timeTip">
                                                                <i class="icon-timeTipDot">
                                                                    ●
                                                                </i>
                                                                <span class="timeTip">
                                                                    本周以内
                                                                </span>
                                                            </div>
                                                            <div class="recorder_list">
                                                                <ul class="recorder_list_inner" data-playhistory-elem="weeklist">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- 播放记录-更早 -->
                                                        <div class="nav_pop_recorder" data-playhistory-elem="early">
                                                            <div class="recorder_timeTip">
                                                                <i class="icon-timeTipDot">
                                                                    ●
                                                                </i>
                                                                <span class="timeTip">
                                                                    较早
                                                                </span>
                                                            </div>
                                                            <div class="recorder_list">
                                                                <ul class="recorder_list_inner" data-playhistory-elem="earlylist">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 弹层内容 开始 -->
                                        </div>
                                        <!-- 底部 -->
                                        <div class="nav_pop_ft_recorder clearfix">
                                            <a data-playhistory-elem="more" href="#" title="查看更多">
                                                查看更多&gt;
                                            </a>
                                        </div>
                                    </div>
                                    <!-- iframe -->
                                    <div data-playhistory-elem="underframe" style="display: block;">
                                    </div>
                                </div>
                                <!--topNav_records end-->
                            </div>
                            <!--topNavRt topLogin end-->
                            <!--topNavRt search start-->
                            <div class="clearfix">
                                <div data-widget-suggest="suggest" data-suggest-tip="" data-suggest-layout="0"
                                class="searchbox" data-suggest-focusoutblacklist="iqiyi.com">
                                    <div data-widget-suggest="hotList">
                                        <a title="人间至味是清欢" href='http://so.iqiyi.com/so/q_人间至味是清欢' target='_blank'
                                        style="display:none;" data-suggest-elem="keyword">
                                        </a>
                                    </div>
                                    <form data-suggest-elem="form">
                                        <div data-suggest-elem="container" class="srchDef">
                                            <span class="in">
                                                <input type="text" autocomplete="off" class="navTopTxt" data-suggest-elem="input">
                                            </span>
                                            <span class="out">
                                                <input type="button" class="navTopBtn" value="" data-suggest-elem="btn"
                                                rseat="tj_serch">
                                            </span>
                                        </div>
                                    </form>
                                    <div class="soResult dn" data-suggest-elem="soguide">
                                        <div class="mod-tip-search">
                                            <a class="tip_content" pb="t=20" pubarea="pcltdown_mac_search" target="black"
                                            href="javascript:void(0);" j-delegate="getDownloadUrl">
                                                使Mac客户端，看片更有范！
                                            </a>
                                            <a class="tip_close" href="javascript:void();" j-delegate="close" pb="t=20"
                                            rseat="1501271_cls">
                                                ×
                                            </a>
                                        </div>
                                    </div>
                                    <div class="soResult" data-suggest-elem="body" style="display:none;">
                                        <div class="soResult_con">
                                            <ul class="soHistory_list" data-suggest-elem="historylist">
                                            </ul>
                                            <ul class="soResult_list" data-suggest-elem="list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav_pop_single" data-navmsgtips-content="content">
                            </div>
                            <!--topNavRt search end-->
                            <div class="gradientLayer">
                            </div>
                        </div>
                    </div>
                    <div class="qy-nav-popup-pad" style="display:block">
                        <div class="nav-channelList-v2" data-widget-navctrl-elem="padfirst" style="display: none">
                            <ul class="channelList_item clearfix">
                                <li data-pb="t=5">
                                    <a href="//yule.iqiyi.com" title="娱乐">
                                        娱乐
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//sports.iqiyi.com" title="体育">
                                        体育
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/news/" title="资讯">
                                        资讯
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/dianying/" title="电影">
                                        电影
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/dianshiju/" title="电视剧">
                                        电视剧
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//trailer.iqiyi.com" title="片花">
                                        片花
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/zongyi/" title="综艺">
                                        综艺
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/weidianying/" title="微电影">
                                        微电影
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//talkshow.iqiyi.com" title="脱口秀">
                                        脱口秀
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/dongman/" title="动漫">
                                        动漫
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//life.iqiyi.com" title="生活">
                                        生活
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//child.iqiyi.com" title="少儿">
                                        少儿
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//baby.iqiyi.com" title="母婴">
                                        母婴
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//games.iqiyi.com" title="游戏">
                                        游戏
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//edu.iqiyi.com" title="教育">
                                        教育
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li data-pb="t=5">
                                    <a href="//music.iqiyi.com" title="音乐">
                                        音乐
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//fun.iqiyi.com" title="搞笑">
                                        搞笑
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//f.iqiyi.com" title="时尚">
                                        时尚
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//dv.iqiyi.com" title="原创">
                                        原创
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/lvyou/" title="旅游">
                                        旅游
                                    </a>
                                </li>
                                <li>
                                    <a href="//paike.iqiyi.com" title="拍客">
                                        拍客
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li data-pb="t=5">
                                    <a href="//business.iqiyi.com" title="财经">
                                        财经
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//mil.iqiyi.com" title="军事">
                                        军事
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//tech.iqiyi.com" title="科技">
                                        科技
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//www.iqiyi.com/manhua/" title="漫画">
                                        漫画
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="//auto.iqiyi.com" title="汽车">
                                        汽车
                                    </a>
                                </li>
                                <li data-pb="t=5">
                                    <a href="http://www.iqiyi.com/jilupian/" title="纪录片">
                                        纪录片
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li>
                                    <a href="//top.iqiyi.com" title="风云榜" data-pb="t=5">
                                        风云榜
                                    </a>
                                </li>
                                <li>
                                    <a href="//gongyi.iqiyi.com" title="公益" data-pb="t=5">
                                        公益
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="http://www.iqiyi.com/lib/" data-pb="t=5" title="全网影视">
                                        全网影视
                                        <i class="dot">
                                        </i>
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="//so.iqiyi.com" data-pb="t=5" title="花猫视频搜索">
                                        花猫视频搜索
                                        <i class="dot">
                                        </i>
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="http://www.iqiyi.com/qiyichupin/" title="花猫视频出品" data-pb="t=5">
                                        花猫视频出品
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li class="word-long">
                                    <a href="//g.pps.tv" title="PPS游戏" data-pb="t=5">
                                        PPS游戏
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="//x.pps.tv" title="PPS奇秀" data-pb="t=5">
                                        PPS奇秀
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="//store.iqiyi.com" title="应用商店" data-pb="t=5">
                                        应用商店
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.iqiyi.com/tese/" title="特色频道" data-pb="t=5">
                                        特色频道
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="//mall.iqiyi.com" title="花猫视频商城" data-pb="t=5">
                                        花猫视频商城
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="http://www.iqiyi.com/u/" rel="nofollow" title="个人中心" data-pb="t=5">
                                        个人中心
                                    </a>
                                </li>
                            </ul>
                            <ul class="channelList_item clearfix">
                                <li class="channel_vip">
                                    <a href="//vip.iqiyi.com/?fc=b4df9faa4b31aec4" title="VIP会员">
                                        <i class="icon-1x icon-2x icon-vip-new">
                                        </i>
                                        <span class="vip_tx">
                                            VIP
                                        </span>
                                        <span class="vip_tx">
                                            会员
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <iframe class="frame-topNav-player" frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- 导航结束 -->
        <script type="text/javascript">
            (function() {
                var a = Q.$("#widget-userregistlogin"),
                b = a.down("[data-elem='topUserName']"),
                d = a.down("[data-elem=topLoginPanel]"),
                e = a.down("[data-elem=topRegistPanel]"),
                f = a.down("*[data-elem=splitline]"),
                c = Q.cookie.get("P00002") && JSON.parse(Q.cookie.get("P00002"));
                if (c && c.pnickname) {
                    c.nickname = c.pnickname
                }
                var g = b.down("#top-username") || b.down("a");
                c && c.nickname ? (d.hide(), e.hide(), f && f.hide(), !Q.browser.IE8 && Q.browser.IE6 && g.css("width", Math.min(12 * c.nickname.length, 36) + "px"), a.show(), b.show(), g.html(c.nickname)) : (b.hide(), d.html("登录").css("display", ""), e.html("注册").css("display", ""), a.show())
            })();
        </script>
		@section('content')
		@show
        <div class="footerN1214" data-css="fragments/block_footerN1214.css" data-widget-footer="footer"
        id="block-Z" data-block-name="页底">
            <div class="footmenu">
                <a href="http://www.iqiyi.com/common/aboutus.html" class="s1" rel="nofollow"
                title="公司介绍" rseat="公司介绍" target="_blank">
                    公司介绍
                </a>
                <a href="http://www.iqiyi.com/common/news.html" rel="nofollow" title="新闻动态"
                rseat="新闻动态" target="_blank">
                    新闻动态
                </a>
                <a href="http://www.iqiyi.com/common/contactus.html" rel="nofollow" title="联系方式"
                rseat="联系方式" target="_blank">
                    联系方式
                </a>
                <a href="http://zhaopin.iqiyi.com" rel="nofollow" title="招聘英才" rseat="招聘英才"
                target="_blank">
                    招聘英才
                </a>
                <a href="http://labs.iqiyi.com" rel="nofollow" title="花猫视频实验室" rseat="花猫视频实验室"
                target="_blank">
                    花猫视频实验室
                </a>
                <a href="http://open.iqiyi.com/" rel="nofollow" title="开放平台" rseat="开放平台"
                target="_blank">
                    开放平台
                </a>
                <a href="http://www.iqiyi.com/common/rz.html" rel="nofollow" title="花猫视频号认证"
                rseat="花猫视频号认证" target="_blank">
                    花猫视频号认证
                </a>
                <a href="http://mp.iqiyi.com/" rel="nofollow" title="花猫视频号" rseat="花猫视频号"
                target="_blank">
                    花猫视频号
                </a>
                <a href="http://help.iqiyi.com/" rel="nofollow" title="帮助中心" rseat="帮助中心"
                target="_blank">
                    帮助中心
                </a>
                <a href="http://www.iqiyi.com/common/copyright.html?entry=iqiyi" rel="nofollow"
                rseat="侵权投诉" title="侵权投诉" target="_blank">
                    侵权投诉
                </a>
                <a href="http://www.iqiyi.com/common/20100420/n4813.html" rel="nofollow"
                title="AboutUs" rseat="About Us" target="_blank">
                    About Us
                </a>
                <!-- 地区切换隐藏时追加dn -->
                <div class="region clearfix dn" id="footer-websel-menu">
                    <label class="region-tit">
                        所在地
                    </label>
                    <!-- hover时追加region-opt-hover -->
                    <div class="region-opt" id="i18n-selweb-footer">
                        <a class="select-handler" href="javascript:;" j-delegate="i18n-change-btn">
                            <span id="i18n-selweb-text">
                                中国（大陆）
                            </span>
                            <i class="handler-btn">
                            </i>
                        </a>
                        <ul class="select-opt" id="i18n-selweb-wrap">
                            <li class="link-option selected">
                                <a href="javascript:;" style="display:block;" j-delegate="i18n-change-web"
                                i18n-web-type="cn" rseat="中国大陆">
                                    中国（大陆）
                                </a>
                            </li>
                            <li class="link-option">
                                <a href="javascript:;" style="display:block;" j-delegate="i18n-change-web"
                                i18n-web-type="tw" rseat="台湾">
                                    台湾
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="fEn">
                Copyright © 2017
                <a href="//www.iqiyi.com" class="link0" title="花猫视频" rseat="花猫视频" target="_blank">
                    花猫视频网
                </a>
                All Rights Reserved
            </p>
        </div>
		<div class="login">
			<div class="login-title">登录会员<span><a href="javascript:void(0);" class="close-login">关闭</a></span></div>
			<div class="login-input-content">
				<div class="login-input">
					<label>用&nbsp;户&nbsp;&nbsp;名：</label>
					<input type="text" placeholder="请输入用户名"  name="info[username]" id="username" class="list-input"/>
				</div>
				<div class="login-input">
					<label>登录密码：</label>
					<input type="password" placeholder="请输入登录密码" name="info[password]" id="password" class="list-input"/>
				</div>
			</div>
			<div class="login-button"><a href="javascript:void(0);" id="login-button-submit">登录会员</a></div>
		</div>
		<div id="wrap">fdsfdsfdsfhkjjjjjjjj</div>
    </body>
</html>