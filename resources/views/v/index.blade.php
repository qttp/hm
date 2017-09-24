<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>
            电影频道-热门好看的电影大全-正版高清电影在线观看-爱奇艺
        </title>
        <meta name="title" content="电影频道-热门好看的电影大全-正版高清电影在线观看-爱奇艺" />
        <meta name="keywords" content="电影,电影大全,热门电影,好看的电影,高清在线电影,高清电影下载,高清电影"
        />
        <meta name="description" content="爱奇艺电影频道拥有全网最新、最全的高清在线电影资源，热门高清电影、最新上线电影、电影预告在线观看。包含国产电影、韩国电影、日本电影、美国电影、欧洲电影、印度电影、泰国电影。电影类型有戏剧电影、科幻电影、爱情片、动作片、枪战片、谍战片、悬疑、恐怖片、魔幻、犯罪、惊辣、奇幻、战斗片、青春、坚挺伦理等。有免费电影和付费电影可供选择，在线高清电影下载。"
        />
        <link type="text/css" rel="stylesheet" href="/video/css/v3-basic_other.css">
        <link type="text/css" rel="stylesheet" href="/video/css/v3-dianying-v1.css">
		<script type="text/javascript" src="/video/js/jquery.min.js">
        </script>
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
        <script type="text/javascript" src="/video/js/sea1.2.js">
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
                            <a class="logo" href="http://www.iqiyi.com/" data-navpingback="logo" rseat="iQIYI_logo">
                                <img title="爱奇艺 iQIYI.COM" alt="爱奇艺 iQIYI.COM" src="picture/logo108x35_black.png"
                                rseat="iQIYI_yxpz">
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
                                            <a rseat="爱奇艺号" href="http://aipindao.iqiyi.com/" class="nav_link-pd">
                                                爱奇艺号
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
                                            <div data-private-display="" data-elem="topLoginBar" class="usrTx-login">
                                                <a class="login0201" href="javascript:void(0)" data-elem="topLoginPanel"
                                                j-login="title" rseat="tj_login" j-delegate="login">
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
                                            <div data-private-display="" data-elem="topRegisterBar" class="usrTx-register">
                                                <a j-register="title" href="javascript:void(0)" data-elem="topRegistPanel"
                                                class="register0201" rseat="tj_ regist" j-delegate="regist">
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
                                                    <a href="http://www.iqiyi.com/u/video" rel="nofollow" rseat="tjup_sp">
                                                        视频管理
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/a/video" rel="nofollow" rseat="tjup_ll"
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
                                    data-widget-getUrl="layerDownloadUrl" title="下载爱奇艺视频桌面版" class="topNav_appDL_link"
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
                                                        爱奇艺用户将能永久保存播放记录
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
                                    <a href="//so.iqiyi.com" data-pb="t=5" title="爱奇艺搜索">
                                        爱奇艺搜索
                                        <i class="dot">
                                        </i>
                                    </a>
                                </li>
                                <li class="word-long">
                                    <a href="http://www.iqiyi.com/qiyichupin/" title="爱奇艺出品" data-pb="t=5">
                                        爱奇艺出品
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
                                    <a href="//mall.iqiyi.com" title="爱奇艺商城" data-pb="t=5">
                                        爱奇艺商城
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
        <div class="topFlash topFlash_huiyuan">
            <div class="j_pingback_view" data-pingback-name="706082_焦点图">
                <div class="topFlash">
                    <div data-widget-indexfocus="indexFocus" data-indexfocus-trigger="mouseover"
                    data-indexfocus-resetrseat="true" data-indexfocus-disableanim="100" data-indexfocus-textshowtime="50"
                    class="focus-dotSlide-10" data-event-id="bd027d0d0a794b1f3c5951c170c25923"
                    data-area="salmon" data-bucket="salmon20_freshness_ctr">
                        <div class="focus_imgs">
                            <ul class="focus_img_list" data-indexfocus-elem="bigPics" data-indexfocusplaybtn-from="0">
                                <li style="display:block;opacity:1;background-image:url(/video/images/a31580af2db4441398daa70584127c1c.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/650b414b9a8446e5aef9f89b39175c30.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/65b7bae8248147a38eec5b9cd1665649.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/37c2f60026d8499cad2680f24099230c.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/6ec4c6783ccf4dafa74b9aec091ba776.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/372ceaaa80c240b68300ecc4403b82d6.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/df95eca8d42643c69dc00d1b0f2aad2b.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/de523d32e1554a68aea4a1ff4d97e31b.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/4116cc81662e4402a89c499fce949110.jpg)">
                                </li>
                                <li style="display:none;opacity:0;background-image:url(/video/images/43f658200fff4adba5ef82ab7a2e6530.jpg)"
                                </li>
                            </ul>
                        </div>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t1_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t1_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t1_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t2_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t2_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t2_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t3_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t3_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t3_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t4_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t4_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t4_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t5_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t5_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t5_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t6_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t6_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t6_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t7_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t7_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t7_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t8_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t8_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t8_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t9_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t9_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t9_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                        <a class="focus_title_bg" data-indexfocus-elem="playPageWrap" href="${item.href}"
                        data-indexfocus-link="link" data-private-display="block" target="${item.target}"
                        style="display: ${item.display};">
                            <i class="focus_btn" rseat="fcs_2_t10_1" data-indexfocus-btnelem="playbtn">
                            </i>
                            <h2 class="caption">
                                <span data-indexfocus-titleelem="playPageTitle" rseat="fcs_2_t10_2">
                                    ${item.title}
                                </span>
                            </h2>
                            <p class="desc">
                                <span data-indexfocus-maintitleelem="playPageMainDescription" data-indexfocus-nocut="true"
                                rseat="fcs_2_t10_3">
                                    ${item.title}
                                </span>
                            </p>
                        </a>
                    </div>
                    <div class="focus_dots clearfix" data-largefocuspicture-elem="menu">
                        <a class="focus_leftArrow" rseat="706082_焦点图_left" data-indexfocus-elems="prevbtn"
                        href="javascript:void(0);">
                        </a>
                        <div class="focus_dotList_wrapper">
                            <ul class="focus_dotList" data-indexfocus-elem="smallPics">
                                <li data-indexfocus-index="1" class="selected">
                                    <a rseat="706082_焦点图_change1" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="2" class="">
                                    <a rseat="706082_焦点图_change2" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="3" class="">
                                    <a rseat="706082_焦点图_change3" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="4" class="">
                                    <a rseat="706082_焦点图_change4" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="5" class="">
                                    <a rseat="706082_焦点图_change5" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="6" class="">
                                    <a rseat="706082_焦点图_change6" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="7" class="">
                                    <a rseat="706082_焦点图_change7" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="8" class="">
                                    <a rseat="706082_焦点图_change8" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="9" class="">
                                    <a rseat="706082_焦点图_change9" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                                <li data-indexfocus-index="10" class="">
                                    <a rseat="706082_焦点图_change10" href="javascript:void()" class="focusDot">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="focus_rightArrow" rseat="706082_焦点图_right" href="javascript:void(0);"
                        data-indexfocus-elems="nextbtn">
                        </a>
                    </div>
                </div>
                <div id="1000000000616" class="adflash_style-fix" style="display:none;">
                </div>
            </div>
        </div>
        </div>
        <div class="wrap-pindao-classes dyIndex_classes j_pingback_view" data-pingback-name="706082_片库">
            <div class="site-main">
                <div class="mod-classes-blcoks clearfix">
                    <div class="classes-blcoks_fl">
                        <dl class="classes-blcoks">
                            <dt>
                                <h4>
                                    分类
                                    <a class="classes_linkMore" href="http://list.iqiyi.com/www/1/-------------11-1-1-iqiyi--.html"
                                    target="_blank" rseat="706082_分类_全部电影">
                                        全部&gt;
                                    </a>
                                </h4>
                            </dt>
                            <dd style="width:90%">
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-8------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_喜剧">
                                    喜剧
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-13------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_悲剧">
                                    悲剧
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-6------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_爱情">
                                    爱情
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-11------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_动作">
                                    动作
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-131------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_枪战">
                                    枪战
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-291------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_犯罪">
                                    犯罪
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-10------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_恐怖">
                                    恐怖
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-289------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_悬疑">
                                    悬疑
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-12------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_动画">
                                    动画
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-27356------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_家庭">
                                    家庭
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-129------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_魔幻">
                                    魔幻
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-9------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_科幻">
                                    科幻
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-7------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_战争">
                                    战争
                                </a>
                                <a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a><a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
								<a target="_blank" href="http://list.iqiyi.com/www/1/-130------------11-1-1-iqiyi--.html"
                                rseat="706082_分类_青春">
                                    青春
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="hy_ydBox">
                        <img src="/video/picture/vipdyr_wyf.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="site-main" data-widget-maincontent="maincontent">
            <div class="wrapper-cols pr j_movie_tab j_pingback_view" data-widget-fullcol="fullcol"
            data-pingback-name="706082_排行榜">
                <div class="site-title site-subTitle">
                    <div class="site-title_left">
                        <h3>
                            <a class="j_movie_tab_header" target="_blank" href="http://www.iqiyi.com/dianying_new/i_list_paihangbang.html"
                            data-href1="http://www.iqiyi.com/dianying_new/i_list_paihangbang.html"
                            data-href2="http://www.iqiyi.com/dianying_new/i_list_paihangbang.html?type=2"
                            rseat="706082_完整榜单">
                                <span>
                                    电影排行榜
                                </span>
                                <span class="icon-more">
                                    更多&gt;
                                </span>
                            </a>
                        </h3>
                        <ul class="title-subLinks dy_phb_subtab">
                            <li class="selected j_movie_tab_title">
                                <a href="javascript:void(0);" rseat="706082_热播榜">
                                    热播榜
                                </a>
                            </li>
                            <li class="j_movie_tab_title">
                                <a href="javascript:void(0);" rseat="706082_高分榜">
                                    高分榜
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="j_movie_tab_body j_slider">
                    <div class="site-item_l site-item_l_dyphb">
                        <div class="piclist-scroll piclist-scroll-h290">
                            <div class="piclist-scroll-pic">
                                <ul class="site-piclist lists1" style="width: 4200px; margin-left: 0px;" data-widget-videolist="videolist">
                                    <li class="first_bigImg">
                                        <div data-videolist-elem="item" tvid="733646300" data-tvid="733646300"
                                        data-qipuid="733646300">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1"
                                                title="反转人生" target="_blank" rseat="706082_热播榜内容1">
                                                    <img width="100%" height="100%" title="反转人生" rseat="706082_热播榜内容1" alt="反转人生"
                                                    data-src="picture/v_112880060_m_601_m1_480_270.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            1
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容1" title="反转人生" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1">
                                                                反转人生
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        闫妮变身土地婆
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="731171100" data-tvid="731171100"
                                        data-qipuid="731171100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1"
                                                title="加勒比海盗5：死无对证" target="_blank" rseat="706082_热播榜内容2">
                                                    <img width="180" height="236" title="加勒比海盗5：死无对证" rseat="706082_热播榜内容2"
                                                    alt="加勒比海盗5：死无对证" data-src="picture/v_112855202_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            2
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容2" title="加勒比海盗5：死无对证" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1">
                                                                加勒比海盗5：死无对证
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杰克船长决战亡灵
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="723855500" data-tvid="723855500"
                                        data-qipuid="723855500">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1"
                                                title="荡寇风云" target="_blank" rseat="706082_热播榜内容3">
                                                    <img width="180" height="236" title="荡寇风云" rseat="706082_热播榜内容3" alt="荡寇风云"
                                                    data-src="picture/v_112781451_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            3
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容3" title="荡寇风云" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1">
                                                                荡寇风云
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        赵文卓洪金宝浴血抗倭
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="729158100" data-tvid="729158100"
                                        data-qipuid="729158100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1"
                                                title="夜色撩人" target="_blank" rseat="706082_热播榜内容4">
                                                    <img width="180" height="236" title="夜色撩人" rseat="706082_热播榜内容4" alt="夜色撩人"
                                                    data-src="picture/v_112834753_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            4
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容4" title="夜色撩人" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1">
                                                                夜色撩人
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        少妇深夜被劫遭捆绑
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="367710700" data-tvid="367710700"
                                        data-qipuid="367710700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrnqxz7k.html#vfrm=19-9-0-1"
                                                title="战狼" target="_blank" rseat="706082_热播榜内容5">
                                                    <img width="180" height="236" title="战狼" rseat="706082_热播榜内容5" alt="战狼"
                                                    data-src="picture/v_109159633_m_601_m9_180_236.jpg">
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            5
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容5" title="战狼" href="http://www.iqiyi.com/v_19rrnqxz7k.html#vfrm=19-9-0-1">
                                                                战狼
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        国产军事动作开山之作
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733687600" data-tvid="733687600"
                                        data-qipuid="733687600">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1"
                                                title="明月几时有" target="_blank" rseat="706082_热播榜内容6">
                                                    <img width="180" height="236" title="明月几时有" rseat="706082_热播榜内容6" alt="明月几时有"
                                                    data-src="picture/v_112880474_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            6
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容6" title="明月几时有" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1">
                                                                明月几时有
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        周迅彭于晏乱世儿女情
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="789073200" data-tvid="789073200"
                                        data-qipuid="789073200">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8q7djw.html#vfrm=19-9-0-1"
                                                title="血战铜锣湾3" target="_blank" rseat="706082_热播榜内容7">
                                                    <img width="180" height="236" title="血战铜锣湾3" rseat="706082_热播榜内容7" alt="血战铜锣湾3"
                                                    data-src="picture/v_113442902_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            7
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容7" title="血战铜锣湾3" href="http://www.iqiyi.com/v_19rr8q7djw.html#vfrm=19-9-0-1">
                                                                血战铜锣湾3
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        利哥成备胎独斗古惑仔
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="330590800" data-tvid="330590800"
                                        data-qipuid="330590800">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrn8kuv0.html#vfrm=19-9-0-1"
                                                title="猩球崛起2：黎明之战" target="_blank" rseat="706082_热播榜内容8">
                                                    <img width="180" height="236" title="猩球崛起2：黎明之战" rseat="706082_热播榜内容8"
                                                    alt="猩球崛起2：黎明之战" data-src="picture/v_108751682_m_601_m5_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            8
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容8" title="猩球崛起2：黎明之战" href="http://www.iqiyi.com/v_19rrn8kuv0.html#vfrm=19-9-0-1">
                                                                猩球崛起2：黎明之战
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        蛮荒与文明的终极对抗
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="688997000" data-tvid="688997000"
                                        data-qipuid="688997000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr71ao6c.html#vfrm=19-9-0-1"
                                                title="嫌疑人X的献身" target="_blank" rseat="706082_热播榜内容9">
                                                    <img width="180" height="236" title="嫌疑人X的献身" rseat="706082_热播榜内容9" alt="嫌疑人X的献身"
                                                    data-src="picture/v_112428373_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            9
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容9" title="嫌疑人X的献身" href="http://www.iqiyi.com/v_19rr71ao6c.html#vfrm=19-9-0-1">
                                                                嫌疑人X的献身
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        王凯开解致命密局
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="589249000" data-tvid="589249000"
                                        data-qipuid="589249000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1"
                                                title="情圣" target="_blank" rseat="706082_热播榜内容10">
                                                    <img width="180" height="236" title="情圣" rseat="706082_热播榜内容10" alt="情圣"
                                                    data-src="picture/v_111512472_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            10
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容10" title="情圣" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1">
                                                                情圣
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        小沈阳领衔“贱男团”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="732669800" data-tvid="732669800"
                                        data-qipuid="732669800">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7q22o4.html#vfrm=19-9-0-1"
                                                title="三生三世十里桃花" target="_blank" rseat="706082_热播榜内容11">
                                                    <img width="180" height="236" title="三生三世十里桃花" rseat="706082_热播榜内容11"
                                                    alt="三生三世十里桃花" data-src="picture/v_112870244_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            11
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容11" title="三生三世十里桃花" href="http://www.iqiyi.com/v_19rr7q22o4.html#vfrm=19-9-0-1">
                                                                三生三世十里桃花
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杨洋刘亦菲旷世绝恋
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733242900" data-tvid="733242900"
                                        data-qipuid="733242900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1"
                                                title="父子雄兵" target="_blank" rseat="706082_热播榜内容12">
                                                    <img width="180" height="236" title="父子雄兵" rseat="706082_热播榜内容12" alt="父子雄兵"
                                                    data-src="picture/v_112875992_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            12
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容12" title="父子雄兵" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1">
                                                                父子雄兵
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        大鹏范伟血战黑帮
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733622700" data-tvid="733622700"
                                        data-qipuid="733622700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pgfcw.html#vfrm=19-9-0-1"
                                                title="鲛珠传" target="_blank" rseat="706082_热播榜内容13">
                                                    <img width="180" height="236" title="鲛珠传" rseat="706082_热播榜内容13" alt="鲛珠传"
                                                    data-src="picture/v_112879819_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            13
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容13" title="鲛珠传" href="http://www.iqiyi.com/v_19rr7pgfcw.html#vfrm=19-9-0-1">
                                                                鲛珠传
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        王大陆张天爱决战九州
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="105541000" data-tvid="105541000"
                                        data-qipuid="105541000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrifktby.html#vfrm=19-9-0-1"
                                                title="猩球崛起" target="_blank" rseat="706082_热播榜内容14">
                                                    <img width="180" height="236" title="猩球崛起" rseat="706082_热播榜内容14" alt="猩球崛起"
                                                    data-src="picture/v_50155410_m_601_m4_180_236.jpg">
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            14
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容14" title="猩球崛起" href="http://www.iqiyi.com/v_19rrifktby.html#vfrm=19-9-0-1">
                                                                猩球崛起
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        科幻经典人猿星球前传
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733048400" data-tvid="733048400"
                                        data-qipuid="733048400">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p0jss.html#vfrm=19-9-0-1"
                                                title="悟空传" target="_blank" rseat="706082_热播榜内容15">
                                                    <img width="180" height="236" title="悟空传" rseat="706082_热播榜内容15" alt="悟空传"
                                                    data-src="picture/v_112874056_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            15
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容15" title="悟空传" href="http://www.iqiyi.com/v_19rr7p0jss.html#vfrm=19-9-0-1">
                                                                悟空传
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        彭于晏变魔猴劈天地
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="706736700" data-tvid="706736700"
                                        data-qipuid="706736700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7vtqa8.html#vfrm=19-9-0-1"
                                                title="下半城风云" target="_blank" rseat="706082_热播榜内容16">
                                                    <img width="180" height="236" title="下半城风云" rseat="706082_热播榜内容16" alt="下半城风云"
                                                    data-src="picture/v_112609682_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            16
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容16" title="下半城风云" href="http://www.iqiyi.com/v_19rr7vtqa8.html#vfrm=19-9-0-1">
                                                                下半城风云
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        咏春少年屠戮黑帮
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="589261200" data-tvid="589261200"
                                        data-qipuid="589261200">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tq5fg.html#vfrm=19-9-0-1"
                                                title="西游伏妖篇" target="_blank" rseat="706082_热播榜内容17">
                                                    <img width="180" height="236" title="西游伏妖篇" rseat="706082_热播榜内容17" alt="西游伏妖篇"
                                                    data-src="picture/v_111512587_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            17
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容17" title="西游伏妖篇" href="http://www.iqiyi.com/v_19rr9tq5fg.html#vfrm=19-9-0-1">
                                                                西游伏妖篇
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        周星驰徐克强势联手
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="589243300" data-tvid="589243300"
                                        data-qipuid="589243300">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tqg20.html#vfrm=19-9-0-1"
                                                title="铁道飞虎" target="_blank" rseat="706082_热播榜内容18">
                                                    <img width="180" height="236" title="铁道飞虎" rseat="706082_热播榜内容18" alt="铁道飞虎"
                                                    data-src="picture/v_111512405_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            18
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容18" title="铁道飞虎" href="http://www.iqiyi.com/v_19rr9tqg20.html#vfrm=19-9-0-1">
                                                                铁道飞虎
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        成龙带你干票大的！
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="732987800" data-tvid="732987800"
                                        data-qipuid="732987800">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1"
                                                title="绣春刀II：修罗战场" target="_blank" rseat="706082_热播榜内容19">
                                                    <img width="180" height="236" title="绣春刀II：修罗战场" rseat="706082_热播榜内容19"
                                                    alt="绣春刀II：修罗战场" data-src="picture/v_112873444_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            19
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容19" title="绣春刀II：修罗战场" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1">
                                                                绣春刀II：修罗战场
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杨幂张震乱世虐恋
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733927200" data-tvid="733927200"
                                        data-qipuid="733927200">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1"
                                                title="深夜食堂2" target="_blank" rseat="706082_热播榜内容20">
                                                    <img width="180" height="236" title="深夜食堂2" rseat="706082_热播榜内容20" alt="深夜食堂2"
                                                    data-src="picture/v_112882869_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            20
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_热播榜内容20" title="深夜食堂2" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1">
                                                                深夜食堂2
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        “妈宝男”情迷熟女
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="j_movie_tab_body j_slider" style='display:none;'>
                    <div class="site-item_l site-item_l_dyphb">
                        <div class="piclist-scroll piclist-scroll-h290">
                            <div class="piclist_btnLeft">
                                <a href="javascript:void(0);" class="disabled" rseat="706082_榜单left">
                                </a>
                            </div>
                            <div class="piclist_btnRight">
                                <a href="javascript:void(0);" rseat="706082_榜单right">
                                </a>
                            </div>
                            <div class="piclist-scroll-pic">
                                <ul class="site-piclist" style="width: 4200px; margin-left: 0px;" data-widget-videolist="videolist">
                                    <li class="first_bigImg">
                                        <div data-videolist-elem="item" tvid="733927200" data-tvid="733927200"
                                        data-qipuid="733927200">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1"
                                                title="深夜食堂2" target="_blank" rseat="706082_高分榜内容1">
                                                    <img width="100%" height="100%" title="深夜食堂2" rseat="706082_高分榜内容1" alt="深夜食堂2"
                                                    data-src="picture/v_112882869_m_601_m1_480_270.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            1
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容1" title="深夜食堂2" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1">
                                                                深夜食堂2
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        “妈宝男”情迷熟女
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="230296900" data-tvid="230296900"
                                        data-qipuid="230296900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrh52q7c.html#vfrm=19-9-0-1"
                                                title="精灵旅社" target="_blank" rseat="706082_高分榜内容2">
                                                    <img width="180" height="236" title="精灵旅社" rseat="706082_高分榜内容2" alt="精灵旅社"
                                                    data-src="picture/v_105254812_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            2
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容2" title="精灵旅社" href="http://www.iqiyi.com/v_19rrh52q7c.html#vfrm=19-9-0-1">
                                                                精灵旅社
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        史上最萌怪物大联欢
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="731171100" data-tvid="731171100"
                                        data-qipuid="731171100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1"
                                                title="加勒比海盗5：死无对证" target="_blank" rseat="706082_高分榜内容3">
                                                    <img width="180" height="236" title="加勒比海盗5：死无对证" rseat="706082_高分榜内容3"
                                                    alt="加勒比海盗5：死无对证" data-src="picture/v_112855202_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub dypd_piclist_nubHot">
                                                            3
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容3" title="加勒比海盗5：死无对证" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1">
                                                                加勒比海盗5：死无对证
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杰克船长决战亡灵
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="281750800" data-tvid="281750800"
                                        data-qipuid="281750800">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrmy65bw.html#vfrm=19-9-0-1"
                                                title="独自等待" target="_blank" rseat="706082_高分榜内容4">
                                                    <img width="180" height="236" title="独自等待" rseat="706082_高分榜内容4" alt="独自等待"
                                                    data-src="picture/v_62817508_m_601_m2_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            4
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容4" title="独自等待" href="http://www.iqiyi.com/v_19rrmy65bw.html#vfrm=19-9-0-1">
                                                                独自等待
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        夏雨冰冰爱情基本法则
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="591365100" data-tvid="591365100"
                                        data-qipuid="591365100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9sidfk.html#vfrm=19-9-0-1"
                                                title="异形：契约" target="_blank" rseat="706082_高分榜内容5">
                                                    <img width="180" height="236" title="异形：契约" rseat="706082_高分榜内容5" alt="异形：契约"
                                                    data-src="picture/v_111534689_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            5
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容5" title="异形：契约" href="http://www.iqiyi.com/v_19rr9sidfk.html#vfrm=19-9-0-1">
                                                                异形：契约
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        抱脸虫嗜血狂杀
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="780046100" data-tvid="780046100"
                                        data-qipuid="780046100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8w34ag.html#vfrm=19-9-0-1"
                                                title="加勒比海盗5：死无对证（国语）" target="_blank" rseat="706082_高分榜内容6">
                                                    <img width="180" height="236" title="加勒比海盗5：死无对证（国语）" rseat="706082_高分榜内容6"
                                                    alt="加勒比海盗5：死无对证（国语）" data-src="picture/v_113351604_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            6
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容6" title="加勒比海盗5：死无对证（国语）" href="http://www.iqiyi.com/v_19rr8w34ag.html#vfrm=19-9-0-1">
                                                                加勒比海盗5：死无对证（国语）
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        亡灵军团暴虐复仇
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="729260700" data-tvid="729260700"
                                        data-qipuid="729260700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7hsbg0.html#vfrm=19-9-0-1"
                                                title="一念无明" target="_blank" rseat="706082_高分榜内容7">
                                                    <img width="180" height="236" title="一念无明" rseat="706082_高分榜内容7" alt="一念无明"
                                                    data-src="picture/v_112835756_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            7
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容7" title="一念无明" href="http://www.iqiyi.com/v_19rr7hsbg0.html#vfrm=19-9-0-1">
                                                                一念无明
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        曾志伟余文乐父子情深
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="743434100" data-tvid="743434100"
                                        data-qipuid="743434100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8dxdlk.html#vfrm=19-9-0-1"
                                                title="我是谁的宝贝" target="_blank" rseat="706082_高分榜内容8">
                                                    <img width="180" height="236" title="我是谁的宝贝" rseat="706082_高分榜内容8" alt="我是谁的宝贝"
                                                    data-src="picture/v_112979147_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            8
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容8" title="我是谁的宝贝" href="http://www.iqiyi.com/v_19rr8dxdlk.html#vfrm=19-9-0-1">
                                                                我是谁的宝贝
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        自闭症少女暖心寻狗
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="264484700" data-tvid="264484700"
                                        data-qipuid="264484700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrho3cxc.html#vfrm=19-9-0-1"
                                                title="新警察故事" target="_blank" rseat="706082_高分榜内容9">
                                                    <img width="180" height="236" title="新警察故事" rseat="706082_高分榜内容9" alt="新警察故事"
                                                    data-src="picture/v_62644847_m_601_m2_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            9
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容9" title="新警察故事" href="http://www.iqiyi.com/v_19rrho3cxc.html#vfrm=19-9-0-1">
                                                                新警察故事
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        成龙被吴彦祖戏耍
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733687600" data-tvid="733687600"
                                        data-qipuid="733687600">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1"
                                                title="明月几时有" target="_blank" rseat="706082_高分榜内容10">
                                                    <img width="180" height="236" title="明月几时有" rseat="706082_高分榜内容10" alt="明月几时有"
                                                    data-src="picture/v_112880474_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            10
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容10" title="明月几时有" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1">
                                                                明月几时有
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        周迅彭于晏乱世儿女情
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="732987800" data-tvid="732987800"
                                        data-qipuid="732987800">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1"
                                                title="绣春刀II：修罗战场" target="_blank" rseat="706082_高分榜内容11">
                                                    <img width="180" height="236" title="绣春刀II：修罗战场" rseat="706082_高分榜内容11"
                                                    alt="绣春刀II：修罗战场" data-src="picture/v_112873444_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            11
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容11" title="绣春刀II：修罗战场" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1">
                                                                绣春刀II：修罗战场
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杨幂张震乱世虐恋
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="767343400" data-tvid="767343400"
                                        data-qipuid="767343400">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr89j5ms.html#vfrm=19-9-0-1"
                                                title="与君相恋100次（国语）" target="_blank" rseat="706082_高分榜内容12">
                                                    <img width="180" height="236" title="与君相恋100次（国语）" rseat="706082_高分榜内容12"
                                                    alt="与君相恋100次（国语）" data-src="picture/v_113222764_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            12
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容12" title="与君相恋100次（国语）" href="http://www.iqiyi.com/v_19rr89j5ms.html#vfrm=19-9-0-1">
                                                                与君相恋100次（国语）
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        逆转时光只为爱上你
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="765247000" data-tvid="765247000"
                                        data-qipuid="765247000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8as390.html#vfrm=19-9-0-1"
                                                title="我是马布里" target="_blank" rseat="706082_高分榜内容13">
                                                    <img width="180" height="236" title="我是马布里" rseat="706082_高分榜内容13" alt="我是马布里"
                                                    data-src="picture/v_113201002_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            13
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .9
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容13" title="我是马布里" href="http://www.iqiyi.com/v_19rr8as390.html#vfrm=19-9-0-1">
                                                                我是马布里
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        艾佛森马布里热血对决
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733646300" data-tvid="733646300"
                                        data-qipuid="733646300">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1"
                                                title="反转人生" target="_blank" rseat="706082_高分榜内容14">
                                                    <img width="180" height="236" title="反转人生" rseat="706082_高分榜内容14" alt="反转人生"
                                                    data-src="picture/v_112880060_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            14
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容14" title="反转人生" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1">
                                                                反转人生
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        闫妮变身土地婆
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="723855500" data-tvid="723855500"
                                        data-qipuid="723855500">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1"
                                                title="荡寇风云" target="_blank" rseat="706082_高分榜内容15">
                                                    <img width="180" height="236" title="荡寇风云" rseat="706082_高分榜内容15" alt="荡寇风云"
                                                    data-src="picture/v_112781451_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            15
                                                        </span>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容15" title="荡寇风云" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1">
                                                                荡寇风云
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        赵文卓洪金宝浴血抗倭
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="589249000" data-tvid="589249000"
                                        data-qipuid="589249000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1"
                                                title="情圣" target="_blank" rseat="706082_高分榜内容16">
                                                    <img width="180" height="236" title="情圣" rseat="706082_高分榜内容16" alt="情圣"
                                                    data-src="picture/v_111512472_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            16
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容16" title="情圣" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1">
                                                                情圣
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        小沈阳领衔“贱男团”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="779067600" data-tvid="779067600"
                                        data-qipuid="779067600">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8wo0cc.html#vfrm=19-9-0-1"
                                                title="阿唐奇遇" target="_blank" rseat="706082_高分榜内容17">
                                                    <img width="180" height="236" title="阿唐奇遇" rseat="706082_高分榜内容17" alt="阿唐奇遇"
                                                    data-src="picture/v_113341787_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            17
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容17" title="阿唐奇遇" href="http://www.iqiyi.com/v_19rr8wo0cc.html#vfrm=19-9-0-1">
                                                                阿唐奇遇
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        中华小茶宠勇闯奇境
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="753258700" data-tvid="753258700"
                                        data-qipuid="753258700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8haheo.html#vfrm=19-9-0-1"
                                                title="桃花梦" target="_blank" rseat="706082_高分榜内容18">
                                                    <img width="180" height="236" title="桃花梦" rseat="706082_高分榜内容18" alt="桃花梦"
                                                    data-src="picture/v_113079417_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            18
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .7
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容18" title="桃花梦" href="http://www.iqiyi.com/v_19rr8haheo.html#vfrm=19-9-0-1">
                                                                桃花梦
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        佤族美女舞动青春
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733981400" data-tvid="733981400"
                                        data-qipuid="733981400">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7plak4.html#vfrm=19-9-0-1"
                                                title="与君相恋100次" target="_blank" rseat="706082_高分榜内容19">
                                                    <img width="180" height="236" title="与君相恋100次" rseat="706082_高分榜内容19"
                                                    alt="与君相恋100次" data-src="picture/v_112883410_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            19
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .7
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容19" title="与君相恋100次" href="http://www.iqiyi.com/v_19rr7plak4.html#vfrm=19-9-0-1">
                                                                与君相恋100次
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        日式纯爱甜炸少女心
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="90433700" data-tvid="4337" data-qipuid="90433700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrj5rtmw.html#vfrm=19-9-0-1"
                                                title="锦衣卫" target="_blank" rseat="706082_高分榜内容20">
                                                    <img width="180" height="236" title="锦衣卫" rseat="706082_高分榜内容20" alt="锦衣卫"
                                                    data-src="picture/v_50004337_m_601_m2_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <span class="dypd_piclist_nub">
                                                            20
                                                        </span>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .6
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_高分榜内容20" title="锦衣卫" href="http://www.iqiyi.com/v_19rrj5rtmw.html#vfrm=19-9-0-1">
                                                                锦衣卫
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        甄子丹赵薇再度谈情
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-videolist-elem="tip" style="display: none;" class="video-info-tip">
                </div>
            </div>
            <div class="wrapper-cols pr j_pingback_view j_slider" data-widget-fullcol="fullcol"
            data-pingback-name="706082_最新上线">
                <div class="site-title site-subTitle">
                    <div class="site-title_left">
                        <h3>
                            <a href="http://www.iqiyi.com/dianying_new/i_list_zuixinshangxian.html"
                            target="_blank" rseat="706082_最新上线本周上架">
                                <span>
                                    最新上线
                                </span>
                                <span class="icon-more">
                                    本周上架15部&gt;
                                </span>
                            </a>
                        </h3>
                        <ul class="title-subLinks secondPage_title">
                            <li class="firstItem">
                                <a href="http://www.iqiyi.com/v_19rrjyphgs.html?list=19rrlckjum" target="_blank"
                                rseat="706082_最新上线热词1">
                                    系列电影引爆最强视效
                                </a>
                            </li>
                            <li>
                                <a href="http://www.iqiyi.com/v_19rr7p7j3s.html?list=19rrlcqnsm" target="_blank"
                                rseat="706082_最新上线热词2">
                                    2017过亿票房大片爽翻天
                                </a>
                            </li>
                            <li>
                                <a href="http://www.iqiyi.com/v_19rr7hsbg0.html?list=19rrlcufk2" target="_blank"
                                rseat="706082_最新上线热词3">
                                    香港新生代导演力作
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="site-item_l">
                    <div class="piclist-scroll piclist-scroll-h290">
                        <div class="piclist-scroll-pic">
                            <div class="wrapper-piclist">
                                <ul class="site-piclist j_slider_list" style="width: 4200px; margin-left: 0px;"
                                data-widget-videolist="videolist">
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="729867900" data-tvid="729867900"
                                        data-qipuid="729867900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7qy1ao.html#vfrm=19-9-0-1"
                                                title="S的秘密" target="_blank" rseat="706082_最新上线内容1">
                                                    <img width="180" height="236" title="S的秘密" rseat="706082_最新上线内容1" alt="S的秘密"
                                                    data-src="picture/v_112841966_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            5
                                                        </strong>
                                                        .7
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容1" title="S的秘密" href="http://www.iqiyi.com/v_19rr7qy1ao.html#vfrm=19-9-0-1">
                                                                S的秘密
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        吴启华X御姐灵魂互换
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733821700" data-tvid="733821700"
                                        data-qipuid="733821700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7phv1k.html#vfrm=19-9-0-1"
                                                title="恐怖毕业照2" target="_blank" rseat="706082_最新上线内容2">
                                                    <img width="180" height="236" title="恐怖毕业照2" rseat="706082_最新上线内容2" alt="恐怖毕业照2"
                                                    data-src="picture/v_112881814_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .1
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容2" title="恐怖毕业照2" href="http://www.iqiyi.com/v_19rr7phv1k.html#vfrm=19-9-0-1">
                                                                恐怖毕业照2
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        校园屠杀揭露人性之恶
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="729158100" data-tvid="729158100"
                                        data-qipuid="729158100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1"
                                                title="夜色撩人" target="_blank" rseat="706082_最新上线内容3">
                                                    <img width="180" height="236" title="夜色撩人" rseat="706082_最新上线内容3" alt="夜色撩人"
                                                    data-src="picture/v_112834753_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容3" title="夜色撩人" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1">
                                                                夜色撩人
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        少妇深夜被劫遭捆绑
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="232613407" data-tvid="232613407"
                                        data-qipuid="232613407">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrh3ulwz.html#vfrm=19-9-0-1"
                                                title="玩偶奇兵" target="_blank" rseat="706082_最新上线内容4">
                                                    <img width="180" height="236" title="玩偶奇兵" rseat="706082_最新上线内容4" alt="玩偶奇兵"
                                                    data-src="picture/v_232613407_l_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            6
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容4" title="玩偶奇兵" href="http://www.iqiyi.com/v_19rrh3ulwz.html#vfrm=19-9-0-1">
                                                                玩偶奇兵
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        呆萌玩偶冒险数码世界
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="sideAdPo">
                                            <div class="sideAdWrap" id="1000000000120" style="display: none;">
                                            </div>
                                        </div>
                                        <div data-videolist-elem="item" tvid="733646300" data-tvid="733646300"
                                        data-qipuid="733646300">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1"
                                                title="反转人生" target="_blank" rseat="706082_最新上线内容5">
                                                    <img width="180" height="236" title="反转人生" rseat="706082_最新上线内容5" alt="反转人生"
                                                    data-src="picture/v_112880060_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容5" title="反转人生" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1">
                                                                反转人生
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        闫妮变身土地婆
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733927200" data-tvid="733927200"
                                        data-qipuid="733927200">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1"
                                                title="深夜食堂2" target="_blank" rseat="706082_最新上线内容6">
                                                    <img width="180" height="236" title="深夜食堂2" rseat="706082_最新上线内容6" alt="深夜食堂2"
                                                    data-src="picture/v_112882869_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容6" title="深夜食堂2" href="http://www.iqiyi.com/v_19rr7pmjbg.html#vfrm=19-9-0-1">
                                                                深夜食堂2
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        “妈宝男”情迷熟女
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733687600" data-tvid="733687600"
                                        data-qipuid="733687600">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1"
                                                title="明月几时有" target="_blank" rseat="706082_最新上线内容7">
                                                    <img width="180" height="236" title="明月几时有" rseat="706082_最新上线内容7" alt="明月几时有"
                                                    data-src="picture/v_112880474_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容7" title="明月几时有" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1">
                                                                明月几时有
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        周迅彭于晏乱世儿女情
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="230296900" data-tvid="230296900"
                                        data-qipuid="230296900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrh52q7c.html#vfrm=19-9-0-1"
                                                title="精灵旅社" target="_blank" rseat="706082_最新上线内容8">
                                                    <img width="180" height="236" title="精灵旅社" rseat="706082_最新上线内容8" alt="精灵旅社"
                                                    data-src="picture/v_105254812_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vod-coupon">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容8" title="精灵旅社" href="http://www.iqiyi.com/v_19rrh52q7c.html#vfrm=19-9-0-1">
                                                                精灵旅社
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        史上最萌怪物大联欢
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="731171100" data-tvid="731171100"
                                        data-qipuid="731171100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1"
                                                title="加勒比海盗5：死无对证" target="_blank" rseat="706082_最新上线内容9">
                                                    <img width="180" height="236" title="加勒比海盗5：死无对证" rseat="706082_最新上线内容9"
                                                    alt="加勒比海盗5：死无对证" data-src="picture/v_112855202_m_601_m3_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vod-coupon">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容9" title="加勒比海盗5：死无对证" href="http://www.iqiyi.com/v_19rr7qhfg0.html#vfrm=19-9-0-1">
                                                                加勒比海盗5：死无对证
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        杰克船长决战亡灵
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="780046100" data-tvid="780046100"
                                        data-qipuid="780046100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8w34ag.html#vfrm=19-9-0-1"
                                                title="加勒比海盗5：死无对证（国语）" target="_blank" rseat="706082_最新上线内容10">
                                                    <img width="180" height="236" title="加勒比海盗5：死无对证（国语）" rseat="706082_最新上线内容10"
                                                    alt="加勒比海盗5：死无对证（国语）" data-src="picture/v_113351604_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vod-coupon">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容10" title="加勒比海盗5：死无对证（国语）" href="http://www.iqiyi.com/v_19rr8w34ag.html#vfrm=19-9-0-1">
                                                                加勒比海盗5：死无对证（国语）
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        亡灵军团暴虐复仇
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733889900" data-tvid="733889900"
                                        data-qipuid="733889900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7plr7k.html#vfrm=19-9-0-1"
                                                title="麻辣学院" target="_blank" rseat="706082_最新上线内容11">
                                                    <img width="180" height="236" title="麻辣学院" rseat="706082_最新上线内容11" alt="麻辣学院"
                                                    data-src="picture/v_112882495_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .1
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容11" title="麻辣学院" href="http://www.iqiyi.com/v_19rr7plr7k.html#vfrm=19-9-0-1">
                                                                麻辣学院
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        “樊胜美”变美女教师
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="780149900" data-tvid="780149900"
                                        data-qipuid="780149900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr94vo4g.html#vfrm=19-9-0-1"
                                                title="石之痛" target="_blank" rseat="706082_最新上线内容12">
                                                    <img width="180" height="236" title="石之痛" rseat="706082_最新上线内容12" alt="石之痛"
                                                    data-src="picture/v_113352732_m_601_m2_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容12" title="石之痛" href="http://www.iqiyi.com/v_19rr94vo4g.html#vfrm=19-9-0-1">
                                                                石之痛
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        戛纳金棕榈入围佳作
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="784873400" data-tvid="784873400"
                                        data-qipuid="784873400">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr92p2vo.html#vfrm=19-9-0-1"
                                                title="舞女" target="_blank" rseat="706082_最新上线内容13">
                                                    <img width="180" height="236" title="舞女" rseat="706082_最新上线内容13" alt="舞女"
                                                    data-src="picture/v_113400480_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .0
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容13" title="舞女" href="http://www.iqiyi.com/v_19rr92p2vo.html#vfrm=19-9-0-1">
                                                                舞女
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        舞蹈艺术家的传奇人生
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="765247000" data-tvid="765247000"
                                        data-qipuid="765247000">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8as390.html#vfrm=19-9-0-1"
                                                title="我是马布里" target="_blank" rseat="706082_最新上线内容14">
                                                    <img width="180" height="236" title="我是马布里" rseat="706082_最新上线内容14" alt="我是马布里"
                                                    data-src="picture/v_113201002_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .9
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容14" title="我是马布里" href="http://www.iqiyi.com/v_19rr8as390.html#vfrm=19-9-0-1">
                                                                我是马布里
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        艾佛森马布里热血对决
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="743434100" data-tvid="743434100"
                                        data-qipuid="743434100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8dxdlk.html#vfrm=19-9-0-1"
                                                title="我是谁的宝贝" target="_blank" rseat="706082_最新上线内容15">
                                                    <img width="180" height="236" title="我是谁的宝贝" rseat="706082_最新上线内容15" alt="我是谁的宝贝"
                                                    data-src="picture/v_112979147_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容15" title="我是谁的宝贝" href="http://www.iqiyi.com/v_19rr8dxdlk.html#vfrm=19-9-0-1">
                                                                我是谁的宝贝
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        自闭症少女暖心寻狗
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="264484700" data-tvid="264484700"
                                        data-qipuid="264484700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrho3cxc.html#vfrm=19-9-0-1"
                                                title="新警察故事" target="_blank" rseat="706082_最新上线内容16">
                                                    <img width="180" height="236" title="新警察故事" rseat="706082_最新上线内容16" alt="新警察故事"
                                                    data-src="picture/v_62644847_m_601_m2_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .2
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容16" title="新警察故事" href="http://www.iqiyi.com/v_19rrho3cxc.html#vfrm=19-9-0-1">
                                                                新警察故事
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        成龙被吴彦祖戏耍
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="723855500" data-tvid="723855500"
                                        data-qipuid="723855500">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1"
                                                title="荡寇风云" target="_blank" rseat="706082_最新上线内容17">
                                                    <img width="180" height="236" title="荡寇风云" rseat="706082_最新上线内容17" alt="荡寇风云"
                                                    data-src="picture/v_112781451_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .8
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容17" title="荡寇风云" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1">
                                                                荡寇风云
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        赵文卓洪金宝浴血抗倭
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733942100" data-tvid="733942100"
                                        data-qipuid="733942100">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pkta0.html#vfrm=19-9-0-1"
                                                title="谁知道" target="_blank" rseat="706082_最新上线内容18">
                                                    <img width="180" height="236" title="谁知道" rseat="706082_最新上线内容18" alt="谁知道"
                                                    data-src="picture/v_112883021_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .4
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容18" title="谁知道" href="http://www.iqiyi.com/v_19rr7pkta0.html#vfrm=19-9-0-1">
                                                                谁知道
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        楼道滴血迸发灵异事件
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="729260700" data-tvid="729260700"
                                        data-qipuid="729260700">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7hsbg0.html#vfrm=19-9-0-1"
                                                title="一念无明" target="_blank" rseat="706082_最新上线内容19">
                                                    <img width="180" height="236" title="一念无明" rseat="706082_最新上线内容19" alt="一念无明"
                                                    data-src="picture/v_112835756_m_601_m1_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons">
                                                        <i class="site-icons icon-viedo-exc">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            8
                                                        </strong>
                                                        .3
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容19" title="一念无明" href="http://www.iqiyi.com/v_19rr7hsbg0.html#vfrm=19-9-0-1">
                                                                一念无明
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        曾志伟余文乐父子情深
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div data-videolist-elem="item" tvid="733242900" data-tvid="733242900"
                                        data-qipuid="733242900">
                                            <div class="site-piclist_pic">
                                                <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1"
                                                title="父子雄兵" target="_blank" rseat="706082_最新上线内容20">
                                                    <img width="180" height="236" title="父子雄兵" rseat="706082_最新上线内容20" alt="父子雄兵"
                                                    data-src="picture/v_112875992_m_601_180_236.jpg">
                                                    <p class="site-piclist_icons-lb">
                                                        <i class="mark-1080p">
                                                        </i>
                                                    </p>
                                                    <p class="site-piclist_icons-lt">
                                                        <i class="site-icons-mark icon-viedo-vip-zx">
                                                        </i>
                                                    </p>
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <div class="site-title_score">
                                                    <span class="score">
                                                        <strong class="num">
                                                            7
                                                        </strong>
                                                        .5
                                                    </span>
                                                    <div class="title">
                                                        <p class="site-piclist_info_title">
                                                            <a target="_blank" rseat="706082_最新上线内容20" title="父子雄兵" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1">
                                                                父子雄兵
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <p class="site-piclist_info_describe">
                                                        大鹏范伟血战黑帮
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-videolist-elem="tip" style="display: none;" class="video-info-tip">
                </div>
            </div>
        </div>
        <div class="site-main">
            <div class="wrapper-cols mt-20 pr j_pingback_view" data-pingback-name="706082_华语"
            data-async="true" data-name="华语最好看" data-key="ChineseMovie" data-widget-fullcol="fullcol"
            data-lazy-loading-id="sliderID5" data-component-id="movieAjaxComponent4"
            data-slider-id="sliderID6">
                <div class="site-title site-subTitle">
                    <div class="site-title_left">
                        <h3>
                            <a target="_blank" rseat="706082_华语more" href="http://www.iqiyi.com/dianying_new/i_list_huayu.html">
                                <span>
                                    华语最好看
                                </span>
                                <span class="icon-more">
                                    更多&gt;
                                </span>
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="site-item_l">
                    <div class="piclist-scroll piclist-scroll-h290">
                        <div class="piclist-scroll-pic">
                            <div class="wrapper-piclist">
                                <ul class="site-piclist" style="width: 4200px; margin-left: 0px;" data-widget-videolist="videolist">
                                    <li data-tvid="733646300" data-qipuid="733646300" data-videolist-elem="item"
                                    tvid="733646300" data-left="0" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1"
                                            title="反转人生" target="_blank" rseat="706082_华语1">
                                                <img title="反转人生" rseat="706082_华语1" alt="反转人生" data-lazy-id="lazyImageID93"
                                                src="http://pic9.qiyipic.com/image/20170914/be/7a/v_112880060_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语1" title="反转人生" href="http://www.iqiyi.com/v_19rr7ph8kw.html#vfrm=19-9-0-1">
                                                            反转人生
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    闫妮变身土地婆
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="723855500" data-qipuid="723855500" data-videolist-elem="item"
                                    tvid="723855500" data-left="200" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1"
                                            title="荡寇风云" target="_blank" rseat="706082_华语2">
                                                <img title="荡寇风云" rseat="706082_华语2" alt="荡寇风云" data-lazy-id="lazyImageID94"
                                                src="http://pic1.qiyipic.com/image/20170911/f5/41/v_112781451_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语2" title="荡寇风云" href="http://www.iqiyi.com/v_19rr7kt8f4.html#vfrm=19-9-0-1">
                                                            荡寇风云
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    赵文卓洪金宝浴血抗倭
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="729158100" data-qipuid="729158100" data-videolist-elem="item"
                                    tvid="729158100" data-left="400" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1"
                                            title="夜色撩人" target="_blank" rseat="706082_华语3">
                                                <img title="夜色撩人" rseat="706082_华语3" alt="夜色撩人" data-lazy-id="lazyImageID95"
                                                src="http://pic7.qiyipic.com/image/20170919/db/19/v_112834753_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语3" title="夜色撩人" href="http://www.iqiyi.com/v_19rr7htad4.html#vfrm=19-9-0-1">
                                                            夜色撩人
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    少妇深夜被劫遭捆绑
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="367710700" data-qipuid="367710700" data-videolist-elem="item"
                                    tvid="367710700" data-left="600" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrnqxz7k.html#vfrm=19-9-0-1"
                                            title="战狼" target="_blank" rseat="706082_华语4">
                                                <img title="战狼" rseat="706082_华语4" alt="战狼" data-lazy-id="lazyImageID96"
                                                src="http://pic2.qiyipic.com/image/20170628/db/56/v_109159633_m_601_m9_180_236.jpg"
                                                width="180" height="236">
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语4" title="战狼" href="http://www.iqiyi.com/v_19rrnqxz7k.html#vfrm=19-9-0-1">
                                                            战狼
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    国产军事动作开山之作
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="733687600" data-qipuid="733687600" data-videolist-elem="item"
                                    tvid="733687600" data-left="800" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1"
                                            title="明月几时有" target="_blank" rseat="706082_华语5">
                                                <img title="明月几时有" rseat="706082_华语5" alt="明月几时有" data-lazy-id="lazyImageID97"
                                                src="http://pic4.qiyipic.com/image/20170915/7a/63/v_112880474_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语5" title="明月几时有" href="http://www.iqiyi.com/v_19rr7pexy4.html#vfrm=19-9-0-1">
                                                            明月几时有
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    周迅彭于晏乱世儿女情
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="789073200" data-qipuid="789073200" data-videolist-elem="item"
                                    tvid="789073200" data-left="1000" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr8q7djw.html#vfrm=19-9-0-1"
                                            title="血战铜锣湾3" target="_blank" rseat="706082_华语6">
                                                <img title="血战铜锣湾3" rseat="706082_华语6" alt="血战铜锣湾3" data-lazy-id="lazyImageID98"
                                                src="http://pic9.qiyipic.com/image/20170915/29/75/v_113442902_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语6" title="血战铜锣湾3" href="http://www.iqiyi.com/v_19rr8q7djw.html#vfrm=19-9-0-1">
                                                            血战铜锣湾3
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    利哥成备胎独斗古惑仔
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="688997000" data-qipuid="688997000" data-videolist-elem="item"
                                    tvid="688997000" data-left="1200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr71ao6c.html#vfrm=19-9-0-1"
                                            title="嫌疑人X的献身" target="_blank" rseat="706082_华语7">
                                                <img title="嫌疑人X的献身" rseat="706082_华语7" alt="嫌疑人X的献身" data-lazy-id="lazyImageID99"
                                                src="http://pic4.qiyipic.com/image/20170616/1a/2b/v_112428373_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语7" title="嫌疑人X的献身" href="http://www.iqiyi.com/v_19rr71ao6c.html#vfrm=19-9-0-1">
                                                            嫌疑人X的献身
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    王凯开解致命密局
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="589249000" data-qipuid="589249000" data-videolist-elem="item"
                                    tvid="589249000" data-left="1400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1"
                                            title="情圣" target="_blank" rseat="706082_华语8">
                                                <img title="情圣" rseat="706082_华语8" alt="情圣" data-lazy-id="lazyImageID100"
                                                src="http://pic5.qiyipic.com/image/20170302/50/37/v_111512472_m_601_m3_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语8" title="情圣" href="http://www.iqiyi.com/v_19rr9tql50.html#vfrm=19-9-0-1">
                                                            情圣
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    小沈阳领衔“贱男团”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="732669800" data-qipuid="732669800" data-videolist-elem="item"
                                    tvid="732669800" data-left="1600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7q22o4.html#vfrm=19-9-0-1"
                                            title="三生三世十里桃花" target="_blank" rseat="706082_华语9">
                                                <img title="三生三世十里桃花" rseat="706082_华语9" alt="三生三世十里桃花" data-lazy-id="lazyImageID101"
                                                src="http://pic4.qiyipic.com/image/20170901/bb/b8/v_112870244_m_601_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语9" title="三生三世十里桃花" href="http://www.iqiyi.com/v_19rr7q22o4.html#vfrm=19-9-0-1">
                                                            三生三世十里桃花
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    杨洋刘亦菲旷世绝恋
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="733242900" data-qipuid="733242900" data-videolist-elem="item"
                                    tvid="733242900" data-left="1800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1"
                                            title="父子雄兵" target="_blank" rseat="706082_华语10">
                                                <img title="父子雄兵" rseat="706082_华语10" alt="父子雄兵" data-lazy-id="lazyImageID102"
                                                src="http://pic5.qiyipic.com/image/20170905/1a/90/v_112875992_m_601_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .5
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语10" title="父子雄兵" href="http://www.iqiyi.com/v_19rr7p7j3s.html#vfrm=19-9-0-1">
                                                            父子雄兵
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    大鹏范伟血战黑帮
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="733622700" data-qipuid="733622700" data-videolist-elem="item"
                                    tvid="733622700" data-left="2000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pgfcw.html#vfrm=19-9-0-1"
                                            title="鲛珠传" target="_blank" rseat="706082_华语11">
                                                <img title="鲛珠传" rseat="706082_华语11" alt="鲛珠传" data-lazy-id="lazyImageID103"
                                                src="http://pic9.qiyipic.com/image/20170906/ae/b5/v_112879819_m_601_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .5
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语11" title="鲛珠传" href="http://www.iqiyi.com/v_19rr7pgfcw.html#vfrm=19-9-0-1">
                                                            鲛珠传
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    王大陆张天爱决战九州
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="733048400" data-qipuid="733048400" data-videolist-elem="item"
                                    tvid="733048400" data-left="2200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p0jss.html#vfrm=19-9-0-1"
                                            title="悟空传" target="_blank" rseat="706082_华语12">
                                                <img title="悟空传" rseat="706082_华语12" alt="悟空传" data-lazy-id="lazyImageID104"
                                                src="http://pic3.qiyipic.com/image/20170819/ef/54/v_112874056_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语12" title="悟空传" href="http://www.iqiyi.com/v_19rr7p0jss.html#vfrm=19-9-0-1">
                                                            悟空传
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    彭于晏变魔猴劈天地
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="706736700" data-qipuid="706736700" data-videolist-elem="item"
                                    tvid="706736700" data-left="2400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7vtqa8.html#vfrm=19-9-0-1"
                                            title="下半城风云" target="_blank" rseat="706082_华语13">
                                                <img title="下半城风云" rseat="706082_华语13" alt="下半城风云" data-lazy-id="lazyImageID105"
                                                src="http://pic0.qiyipic.com/image/20170919/7e/57/v_112609682_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .3
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语13" title="下半城风云" href="http://www.iqiyi.com/v_19rr7vtqa8.html#vfrm=19-9-0-1">
                                                            下半城风云
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    咏春少年屠戮黑帮
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="589261200" data-qipuid="589261200" data-videolist-elem="item"
                                    tvid="589261200" data-left="2600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tq5fg.html#vfrm=19-9-0-1"
                                            title="西游伏妖篇" target="_blank" rseat="706082_华语14">
                                                <img title="西游伏妖篇" rseat="706082_华语14" alt="西游伏妖篇" data-lazy-id="lazyImageID106"
                                                src="http://pic6.qiyipic.com/image/20170412/39/4d/v_111512587_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语14" title="西游伏妖篇" href="http://www.iqiyi.com/v_19rr9tq5fg.html#vfrm=19-9-0-1">
                                                            西游伏妖篇
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    周星驰徐克强势联手
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="589243300" data-qipuid="589243300" data-videolist-elem="item"
                                    tvid="589243300" data-left="2800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9tqg20.html#vfrm=19-9-0-1"
                                            title="铁道飞虎" target="_blank" rseat="706082_华语15">
                                                <img title="铁道飞虎" rseat="706082_华语15" alt="铁道飞虎" data-lazy-id="lazyImageID107"
                                                src="http://pic5.qiyipic.com/image/20170223/96/38/v_111512405_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语15" title="铁道飞虎" href="http://www.iqiyi.com/v_19rr9tqg20.html#vfrm=19-9-0-1">
                                                            铁道飞虎
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    成龙带你干票大的！
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="732987800" data-qipuid="732987800" data-videolist-elem="item"
                                    tvid="732987800" data-left="3000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1"
                                            title="绣春刀II：修罗战场" target="_blank" rseat="706082_华语16">
                                                <img title="绣春刀II：修罗战场" rseat="706082_华语16" alt="绣春刀II：修罗战场" data-lazy-id="lazyImageID108"
                                                src="http://pic9.qiyipic.com/image/20170831/71/73/v_112873444_m_601_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语16" title="绣春刀II：修罗战场" href="http://www.iqiyi.com/v_19rr7p365w.html#vfrm=19-9-0-1">
                                                            绣春刀II：修罗战场
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    杨幂张震乱世虐恋
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="554622400" data-qipuid="554622400" data-videolist-elem="item"
                                    tvid="554622400" data-left="3200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9afs8c.html#vfrm=19-9-0-1"
                                            title="血战铜锣湾2" target="_blank" rseat="706082_华语17">
                                                <img title="血战铜锣湾2" rseat="706082_华语17" alt="血战铜锣湾2" data-lazy-id="lazyImageID109"
                                                src="http://pic2.qiyipic.com/image/20170710/1a/9d/v_111157449_m_601_m3_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .6
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语17" title="血战铜锣湾2" href="http://www.iqiyi.com/v_19rr9afs8c.html#vfrm=19-9-0-1">
                                                            血战铜锣湾2
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    古惑仔重现江湖
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="589269000" data-qipuid="589269000" data-videolist-elem="item"
                                    tvid="589269000" data-left="3400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9trdr8.html#vfrm=19-9-0-1"
                                            title="健忘村" target="_blank" rseat="706082_华语18">
                                                <img title="健忘村" rseat="706082_华语18" alt="健忘村" data-lazy-id="lazyImageID110"
                                                src="http://pic9.qiyipic.com/image/20170309/07/59/v_111512649_m_601_m2_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .7
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语18" title="健忘村" href="http://www.iqiyi.com/v_19rr9trdr8.html#vfrm=19-9-0-1">
                                                            健忘村
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    舒淇落魄遭五花大绑
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="534941300" data-qipuid="534941300" data-videolist-elem="item"
                                    tvid="534941300" data-left="3600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrm2pgd4.html#vfrm=19-9-0-1"
                                            title="使徒行者" target="_blank" rseat="706082_华语19">
                                                <img title="使徒行者" rseat="706082_华语19" alt="使徒行者" data-lazy-id="lazyImageID111"
                                                src="http://pic2.qiyipic.com/image/20160928/ca/08/v_110948404_m_601_m7_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .1
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语19" title="使徒行者" href="http://www.iqiyi.com/v_19rrm2pgd4.html#vfrm=19-9-0-1">
                                                            使徒行者
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    张家辉古天乐双面间谍
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="671025100" data-qipuid="671025100" data-videolist-elem="item"
                                    tvid="671025100" data-left="3800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrayxx9c.html#vfrm=19-9-0-1"
                                            title="欢乐喜剧人" target="_blank" rseat="706082_华语20">
                                                <img title="欢乐喜剧人" rseat="706082_华语20" alt="欢乐喜剧人" data-lazy-id="lazyImageID112"
                                                src="http://pic1.qiyipic.com/image/20170517/b0/d0/v_112243728_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_华语20" title="欢乐喜剧人" href="http://www.iqiyi.com/v_19rrayxx9c.html#vfrm=19-9-0-1">
                                                            欢乐喜剧人
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    岳云鹏暴打师父郭德纲
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-videolist-elem="tip" style="display: none; top: 80px; left: 400px;"
                class="video-info-tip">
                </div>
            </div>
            <div class="wrapper-cols j_pingback_view" data-name="大片预热" data-key="previewMovie"
            data-widget-fullcol="fullcol" data-pingback-name="706082_院线大片预热">
                <div class="site-main-outer">
                    <div class="site-main-inner site-main-inner-400">
                        <div class="site-title site-subTitle">
                            <div class="site-title_left">
                                <h3>
                                    <a style="cursor:default;">
                                        <span>
                                            大片预热
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="site-main-outer">
                            <div class="site-main-inner">
                                <div class="wrapper-piclist">
                                    <ul class="site-piclist site-piclist-180101-bigFont">
                                        <li data-index="1">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《缝纫机乐队》曝终极预告" title="《缝纫机乐队》曝终极预告" rseat="706082_院线大片内容1"
                                                href="http://www.iqiyi.com/v_19rr8n0aos.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容1" alt="《缝纫机乐队》曝终极预告"
                                                    title="《缝纫机乐队》曝终极预告" data-src="picture/v_113494782_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8n0aos.html#vfrm=19-9-0-1" title="《缝纫机乐队》曝终极预告"
                                                    rseat="706082_院线大片内容1" alt="《缝纫机乐队》曝终极预告" target="_blank">
                                                        《缝纫机乐队》曝终极预告
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    乔杉娜扎为梦想弹唱
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="2">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《王牌特工2：黄金圈》“王牌出击”版定档预告" title="《王牌特工2：黄金圈》“王牌出击”版定档预告"
                                                rseat="706082_院线大片内容2" href="http://www.iqiyi.com/v_19rr8n7t7k.html#vfrm=19-9-0-1"
                                                class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容2" alt="《王牌特工2：黄金圈》“王牌出击”版定档预告"
                                                    title="《王牌特工2：黄金圈》“王牌出击”版定档预告" data-src="picture/v_113499804_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8n7t7k.html#vfrm=19-9-0-1" title="《王牌特工2：黄金圈》“王牌出击”版定档预告"
                                                    rseat="706082_院线大片内容2" alt="《王牌特工2：黄金圈》“王牌出击”版定档预告" target="_blank">
                                                        《王牌特工2：黄金圈》“王牌出击”版定档预告
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    屠榜之作再度嗨翻世界
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="3">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《密战》郭富城“城”意归来特辑" title="《密战》郭富城“城”意归来特辑" rseat="706082_院线大片内容3"
                                                href="http://www.iqiyi.com/v_19rr8n1k74.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容3" alt="《密战》郭富城“城”意归来特辑"
                                                    title="《密战》郭富城“城”意归来特辑" data-src="picture/v_113496617_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8n1k74.html#vfrm=19-9-0-1" title="《密战》郭富城“城”意归来特辑"
                                                    rseat="706082_院线大片内容3" alt="《密战》郭富城“城”意归来特辑" target="_blank">
                                                        《密战》郭富城“城”意归来特辑
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    郭富城献影帝级表演
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="4">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《剑网三之四海流云》终极预告" title="《剑网三之四海流云》终极预告" rseat="706082_院线大片内容4"
                                                href="http://www.iqiyi.com/v_19rr8o5oqc.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容4" alt="《剑网三之四海流云》终极预告"
                                                    title="《剑网三之四海流云》终极预告" data-src="picture/v_113473827_m_601_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8o5oqc.html#vfrm=19-9-0-1" title="《剑网三之四海流云》终极预告"
                                                    rseat="706082_院线大片内容4" alt="《剑网三之四海流云》终极预告" target="_blank">
                                                        《剑网三之四海流云》终极预告
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    大唐江湖上演高手对决
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wrapper-piclist">
                                    <ul class="site-piclist site-piclist-180101-bigFont">
                                        <li data-index="6">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《空天猎》曝推广曲mv" title="《空天猎》曝推广曲mv" rseat="706082_院线大片内容6"
                                                href="http://www.iqiyi.com/v_19rr8natis.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容6" alt="《空天猎》曝推广曲mv"
                                                    title="《空天猎》曝推广曲mv" data-src="picture/v_113501071_m_601_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8natis.html#vfrm=19-9-0-1" title="《空天猎》曝推广曲mv"
                                                    rseat="706082_院线大片内容6" alt="《空天猎》曝推广曲mv" target="_blank">
                                                        《空天猎》曝推广曲mv
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    空天猎推广曲生来倔强
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="7">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《金珠玛米》首发预告定档12.8点燃贺岁档" title="《金珠玛米》首发预告定档12.8点燃贺岁档"
                                                rseat="706082_院线大片内容7" href="http://www.iqiyi.com/v_19rr8mzxis.html#vfrm=19-9-0-1"
                                                class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容7" alt="《金珠玛米》首发预告定档12.8点燃贺岁档"
                                                    title="《金珠玛米》首发预告定档12.8点燃贺岁档" data-src="picture/v_113495570_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8mzxis.html#vfrm=19-9-0-1" title="《金珠玛米》首发预告定档12.8点燃贺岁档"
                                                    rseat="706082_院线大片内容7" alt="《金珠玛米》首发预告定档12.8点燃贺岁档" target="_blank">
                                                        《金珠玛米》首发预告定档12.8点燃贺岁档
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    点燃藏地冰与火之歌
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="8">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《前任3：再见前任》定档预告" title="《前任3：再见前任》定档预告" rseat="706082_院线大片内容8"
                                                href="http://www.iqiyi.com/v_19rr8nowug.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容8" alt="《前任3：再见前任》定档预告"
                                                    title="《前任3：再见前任》定档预告" data-src="picture/v_113486121_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8nowug.html#vfrm=19-9-0-1" title="《前任3：再见前任》定档预告"
                                                    rseat="706082_院线大片内容8" alt="《前任3：再见前任》定档预告" target="_blank">
                                                        《前任3：再见前任》定档预告
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    韩庚郑恺约会双胞胎
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="9">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《羞羞的铁拳》曝“挨打”特辑" title="《羞羞的铁拳》曝“挨打”特辑" rseat="706082_院线大片内容9"
                                                href="http://www.iqiyi.com/v_19rr8nr2xc.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容9" alt="《羞羞的铁拳》曝“挨打”特辑"
                                                    title="《羞羞的铁拳》曝“挨打”特辑" data-src="picture/v_113487118_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8nr2xc.html#vfrm=19-9-0-1" title="《羞羞的铁拳》曝“挨打”特辑"
                                                    rseat="706082_院线大片内容9" alt="《羞羞的铁拳》曝“挨打”特辑" target="_blank">
                                                        《羞羞的铁拳》曝“挨打”特辑
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    艾伦训练挨打多次呛水
                                                </p>
                                            </div>
                                        </li>
                                        <li data-index="10">
                                            <div class="site-piclist_pic">
                                                <a target="_blank" alt="《追龙》甄子丹刘德华耍狠" title="《追龙》甄子丹刘德华耍狠" rseat="706082_院线大片内容10"
                                                href="http://www.iqiyi.com/v_19rr8nocek.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                    <img width="100%" height="100%" rseat="706082_院线大片内容10" alt="《追龙》甄子丹刘德华耍狠"
                                                    title="《追龙》甄子丹刘德华耍狠" data-src="picture/v_113485860_m_601_m1_480_270.jpg">
                                                    <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                        <i class="site-icons icon-play5858">
                                                        </i>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="site-piclist_info">
                                                <p class="site-piclist_info_title">
                                                    <a href="http://www.iqiyi.com/v_19rr8nocek.html#vfrm=19-9-0-1" title="《追龙》甄子丹刘德华耍狠"
                                                    rseat="706082_院线大片内容10" alt="《追龙》甄子丹刘德华耍狠" target="_blank">
                                                        《追龙》甄子丹刘德华耍狠
                                                    </a>
                                                </p>
                                                <p class="site-piclist_info_describe">
                                                    刘德华甄子丹强势对打
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="site-main-side">
                            <div class="wrapper-piclist">
                                <ul class="site-piclist site-piclist-180101-bigFont">
                                    <li>
                                        <div class="sideAdPo">
                                            <div style="height: 169px;" class="sideAdWrap" id="1000000000054">
                                            </div>
                                        </div>
                                        <div class="site-piclist_pic">
                                            <a target="_blank" alt="《银翼杀手2049》曝经典重启特辑" title="《银翼杀手2049》曝经典重启特辑" rseat="706082_院线大片内容5"
                                            href="http://www.iqiyi.com/v_19rr8n3ga0.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                <img width="100%" height="100%" rseat="706082_院线大片内容5" alt="《银翼杀手2049》曝经典重启特辑"
                                                title="《银翼杀手2049》曝经典重启特辑" data-src="picture/v_113495897_m_601_m1_480_270.jpg">
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <p class="site-piclist_info_title">
                                                <a href="http://www.iqiyi.com/v_19rr8n3ga0.html#vfrm=19-9-0-1" title="《银翼杀手2049》曝经典重启特辑"
                                                rseat="706082_院线大片内容5" alt="《银翼杀手2049》曝经典重启特辑" target="_blank">
                                                    《银翼杀手2049》曝经典重启特辑
                                                </a>
                                            </p>
                                            <p class="site-piclist_info_describe">
                                                大师云集再续科幻传奇
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="wrapper-piclist">
                                <ul class="site-piclist site-piclist-180101-bigFont">
                                    <li>
                                        <div class="sideAdPo">
                                            <div id="1000000000067" class="sideAdWrap" style="height: 169px;">
                                            </div>
                                        </div>
                                        <div class="site-piclist_pic">
                                            <a target="_blank" alt="《英伦对决》曝终极预告" title="《英伦对决》曝终极预告" rseat="706082_院线大片内容5"
                                            href="http://www.iqiyi.com/v_19rr8q8p2s.html#vfrm=19-9-0-1" class="site-piclist_pic_link">
                                                <img width="100%" height="100%" rseat="706082_院线大片内容5" alt="《英伦对决》曝终极预告"
                                                title="《英伦对决》曝终极预告" data-src="picture/v_113445091_m_601_m1_480_270.jpg">
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <p class="site-piclist_info_title">
                                                <a href="http://www.iqiyi.com/v_19rr8q8p2s.html#vfrm=19-9-0-1" title="《英伦对决》曝终极预告"
                                                rseat="706082_院线大片内容5" alt="《英伦对决》曝终极预告" target="_blank">
                                                    《英伦对决》曝终极预告
                                                </a>
                                            </p>
                                            <p class="site-piclist_info_describe">
                                                成龙布鲁斯南终极一战
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-main-side site-main-side-400 j_pingback_view" data-pingback-name="706082_票房榜">
                    <div class="site-title site-subTitle">
                        <div class="site-title_left">
                            <h3>
                                <a style="cursor:default;">
                                    <span>
                                        昨日票房 TOP5
                                    </span>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="pl20">
                        <div class="topList_nub-dy">
                            <ul class="topList_dyUl">
                                <li>
                                    <i class="topList_dy_nub topList_dy_nubH">
                                        1
                                    </i>
                                    <a class="topList_dy_title" rseat="706082_票房榜1" href="http://www.iqiyi.com/lib/m_212056414.html"
                                    target="_blank">
                                        猩球崛起3：终极之战
                                    </a>
                                    <span class="topList_playNub">
                                        3409万
                                    </span>
                                </li>
                                <li>
                                    <i class="topList_dy_nub topList_dy_nubH">
                                        2
                                    </i>
                                    <a class="topList_dy_title" rseat="706082_票房榜2" href="http://www.iqiyi.com/lib/m_212796414.html"
                                    target="_blank">
                                        看不见的客人
                                    </a>
                                    <span class="topList_playNub">
                                        775万
                                    </span>
                                </li>
                                <li>
                                    <i class="topList_dy_nub topList_dy_nubH">
                                        3
                                    </i>
                                    <a class="topList_dy_title" rseat="706082_票房榜3" href="http://www.iqiyi.com/lib/m_211596814.html"
                                    target="_blank">
                                        蜘蛛侠：英雄归来
                                    </a>
                                    <span class="topList_playNub">
                                        770万
                                    </span>
                                </li>
                                <li>
                                    <i class="topList_dy_nub">
                                        4
                                    </i>
                                    <a class="topList_dy_title" rseat="706082_票房榜4" href="http://www.iqiyi.com/lib/m_208884714.html"
                                    target="_blank">
                                        请把你的窗户打开
                                    </a>
                                    <span class="topList_playNub">
                                        249万
                                    </span>
                                </li>
                                <li>
                                    <i class="topList_dy_nub">
                                        5
                                    </i>
                                    <a class="topList_dy_title" rseat="706082_票房榜5" href="http://www.iqiyi.com/lib/m_213000414.html"
                                    target="_blank">
                                        刀剑神域：序列之争
                                    </a>
                                    <span class="topList_playNub">
                                        179万
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-cols pr j_pingback_view" data-async="true" data-name="关于功夫的电影"
            data-key="other" data-pingback-name="706082_Feed_关于功夫的电影" data-widget-fullcol="fullcol"
            data-lazy-loading-id="sliderID22" data-component-id="movieAjaxComponent21"
            data-slider-id="sliderID23">
                <div class="site-title site-subTitle">
                    <div class="site-title_left">
                        <h3>
                            <a target="_blank" rseat="706082_feedmore" href="http://www.iqiyi.com/dianying_new/i_topic_ZZX66GWF.html">
                                <span>
                                    关于功夫的电影
                                </span>
                                <span class="icon-more">
                                    更多&gt;
                                </span>
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="site-item_l">
                    <div class="piclist-scroll piclist-scroll-h290">
                        <div class="piclist_btnLeft">
                            <a href="javascript:void(0);" class="disabled" rseat="706082_feedleft"
                            style="display: none;">
                            </a>
                        </div>
                        <div class="piclist-scroll-pic">
                            <div class="wrapper-piclist">
                                <ul class="site-piclist" data-widget-videolist="videolist" style="width: 4200px; margin-left: 0px;">
                                    <li data-tvid="617780800" data-qipuid="617780800" data-videolist-elem="item"
                                    tvid="617780800" data-left="0" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrapsmcs.html#vfrm=19-9-0-1"
                                            title="斗战胜佛" target="_blank" rseat="706082_feed1">
                                                <img title="斗战胜佛" rseat="706082_feed1" alt="斗战胜佛" data-lazy-id="lazyImageID448"
                                                src="http://pic3.qiyipic.com/image/20170313/09/b6/v_111807453_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .9
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed1" title="斗战胜佛" href="http://www.iqiyi.com/v_19rrapsmcs.html#vfrm=19-9-0-1">
                                                            斗战胜佛
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    陈浩民版大圣归来
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="264553500" data-qipuid="264553500" data-videolist-elem="item"
                                    tvid="264553500" data-left="200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrho7bsg.html#vfrm=19-9-0-1"
                                            title="人吓人" target="_blank" rseat="706082_feed2">
                                                <img title="人吓人" rseat="706082_feed2" alt="人吓人" data-lazy-id="lazyImageID449"
                                                src="http://pic1.qiyipic.com/image/20170802/b3/d4/v_62645535_m_601_m4_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed2" title="人吓人" href="http://www.iqiyi.com/v_19rrho7bsg.html#vfrm=19-9-0-1">
                                                            人吓人
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    林正英对阵洪金宝
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="679522700" data-qipuid="679522700" data-videolist-elem="item"
                                    tvid="679522700" data-left="400" score="-1">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7gywv4.html#vfrm=19-9-0-1"
                                            title="烈火狼之笼斗" target="_blank" rseat="706082_feed3">
                                                <img title="烈火狼之笼斗" rseat="706082_feed3" alt="烈火狼之笼斗" data-lazy-id="lazyImageID450"
                                                src="http://pic9.qiyipic.com/image/20170710/99/49/v_112330860_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .4
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed3" title="烈火狼之笼斗" href="http://www.iqiyi.com/v_19rr7gywv4.html#vfrm=19-9-0-1">
                                                            烈火狼之笼斗
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    “嘎子哥”变硬汉拳手
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="265152000" data-qipuid="265152000" data-videolist-elem="item"
                                    tvid="265152000" data-left="600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrhogz1o.html#vfrm=19-9-0-1"
                                            title="霍元甲" target="_blank" rseat="706082_feed4">
                                                <img title="霍元甲" rseat="706082_feed4" alt="霍元甲" data-lazy-id="lazyImageID451"
                                                src="http://pic2.qiyipic.com/image/20170510/12/3c/v_62651520_m_601_m3_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed4" title="霍元甲" href="http://www.iqiyi.com/v_19rrhogz1o.html#vfrm=19-9-0-1">
                                                            霍元甲
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    李连杰演绎经典武魂
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="539822400" data-qipuid="539822400" data-videolist-elem="item"
                                    tvid="539822400" data-left="800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9j1smk.html#vfrm=19-9-0-1"
                                            title="绝地逃亡（国语）" target="_blank" rseat="706082_feed5">
                                                <img title="绝地逃亡（国语）" rseat="706082_feed5" alt="绝地逃亡（国语）" data-lazy-id="lazyImageID452"
                                                src="http://pic6.qiyipic.com/image/20170710/4e/5d/v_111001355_m_601_m2_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .3
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed5" title="绝地逃亡（国语）" href="http://www.iqiyi.com/v_19rr9j1smk.html#vfrm=19-9-0-1">
                                                            绝地逃亡（国语）
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    成龙爆笑动作喜剧新作
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="166995" data-qipuid="106699500" data-videolist-elem="item"
                                    tvid="106699500" data-left="1000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrk0sfi8.html#vfrm=19-9-0-1"
                                            title="龙门飞甲" target="_blank" rseat="706082_feed6">
                                                <img title="龙门飞甲" rseat="706082_feed6" alt="龙门飞甲" data-lazy-id="lazyImageID453"
                                                src="http://pic2.qiyipic.com/image/20170704/c1/1d/v_50166995_m_601_m14_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .8
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed6" title="龙门飞甲" href="http://www.iqiyi.com/v_19rrk0sfi8.html#vfrm=19-9-0-1">
                                                            龙门飞甲
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    新江湖基友英雄列传
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="537512700" data-qipuid="537512700" data-videolist-elem="item"
                                    tvid="537512700" data-left="1200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9k5h1s.html#vfrm=19-9-0-1"
                                            title="龙拳小子" target="_blank" rseat="706082_feed7">
                                                <img title="龙拳小子" rseat="706082_feed7" alt="龙拳小子" data-lazy-id="lazyImageID454"
                                                src="http://pic0.qiyipic.com/image/20160914/8b/7a/v_110976645_m_601_m1_180_236.jpg"
                                                width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed7" title="龙拳小子" href="http://www.iqiyi.com/v_19rr9k5h1s.html#vfrm=19-9-0-1">
                                                            龙拳小子
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    海归功夫小子暴击罪犯
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="581133700" data-qipuid="581133700" data-videolist-elem="item"
                                    tvid="581133700" data-left="1400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rra7m57s.html#vfrm=19-9-0-1"
                                            title="黑客帝国3：矩阵革命" target="_blank" rseat="706082_feed8">
                                                <img title="黑客帝国3：矩阵革命" rseat="706082_feed8" alt="黑客帝国3：矩阵革命" data-src="http://pic7.qiyipic.com/image/20170709/92/f3/v_111432280_m_601_m3_180_236.jpg"
                                                data-lazy-id="lazyImageID455" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .9
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed8" title="黑客帝国3：矩阵革命" href="http://www.iqiyi.com/v_19rra7m57s.html#vfrm=19-9-0-1">
                                                            黑客帝国3：矩阵革命
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    救世主的最后决战
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="712003200" data-qipuid="712003200" data-videolist-elem="item"
                                    tvid="712003200" data-left="1600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7rk164.html#vfrm=19-9-0-1"
                                            title="废柴英雄联盟" target="_blank" rseat="706082_feed9">
                                                <img title="废柴英雄联盟" rseat="706082_feed9" alt="废柴英雄联盟" data-src="http://pic8.qiyipic.com/image/20170629/b3/6b/v_112661116_m_601_180_236.jpg"
                                                data-lazy-id="lazyImageID456" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons">
                                                    <i class="site-icons icon-viedo-exc">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .6
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed9" title="废柴英雄联盟" href="http://www.iqiyi.com/v_19rr7rk164.html#vfrm=19-9-0-1">
                                                            废柴英雄联盟
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    吴宗宪超人大战
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="264470200" data-qipuid="264470200" data-videolist-elem="item"
                                    tvid="264470200" data-left="1800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrho2cwk.html#vfrm=19-9-0-1"
                                            title="狼犬丹尼" target="_blank" rseat="706082_feed10">
                                                <img title="狼犬丹尼" rseat="706082_feed10" alt="狼犬丹尼" data-src="http://pic8.qiyipic.com/image/20170821/75/8a/v_62644702_m_601_m3_180_236.jpg"
                                                data-lazy-id="lazyImageID457" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .4
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed10" title="狼犬丹尼" href="http://www.iqiyi.com/v_19rrho2cwk.html#vfrm=19-9-0-1">
                                                            狼犬丹尼
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    “狼犬”改变史
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="732502600" data-qipuid="732502600" data-videolist-elem="item"
                                    tvid="732502600" data-left="2000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr7pywbo.html#vfrm=19-9-0-1"
                                            title="追魂伞" target="_blank" rseat="706082_feed11">
                                                <img title="追魂伞" rseat="706082_feed11" alt="追魂伞" data-src="http://pic1.qiyipic.com/image/20170914/ac/14/v_112868561_m_601_180_236.jpg"
                                                data-lazy-id="lazyImageID458" width="180" height="236">
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .4
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed11" title="追魂伞" href="http://www.iqiyi.com/v_19rr7pywbo.html#vfrm=19-9-0-1">
                                                            追魂伞
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    林正英道义永存
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="4584" data-qipuid="90458400" data-videolist-elem="item"
                                    tvid="90458400" data-left="2200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrj5vi30.html#vfrm=19-9-0-1"
                                            title="导火线" target="_blank" rseat="706082_feed12">
                                                <img title="导火线" rseat="706082_feed12" alt="导火线" data-src="http://pic5.qiyipic.com/image/20150328/04/31/ae/v_50004584_m_601_m7_180_236.jpg"
                                                data-lazy-id="lazyImageID459" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed12" title="导火线" href="http://www.iqiyi.com/v_19rrj5vi30.html#vfrm=19-9-0-1">
                                                            导火线
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    甄子丹真功夫拳拳到肉
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="701305000" data-qipuid="701305000" data-videolist-elem="item"
                                    tvid="701305000" data-left="2400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr74wclg.html#vfrm=19-9-0-1"
                                            title="叶问3" target="_blank" rseat="706082_feed13">
                                                <img title="叶问3" rseat="706082_feed13" alt="叶问3" data-src="http://pic7.qiyipic.com/image/20170619/56/5d/v_112554071_m_601_m1_180_236.jpg"
                                                data-lazy-id="lazyImageID460" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .7
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed13" title="叶问3" href="http://www.iqiyi.com/v_19rr74wclg.html#vfrm=19-9-0-1">
                                                            叶问3
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    甄子丹捍卫正宗咏春
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="372614400" data-qipuid="372614400" data-videolist-elem="item"
                                    tvid="372614400" data-left="2600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrohimb0.html#vfrm=19-9-0-1"
                                            title="西游记之孙悟空三打白骨精" target="_blank" rseat="706082_feed14">
                                                <img title="西游记之孙悟空三打白骨精" rseat="706082_feed14" alt="西游记之孙悟空三打白骨精" data-src="http://pic4.qiyipic.com/image/20160407/3d/14/v_109212617_m_601_m2_180_236.jpg"
                                                data-lazy-id="lazyImageID461" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .4
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed14" title="西游记之孙悟空三打白骨精" href="http://www.iqiyi.com/v_19rrohimb0.html#vfrm=19-9-0-1">
                                                            西游记之孙悟空三打白骨精
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    巩俐气场全开惊艳霸气
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="580160900" data-qipuid="580160900" data-videolist-elem="item"
                                    tvid="580160900" data-left="2800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rra8e3u0.html#vfrm=19-9-0-1"
                                            title="龙潭虎穴" target="_blank" rseat="706082_feed15">
                                                <img title="龙潭虎穴" rseat="706082_feed15" alt="龙潭虎穴" data-src="http://pic4.qiyipic.com/image/20170707/a8/9b/v_111421832_m_601_m2_180_236.jpg"
                                                data-lazy-id="lazyImageID462" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .7
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed15" title="龙潭虎穴" href="http://www.iqiyi.com/v_19rra8e3u0.html#vfrm=19-9-0-1">
                                                            龙潭虎穴
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    李连杰开挂夺宝
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="303741500" data-qipuid="303741500" data-videolist-elem="item"
                                    tvid="303741500" data-left="3000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrnf368g.html#vfrm=19-9-0-1"
                                            title="恶战" target="_blank" rseat="706082_feed16">
                                                <img title="恶战" rseat="706082_feed16" alt="恶战" data-src="http://pic7.qiyipic.com/image/20160518/32/2d/v_108573761_m_601_m1_180_236.jpg"
                                                data-lazy-id="lazyImageID463" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .6
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed16" title="恶战" href="http://www.iqiyi.com/v_19rrnf368g.html#vfrm=19-9-0-1">
                                                            恶战
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    基情好兄弟抗日誓复仇
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="509539" data-qipuid="140953900" data-videolist-elem="item"
                                    tvid="140953900" data-left="3200">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrg43ha8.html#vfrm=19-9-0-1"
                                            title="毒战" target="_blank" rseat="706082_feed17">
                                                <img title="毒战" rseat="706082_feed17" alt="毒战" data-src="http://pic9.qiyipic.com/image/20160510/30/91/v_50509539_m_601_m6_180_236.jpg"
                                                data-lazy-id="lazyImageID464" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .1
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed17" title="毒战" href="http://www.iqiyi.com/v_19rrg43ha8.html#vfrm=19-9-0-1">
                                                            毒战
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    老杜首导内地警匪题材
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="581130600" data-qipuid="581130600" data-videolist-elem="item"
                                    tvid="581130600" data-left="3400">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rra7mgw4.html#vfrm=19-9-0-1"
                                            title="黑客帝国2：重装上阵" target="_blank" rseat="706082_feed18">
                                                <img title="黑客帝国2：重装上阵" rseat="706082_feed18" alt="黑客帝国2：重装上阵" data-src="http://pic2.qiyipic.com/image/20170708/3f/3e/v_111432276_m_601_m3_180_236.jpg"
                                                data-lazy-id="lazyImageID465" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .7
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed18" title="黑客帝国2：重装上阵" href="http://www.iqiyi.com/v_19rra7mgw4.html#vfrm=19-9-0-1">
                                                            黑客帝国2：重装上阵
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    乌贼大军碾压人类机甲
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="66785" data-qipuid="96678500" data-videolist-elem="item"
                                    tvid="96678500" data-left="3600">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rrifgu4t.html#vfrm=19-9-0-1"
                                            title="大笑江湖" target="_blank" rseat="706082_feed19">
                                                <img title="大笑江湖" rseat="706082_feed19" alt="大笑江湖" data-src="http://pic0.qiyipic.com/image/20150319/a5/b8/ff/v_50066785_m_601_m5_180_236.jpg"
                                                data-lazy-id="lazyImageID466" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        7
                                                    </strong>
                                                    .2
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed19" title="大笑江湖" href="http://www.iqiyi.com/v_19rrifgu4t.html#vfrm=19-9-0-1">
                                                            大笑江湖
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    刺陵导演三枪阵容
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="582220500" data-qipuid="582220500" data-videolist-elem="item"
                                    tvid="582220500" data-left="3800">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rra70ipk.html#vfrm=19-9-0-1"
                                            title="尖峰时刻2" target="_blank" rseat="706082_feed20">
                                                <img title="尖峰时刻2" rseat="706082_feed20" alt="尖峰时刻2" data-src="http://pic8.qiyipic.com/image/20170709/ef/f6/v_111443074_m_601_m2_180_236.jpg"
                                                data-lazy-id="lazyImageID467" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="site-piclist_icons-lt">
                                                    <i class="site-icons-mark icon-viedo-vip-zx">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .0
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed20" title="尖峰时刻2" href="http://www.iqiyi.com/v_19rra70ipk.html#vfrm=19-9-0-1">
                                                            尖峰时刻2
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    成龙“打”进好莱坞
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tvid="544502800" data-qipuid="544502800" data-videolist-elem="item"
                                    tvid="544502800" data-left="4000">
                                        <div class="site-piclist_pic">
                                            <a class="site-piclist_pic_link" href="http://www.iqiyi.com/v_19rr9fn3b0.html#vfrm=19-9-0-1"
                                            title="铁拳" target="_blank" rseat="706082_feed21">
                                                <img title="铁拳" rseat="706082_feed21" alt="铁拳" data-src="http://pic7.qiyipic.com/image/20160929/56/34/v_111050503_m_601_m2_180_236.jpg"
                                                data-lazy-id="lazyImageID468" width="180" height="236">
                                                <p class="site-piclist_icons-lb">
                                                    <i class="mark-1080p">
                                                    </i>
                                                </p>
                                                <p class="play_coverWrap" data-videolist-elem="playbtn">
                                                    <i class="site-icons icon-play5858">
                                                    </i>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="site-piclist_info">
                                            <div class="site-title_score">
                                                <span class="score">
                                                    <strong class="num">
                                                        8
                                                    </strong>
                                                    .3
                                                </span>
                                                <div class="title">
                                                    <p class="site-piclist_info_title">
                                                        <a target="_blank" rseat="706082_feed21" title="铁拳" href="http://www.iqiyi.com/v_19rr9fn3b0.html#vfrm=19-9-0-1">
                                                            铁拳
                                                        </a>
                                                    </p>
                                                </div>
                                                <p class="site-piclist_info_describe">
                                                    爆裂拳手震惊拳王泰森
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-videolist-elem="tip" style="display: none; top: 80px; left: 200px;"
                class="video-info-tip">
                </div>
            </div>
        </div>
        <!-- 二维码耳朵 start -->
        <div id="block-F" data-block-name="二维码耳朵">
            <div class="baseScrollBar0217" id="scrollBar-menus">
                <ul class="baseScrollBar0217_menus">
                    <li data-item="totop" data-totopbtn-time=100 data-totopbtn-max=200>
                        <a href="javascript:;" class="baseToTop" rseat="702151_totop">
                            <i class="baseToTop-icon">
                            </i>
                            <span>
                                回到顶部
                            </span>
                        </a>
                    </li>
                    <li data-item="feedback">
                        <a href="http://www.iqiyi.com/common/helpandsuggest.html?entry=channel"
                        target="_blank" class="helpFeedback" rseat="702151_feedback_channel">
                            <i class="helpFeedback-icon">
                            </i>
                            <span>
                                意见反馈
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 二维码耳朵 end -->
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
                <a href="http://labs.iqiyi.com" rel="nofollow" title="爱奇艺实验室" rseat="爱奇艺实验室"
                target="_blank">
                    爱奇艺实验室
                </a>
                <a href="http://open.iqiyi.com/" rel="nofollow" title="开放平台" rseat="开放平台"
                target="_blank">
                    开放平台
                </a>
                <a href="http://www.iqiyi.com/common/rz.html" rel="nofollow" title="爱奇艺号认证"
                rseat="爱奇艺号认证" target="_blank">
                    爱奇艺号认证
                </a>
                <a href="http://mp.iqiyi.com/" rel="nofollow" title="爱奇艺号" rseat="爱奇艺号"
                target="_blank">
                    爱奇艺号
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
                <a href="//www.iqiyi.com" class="link0" title="爱奇艺" rseat="爱奇艺" target="_blank">
                    爱奇艺
                </a>
                All Rights Reserved
            </p>
        </div>
    </body>
</html>