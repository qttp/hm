﻿<!DOCTYPE HTML>
<html lang="en-US">
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/video/css/v3-basic_other.css" />
        <link type="text/css" rel="stylesheet" href="/video/css/personalcenter-new.css">
        <script type="text/javascript" src="/video/js/online.js">
        </script>
        <script type="text/javascript" src="/video/js/online_.js">
        </script>
        <script type="text/javascript" src="/video/js/pcweb.wonder.js">
        </script>
        <script type="text/javascript" src="/video/js/sea1.2.js">
        </script>
        <title>
            基本信息 - 个人设置 - 爱奇艺个人中心
        </title>
    </head>
    
    <body class="qypage-980">
        <img width="300" height="300" src="/video/picture/wx-logo.png" style="position: absolute; top:-9999em">
        <script type="text/javascript">
            window.Q = window.Q || {};
            Q.PageInfo = Q.PageInfo || {};
            Q.PageInfo.respInfo = {
                cnf: [{
                    layout: 0,
                    cls: 'qypage-980',
                    range: {
                        min: 0,
                        max: 1259
                    },
                    extraInfo: {
                        playListViewCount: 3 //播单显示的个数 
                    }
                },
                {
                    layout: 1,
                    cls: 'qypage-1180',
                    range: {
                        min: 1259,
                        max: Number.MAX_VALUE
                    },
                    extraInfo: {
                        playListViewCount: 4 //播单显示的个数 
                    }
                }],
                curLayout: 0
            }
        </script>
        <script>
            (function() {
                var body = Q.$('body');
                var width = Q.page.getViewWidth() > Q.page.getWidth() ? Q.page.getWidth() : Q.page.getViewWidth();
                if (Q && Q.PageInfo && Q.PageInfo.respInfo) {

                    var cnf = Q.PageInfo.respInfo.cnf;
                    body.removeClass(cnf[Q.PageInfo.respInfo.curLayout].cls);
                    for (var i = 0; i < cnf.length; i++) {
                        if (width >= cnf[i].range.min && width <= cnf[i].range.max && !body.hasClass(cnf[i].cls)) {
                            body.addClass(cnf[i].cls);
                            Q.PageInfo.respInfo.curLayout = cnf[i].layout;
                            break;
                        }
                    }
                }
            })();
        </script>
        <div id="block-A" data-block-name="导航">
            <div class=" topNavWrap-pindao " data-widget-compatible="wrap" data-ipadhack-elem="nav">
                <div class="navTopNew topNav-pindao" data-widget-navctrl="channel" data-widget-toplinefloater="blackFloater"
                data-toplinefloater-scrolltop="1">
                    <div class="navMid clearfix">
                        <div class="topNavLt">
                            <div class="topLogo caihong">
                                <a href="//www.iqiyi.com/" data-navpingback="logo" rseat="iQIYI_logo">
                                    <img alt="爱奇艺 iQIYI.COM" title="爱奇艺 iQIYI.COM" rseat="iQIYI_yxpz" src="picture/logo108x35_black.png"
                                    />
                                </a>
                            </div>
                            <div class="topDot">
                                <a rseat="708151_channel_88" title="个人中心" href="//www.iqiyi.com/u/" target="_self">
                                    <h2 class="qycp">
                                        个人中心
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <div class="topNavMid" data-widget-navAnim="wrap" data-navAnim-param="channel">
                            <div class="dhome ">
                                <a href="//www.iqiyi.com/" data-btn="backhome" target="_blank" data-navpingback="home"
                                title="返回爱奇艺首页" alt="返回爱奇艺首页" rseat="返回爱奇艺首页">
                                </a>
                            </div>
                            <div class="dhBox">
                                <div data-widget-navctrl-elem="guide" class="dhGuide">
                                    <div data-widget-navctrl-elem="shadow">
                                        导航
                                    </div>
                                </div>
                                <div class="ydBox" style="display: none;" data-widget-navctrl-elem="tip">
                                    <div class="gtips-bg">
                                    </div>
                                    <div class="gtips-txt">
                                        <p>
                                            <span>
                                                更多频道内容在这里查看
                                            </span>
                                            <a class="xclose" j-tipclose="closebtn" href="javascript:;">
                                                知道了
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!-- guide End -->
                            </div>
                        </div>
                        <!-- nav first Start -->
                        <div class="navboxFirst  navboxFirst-channel  navboxWx" data-widget-navctrl-elem="first"
                        style="display:none">
                            <div class="mod-navPop clearfix" data-test-id="pdUl1">
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
                                    <ul class="nav_two clearfix" data-test-id="pdUl2">
                                        <li>
                                            <a rseat="电影" href="http://www.iqiyi.com/dianying/">
                                                电影
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="电视剧" href="http://www.iqiyi.com/dianshiju/" data-widget='navdot'
                                            data-dot-cid='5'>
                                                电视剧
                                                <i data-newicon="dot" style="display:none;" class="tip_dot">
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
                                    <ul class="nav_three clearfix" data-test-id="pdUl3">
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
                                    <ul class="nav_four clearfix" data-test-id="pdUl4">
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
                                    <ul class="nav_five clearfix" data-test-id="pdUl5">
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
                                    <ul class="nav_six clearfix" data-test-id="pdUl6">
                                        <li>
                                            <a rseat="风云榜" href="http://top.iqiyi.com">
                                                风云榜
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="奇秀直播" href="http://x.pps.tv/" target='_blank'>
                                                奇秀直播
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="全网影视" href="http://v.iqiyi.com" target='_blank'>
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
                                        <li class="nav_3z">
                                            <a rseat="应用商店" href="http://store.iqiyi.com" target='_blank'>
                                                应用商店
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav_seven clearfix" data-test-id="pdUl7">
                                        <li>
                                            <a rseat="商城" href="http://mall.iqiyi.com?odfrm=AQY01" target='_blank'>
                                                商城
                                            </a>
                                        </li>
                                        <li class="nav_3z">
                                            <a rseat="大头" href="http://datou.iqiyi.com/">
                                                大头
                                            </a>
                                        </li>
                                        <li>
                                            <a rseat="文学" href="http://wenxue.iqiyi.com" target='_blank'>
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
                                            <a href="http://vip.iqiyi.com/?fc=b4df9faa4b31aec4" class="nav_vip-star">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- vip新结构 end -->
                                </div>
                                <!-- app download start -->
                                <div class="mod-appDownload-nav j_pca_pb" rseat="pcltdown_1501192">
                                    <a href="javascript:;" pubarea="pcltdown_1501192" rseat="pcltdown_1501192"
                                    data-widget-getUrl="layerDownloadUrl" class="appDownload-nav_img" title="">
                                    </a>
                                    <p class="appDownload-nav_desc">
                                        <span>
                                            提高3倍流畅度！
                                        </span>
                                        <a href="javascript:;" pubarea="pcltdown_1501192" data-widget-getUrl="layerDownloadUrl"
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
                        <div id="j-header" class="topNavRt topNavRt_new" data-widget-navmsgtips="navmsgtips">
                            <!-- 引导VIP用户绑定手机号 -->
                            <div data-vip-bind="mobile">
                            </div>
                            <!-- 引导VIP用户绑定手机号 end-->
                            <!--old=login start-->
                            <div data-temp-old="true" class="topLogin" data-private-display="" style="display: none;">
                                <!--更新提醒-->
                                <span class="toGeng">
                                    <span style="display:none;" j-updaterecord="icon" class="gxBg">
                                        <span class="gxNum">
                                        </span>
                                        <em j-iconnum="true">
                                            0
                                        </em>
                                    </span>
                                    <a j-firsttip="hasnot" j-updaterecord="title" style="display:none;" href="javascript:void(0)"
                                    class="gx">
                                        更新
                                    </a>
                                </span>
                                <!--更新提醒 end-->
                                <span j-updaterecord="titlesplit" style="display:none" class="line">
                                    |
                                </span>
                                <a class="a1 jilu" onfocus="this.blur();" id="topT1" onclick="return false;"
                                href="#" rseat="tj_record" data-pb="pru=P00PRU">
                                    播放记录
                                </a>
                                <span id="j-login-wrapper" class="">
                                </span>
                            </div>
                            <!--old=login end-->
                            <!--new=login start-->
                            <div data-con="head" id="data-temp-new" class="topLogin">
                                <!--add bofang jilu-->
                                <div class="topNav_user usrTx-box">
                                    <div class="usrTx-outer" data-widget-userregistlogin="userregistlogin"
                                    id="widget-userregistlogin" style="display: none;">
                                        <!-- 控制积分弹层和用户名 -->
                                        <div>
                                            <!--个人积分弹出层 开始-->
                                            <div style="float:left;">
                                                <div class="usrTx-new_hover" style="display:none;" data-widget-userbox='userbox'>
                                                </div>
                                            </div>
                                            <!--个人积分弹出层 结束-->
                                            <span j-user="name" style="display: none;" class="usrTx-name" data-elem="topUserName"
                                            data-private-display="block">
                                                <span data-widget-score="name">
                                                    <a href="http://www.iqiyi.com/u/" rseat="tj_usrclk" class="usrTx_newWrap clearfix">
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
                                        </div>
                                        <!-- 控制登录注册 -->
                                        <div>
                                            <!--登录-->
                                            <div data-private-display="" data-elem="topLoginBar" class="usrTx-login">
                                                <a class="login0201" href="javascript:void(0)" data-elem="topLoginPanel"
                                                j-login="title" rseat="tj_login" j-delegate="login">
                                                    登录
                                                </a>
                                                <!--登录弹出层 开始-->
                                                <div class="usrTxGeneral-box_hover usrLogin-pop" style="display: none"
                                                data-widget-loginbox='loginbox'>
                                                </div>
                                                <!--登录弹出层 结束-->
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
                                                style="display: none" data-widget-registbox='registbox'>
                                                </div>
                                                <!--注册弹出层 结束-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--add vip-->
                                <div class="topNav_vip" data-vipheader-elem="wrapper" id="widget-vipheader"
                                data-vipheader-cls="topNav_vip">
                                    <!--追加hover为vip层-->
                                    <a class="gx0201" href="//serv.vip.iqiyi.com/order/preview.action?pid=a0226bd958843452&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" j-data-elem="zjuser"
                                    data-private-display="" style="display: block;" rseat="tj_opvip">
                                        开通VIP
                                    </a>
                                    <a class="gx0201" href="http://serv.vip.iqiyi.com/order/pre.action?pid=a232698bebb30ebd"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
                                    <a class="gx0201" href="//serv.vip.iqiyi.com/order/guide.action?pid=a0226bd958843452&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
                                    <a class="gx0201" href="//vip.iqiyi.com/?fc=a988b1d4503873af" j-playhistory="title"
                                    data-vipheader-elem="header" style="display: none;">
                                        VIP会员
                                    </a>
                                    <a class="gx0201" href="//serv.vip.iqiyi.com/order/preview.action?pid=adb3376b039b970b&fc=a988b1d4503873af"
                                    j-playhistory="title" data-vipheader-elem="header" style="display: none;"
                                    rseat="续费VIP">
                                        续费VIP
                                    </a>
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
                                            <ul class="topNav_upload-bd" data-test-id="pdUl10">
                                                <li>
                                                    <a href="javascript:void(0);" data-widget="navdot" data-dot-cid="b" j-delegate="uploadVideo"
                                                    rseat="tjup_load">
                                                        上传视频
                                                        <i style="display:none;" class="nav_mag_dot" data-newicon="b">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="//www.iqiyi.com/u/editor/" data-widget="navdot" data-dot-cid="c"
                                                    rseat="tjup_editor">
                                                        制作视频
                                                        <i style="display:none;" class="nav_mag_dot" data-newicon="c">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="//www.iqiyi.com/u/channel" rseat="tjup_kj" data-navuploadfloater-elem="zone">
                                                        我的空间
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="//www.iqiyi.com/u/video" rseat="tjup_sp">
                                                        视频管理
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.iqiyi.com/u/a/video" rseat="tjup_ll" class="j_avideo_data">
                                                        播放数据
                                                    </a>
                                                </li>
                                                <li class="no-login">
                                                    <a href="//mp.iqiyi.com/finance/income" data-elem="checkShare" rseat="tjup_fc">
                                                        查看分成
                                                    </a>
                                                </li>
                                                <li data-elem="navprofile" class="profile">
                                                    <a href="//www.iqiyi.com/u/a/profile" rseat="tjup_hx">
                                                        用户画像
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="//www.iqiyi.com/dv/iPartner.html" rseat="tjup_sq">
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
                                                <ul class="pop_title_list" data-test-id="pdUl11">
                                                    <li class="selected" data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:;" rseat="更新提醒">
                                                            更新提醒
                                                            <i class="title_item_tip" style="display:none;" data-navmessagefloater-elem="num">
                                                                6
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:;" rseat="与我相关">
                                                            与我相关
                                                            <i class="title_item_tip" style="display:none;" data-navmessagefloater-elem="num">
                                                                6
                                                            </i>
                                                        </a>
                                                    </li>
                                                    <li data-navmessagefloater-elem="tabtitle">
                                                        <a class="title_item" href="javascript:;" rseat="系统通知">
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
                                                        <!-- 播放记录相关 start -->
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
                                                        <!-- 播放记录相关 end -->
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
                            </div>
                            <!--new=login end-->
                            <div class="clearfix">
                                <div data-widget-suggest="suggest" data-suggest-tip="" class="searchbox"
                                data-suggest-focusoutblacklist="iqiyi.com">
                                    <div data-widget-suggest="hotList">
                                        <a title="极限挑战" href='http://so.iqiyi.com/so/q_极限挑战' target='_blank' style="display:none;"
                                        data-suggest-elem="keyword">
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
                                    <script>
                                        (function() {
                                            var g = Q.$('[data-widget-suggest="suggest"]');
                                            if (g) {
                                                var f = {
                                                    widget: g,
                                                    form: Q.$('[data-suggest-elem="form"]'),
                                                    input: Q.$('[data-suggest-elem="input"]'),
                                                    btn: Q.$('[data-suggest-elem="btn"]')
                                                };
                                                var a;
                                                var h = f.widget.attr("data-suggest-searchtarget") || "_blank";
                                                var e = f.widget.attr("data-suggest-refersource") || "";
                                                f.btn.on("click",
                                                function() {
                                                    if (!window.searchSuggestInited && f.input.value()) {
                                                        b()
                                                    }
                                                });
                                                f.input[0].onkeydown = function(i) {
                                                    if (!window.searchSuggestInited && i.keyCode === 13 && !f.input.value()) {
                                                        return false
                                                    }
                                                };
                                                var c = [];
                                                f.input.on("keyup",
                                                function(i) {
                                                    if (!window.searchSuggestInited && f.input.value()) {
                                                        d()
                                                    }
                                                });
                                                if (f.input.value()) {
                                                    d()
                                                }
                                                function d() {
                                                    var j = "http://so.iqiyi.com/so/q_" + encodeURIComponent(f.input.value());
                                                    var l = {
                                                        source: "input",
                                                        "sr": Math.floor((new Date()).getTime() * Math.random())
                                                    };
                                                    if (c) {
                                                        c.forEach(function(m) {
                                                            f.form.remove(m)
                                                        })
                                                    }
                                                    c = [];
                                                    for (var k in l) {
                                                        var i = Q.element.Element.create({
                                                            tagName: "input"
                                                        });
                                                        i.css("display", "none");
                                                        i.attr("type", "hidden");
                                                        i.attr("name", k);
                                                        i.attr("data-elems", "input");
                                                        i.value(decodeURIComponent(l[k]));
                                                        f.form.append(i);
                                                        c.push(i)
                                                    }
                                                    f.form.attr("target", h);
                                                    f.form.attr("method", "GET");
                                                    f.form[0].action = j
                                                }
                                                function b() {
                                                    var i = "http://so.iqiyi.com/so/q_" + encodeURIComponent(f.input.value()) + "?source=input&sr=" + Math.floor((new Date()).getTime() * Math.random());
                                                    if (e) {
                                                        i += "&" + e
                                                    }
                                                    if (h === "_self") {
                                                        window.location.href = i
                                                    } else {
                                                        window.open(i)
                                                    }
                                                }
                                            }
                                        })();
                                    </script>
                                    <div class="soResult" data-suggest-elem="body" style="display:none;">
                                        <div class="soResult_con">
                                            <ul class="soHistory_list" data-suggest-elem="historylist">
                                            </ul>
                                            <ul class="soResult_list soHot_list" data-suggest-elem="list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--topNavRt search end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="qy_main">
            <div class="main_inner">
                <!-- 个人中心 VIP 进度条 开始 -->
                <div class="mt20 vip-condition  no-vipMember ">
                    <!-- 不是会员时外层追加 no-vipMember 类名 -->
                    <div class="vip-left">
                        <div class="vip-userPic">
                            <a href="http://www.iqiyi.com/u/1455686071" target="_blank">
                                <img class="vip-userPic-img" src="/video/picture/male-70.png" data-top-head="head">
                            </a>
                        </div>
                        <div class="vip-userMessage">
                            <p class="user-title clearfix">
                                <em class="user-title-inner">
                                    zhangxiaowen007
                                </em>
                                <a href="//vip.iqiyi.com/upgrade.html" target="_blank">
                                    <!-- 灰色无等级皇冠 -->
                                    <i class="qyvr-gray qyv-rank">
                                    </i>
                                </a>
                            </p>
                            <!-- 不是会员 或者 会员过期时 按钮文案替换为 立即开通VIP -->
                            <p class="timeRemind">
                                您尚未开通任何VIP套餐
                            </p>
                            <a href="http://serv.vip.iqiyi.com/order/preview.action?pid=a0226bd958843452&fc=bdd74f057b2b10ac"
                            target="qiyiVip" class="moneyBtn" rseat="c75737_open" data-vipPay-ele="vipPayBtn"
                            data-fcVal="bdd74f057b2b10ac">
                                立即开通VIP
                            </a>
                        </div>
                    </div>
                    <div class="vip-right">
                        <div class="vip-progressBar">
                            <a href="//vip.iqiyi.com/upgrade.html" class="growLeft">
                                <!-- 灰色带等级皇冠 等级1 qyvipr-gray1 等级2 qyvipr-gray2 依次类推 -->
                                <i class="icon-qyvip qyvipr-gray1" style="display:block;" data-vip-currentlevel="level">
                                </i>
                            </a>
                            <div class="vguc_line-out">
                                <!-- 当成长值为 0 时 display:none; -->
                                <div class="vguc_line-info" style="display: none;" data-growthvalue="nozero">
                                    <div class="vipbg">
                                    </div>
                                    <span class="vguc-line">
                                        <span class="vgc_grow">
                                            成长值
                                            <em data-vip-growthvalue="nozero">
                                                0
                                            </em>
                                            <i class="vgc_grow-arrow" data-vipuser-message="speedGif">
                                            </i>
                                            <i class="arrBottom">
                                            </i>
                                            <i class="arrBottom_inner">
                                            </i>
                                        </span>
                                    </span>
                                </div>
                                <!-- 当成长值为 0 时 display：block; 会员状态 vip-grow-zero 非会员状态 grow-zero -->
                                <span class="grow-zero" data-growthvalue="zero">
                                    成长值
                                    <em class="ml10">
                                        0
                                    </em>
                                </span>
                            </div>
                            <a style="display:block;" href="//vip.iqiyi.com/upgrade.html" class="growRight">
                                <!-- 灰色带等级皇冠 等级1 qyvipr-gray1 等级2 qyvipr-gray2 依次类推 -->
                                <i class="icon-qyvip qyvipr-gray2" style="display:block;" data-vip-reachlevel="level">
                                </i>
                            </a>
                        </div>
                        <div class="signIn-btn">
                            <a href="javascript:;" rseat="c75737_checkin" class="signClick    signClick-gray "
                            data-vip-sign="in" data-vip-level="2" data-vip-nextValue="1.6666666666666667"
                            data-vip-value="0" data-vip-maxValue="300" data-vip-isnongvalue="gvalue"
                            data-signEnabled="false">
                                <i class="icon-signIn" rseat="c75737_checkin">
                                </i>
                                <span class="signed-text">
                                    今日已签到
                                </span>
                                <em class="signIn-text" rseat="c75737_checkin">
                                    签到
                                </em>
                            </a>
                            <div class="growQuestion">
                                <i class="icon-questionMark">
                                </i>
                                <a href="http://vip.iqiyi.com/upgrade.html" target="_blank" rseat="c75737_levelinfo"
                                class="growQuestion-text">
                                    什么是成长等级？
                                </a>
                            </div>
                            <em class="czz_add  fadeOut" style="display: none;" data-vipuser-message="animate"
                            data-private-display="inline-block">
                                成长值+5
                            </em>
                        </div>
                    </div>
                </div>
                <!-- 个人中心 VIP 进度条 结束 -->
                <div class="mod-mainWrap">
                    <!-- 右侧内容 开始 -->
                    <div class="custom-main-outer">
                        <div class="custom-main-inner">
                            <div class="custom-main-wrapper-cols">
                                <!-- tab 签 开始 -->
                                <div class="mod-mainRt-title">
                                    <ul class="tab-title">
                                        <li class="selected">
                                            <a href="http://www.iqiyi.com/u/accountset" class="title-text">
                                                基本信息
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab 签 结束 -->
                                <div class="mod-mainRt-con">
                                    <!-- 昵称信息 开始 -->
                                    <div id="widget-logininfo">
                                        <div class="usrSetting-wrap clearfix">
                                            <a href="javascript:void;" class="fl userSetting-head">
                                                <img width="80" height="80" src="picture/male-70.png" alt="" data-logininfo-elem="iconImg">
                                                <div class="userSetting-changehead" data-logininfo-elem="changeiconbtn">
                                                    更换头像
                                                </div>
                                            </a>
                                            <div class="fl ml30">
                                                <div class="userSetting-item  userName" data-logininfo-elem="nicknameline">
                                                    <span class="vl-inline">
                                                        <em class="mainColor">
                                                            昵称：
                                                        </em>
                                                        <em class="mainColor" data-logininfo-elem="nickname">
                                                            zhangxiaowen007
                                                        </em>
                                                        <input class="input-common input-size-small mb5" type="text" data-logininfo-elem="nicknamein"
                                                        placeholder="" style="display:none;">
                                                    </span>
                                                    <span class="vl-inline ml10">
                                                        <a class="disabled" href="javascript:;">
                                                            修改
                                                        </a>
                                                        <a class="btn-care btn-care-normal" href="javascript:void(0);" data-logininfo-elem="savenickname"
                                                        style="display:none;">
                                                            <span class="btn-care_tx btn-care_tx-care">
                                                                保存
                                                            </span>
                                                        </a>
                                                    </span>
                                                    <span class="vl-inline ml10 h-16">
                                                        <i class="userSetting_icon userSetting_icon-phone" title='手机账号登陆'>
                                                        </i>
                                                    </span>
                                                    <span class="c-999 ml10">
                                                        (24小时内只能修改一次)
                                                    </span>
                                                    <span class="vl-inline ml10 dn" j-delegate="verifyPhone">
                                                        <a class="accProt-tips-txt" href="javascript:void(0);">
                                                            您的帐号存在安全风险，点此加强帐号保护&gt;
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="userSetting-item">
                                                    <span class="vl-inline">
                                                        会员类型:
                                                        <a href="http://vip.iqiyi.com" target="_blank" data-vipheader-elem="vipicon"
                                                        class="qyv-rank qyvr-gray">
                                                        </a>
                                                        您还不是vip会员
                                                    </span>
                                                    <a class="renew-btn" href="" data-vipPay-ele="vipPayBtn" data-fcVal="bdd74f057b2b10ac">
                                                        立即开通VIP
                                                    </a>
                                                </div>
                                                <div class="userSetting-item">
                                                    <span class="vl-inline">
                                                        UID：1455686071
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mainRt-safeSetting">
                                            <ul class="safeSettingList">
                                                <li>
                                                    <!-- 手机未绑定 -->
                                                    <div data-logininfo-phonestate="nobind" style="display:none;">
                                                        <div class="safeSettingList-lf">
                                                            <a href="http://passport.iqiyi.com/pages/secure/account/bind_phone.action">
                                                                <i class="icon-safeSettingList icon-mobilePhone mobilePhone-notBound ">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="safeSettingList-rt">
                                                            <p class="type-text">
                                                                <a href="http://passport.iqiyi.com/pages/secure/account/bind_phone.action"
                                                                class="color-green ml15" title="立即绑定">
                                                                    立即绑定
                                                                </a>
                                                            </p>
                                                            <p class="type-text">
                                                                您可以享受手机相关的登录，安全及提醒服务
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- 手机已绑定 -->
                                                    <div data-logininfo-phonestate="binded">
                                                        <div class="safeSettingList-lf">
                                                            <a href="http://passport.iqiyi.com/pages/secure/account/modify_phone_index.action">
                                                                <i class="icon-safeSettingList icon-mobilePhone">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div class="safeSettingList-rt">
                                                            <p class="type-text">
                                                                <a href="javascript:void;" class="mobilePhone-state">
                                                                    手机已验证
                                                                </a>
                                                            </p>
                                                            <p class="type-text" data-logininfo-elem="phone">
                                                                +86 176****8300
                                                                <a href="http://passport.iqiyi.com/pages/secure/account/modify_phone_index.action"
                                                                rseat="1411251_altmbl" class="color-green ml15">
                                                                    修改手机号
                                                                </a>
                                                            </p>
                                                            <p class="type-text">
                                                                您可以享受手机相关的登录，安全及提醒服务
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="safeSettingList-lf">
                                                        <a href="http://passport.iqiyi.com/pages/secure/password/modify_pwd.action">
                                                            <i class="icon-safeSettingList icon-lock">
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <div class="safeSettingList-rt">
                                                        <p class="type-text lockType-text">
                                                            <a href="http://passport.iqiyi.com/pages/secure/password/modify_pwd.action"
                                                            title="更改密码" class="mobilePhone-state">
                                                                修改密码
                                                            </a>
                                                        </p>
                                                        <p class="type-text">
                                                            可以通过邮箱，手机修改密码
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="widget-otherinfo">
                                        <div class="userSetting-setWrap">
                                            <div class="userSetting-setWrap-item odd" data-otherinfo-line="gender">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        性别：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="vl-inline">
                                                        <label class="radio-item  mr10 radio-selected" data-line-elem="genderin"
                                                        data-pcradio-selectedclass="radio-selected" data-pcradio-name="gender"
                                                        data-pcradio-value="1">
                                                            <i class="site-icons icon-radio">
                                                            </i>
                                                            <span class="title">
                                                                男
                                                            </span>
                                                        </label>
                                                        <label class="radio-item " data-line-elem="genderin" data-pcradio-selectedclass="radio-selected"
                                                        data-pcradio-name="gender" data-pcradio-value="0">
                                                            <i class="site-icons icon-radio">
                                                            </i>
                                                            <span class="title">
                                                                女
                                                            </span>
                                                        </label>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            男
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            修改
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="userSetting-setWrap-item even" data-otherinfo-line="blood">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        血型：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="bloodtype">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            未设置
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            设置
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="userSetting-setWrap-item odd" data-otherinfo-line="birthday">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        生日：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="checkBox_wrap checkBox_wrap-min clearfix" data-line-elem="yearin">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="mainColor mr5">
                                                        &nbsp;年
                                                    </span>
                                                    <span class="checkBox_wrap checkBox_wrap-min clearfix" data-line-elem="monthin">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="mainColor mr5">
                                                        &nbsp;月
                                                    </span>
                                                    <span class="checkBox_wrap checkBox_wrap-min clearfix" data-line-elem="dayin">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="mainColor mr5">
                                                        &nbsp;日
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            未设置
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            设置
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="userSetting-setWrap-item even" data-otherinfo-line="location">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        居住地：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="checkBox_wrap checkBox_wrap-normal checkBox_wrap-selected mr10 clearfix"
                                                    data-line-elem="provincein">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="cityin">
                                                        <span data-pcselect-elem="handler">
                                                            <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                请选择
                                                            </span>
                                                            <span class="checkBoxBtn">
                                                            </span>
                                                        </span>
                                                        <ul class="checkBoxList" style="display:none;" data-pcselect-elem="optionList">
                                                        </ul>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            未设置
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            设置
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="userSetting-setWrap-item odd" data-otherinfo-line="qq">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        QQ：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="vl-inline item-input">
                                                        <input class="input-common" type="text" placeholder="请填写你的QQ号" data-line-elem="qqin">
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            未设置
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            设置
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
											<div class="userSetting-setWrap-item odd" data-otherinfo-line="qq">
                                                <span class="vl-inline item-title">
                                                    <label for="">
                                                        邮箱：
                                                    </label>
                                                </span>
                                                <span data-line-elem="editline" style="display:none;">
                                                    <span class="vl-inline item-input">
                                                        <input class="input-common" type="text" placeholder="请填写你的QQ号" data-line-elem="qqin">
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="cancel">
                                                            取消
                                                        </a>
                                                        <a class="ml10" href="javascript:;" data-line-elem="save">
                                                            保存
                                                        </a>
                                                    </span>
                                                </span>
                                                <span data-line-elem="displayline">
                                                    <span class="vl-inline">
                                                        <em class="c666" data-line-elem="display">
                                                            未设置
                                                        </em>
                                                    </span>
                                                    <span class="item-opt">
                                                        <a href="javascript:;" data-line-elem="edit">
                                                            设置
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="userSetting-setWrap item-tip-lineFeed">
                                            <div data-otherinfo-block="university">
                                                <div class="userSetting-setWrap-item even" data-block-elem="linetemplate"
                                                style="display:none;">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            大学：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input  mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal mr5 clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-large clearfix" data-line-elem="facultyin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default">
                                                                    请选择院系
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                北京XXXX大学-2000级-XXXX学院
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                修改
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="userSetting-setWrap-item even" data-block-elem="line">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            大学：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin"
                                                            value="">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal mr5 clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-large clearfix" data-line-elem="facultyin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                    请选择院系
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                未设置
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add" style="display:none">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                设置
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div data-otherinfo-block="high">
                                                <div class="userSetting-setWrap-item odd" data-block-elem="linetemplate"
                                                style="display:none;">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            高中：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                北京XXXX中学-1998级
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                修改
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="userSetting-setWrap-item odd" data-block-elem="line">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            高中：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin"
                                                            value="">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                未设置
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add" style="display:none">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                设置
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div data-otherinfo-block="middle">
                                                <div class="userSetting-setWrap-item even" data-block-elem="linetemplate"
                                                style="display:none;">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            初中：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                北京XXXX中学-1998级
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                修改
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="userSetting-setWrap-item even" data-block-elem="line">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            初中：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input  mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin"
                                                            value="">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                未设置
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add" style="display:none">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                设置
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div data-otherinfo-block="primary">
                                                <div class="userSetting-setWrap-item odd" data-block-elem="linetemplate"
                                                style="display:none;">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            小学：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                北京XXXX小学-1998级
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                修改
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="userSetting-setWrap-item odd" data-block-elem="line">
                                                    <span class="vl-inline item-title">
                                                        <label for="">
                                                            小学：
                                                        </label>
                                                    </span>
                                                    <span data-line-elem="editline" style="display:none;">
                                                        <span class="vl-inline item-input mr5">
                                                            <input class="input-common" type="text" placeholder="请选择学校" data-line-elem="schoolin"
                                                            value="">
                                                        </span>
                                                        <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-line-elem="yearin">
                                                            <span data-pcselect-elem="handler">
                                                                <span class="checkBox checkBox_wrap-default" data-line-elem="value">
                                                                    入学时间
                                                                </span>
                                                                <span class="checkBoxBtn">
                                                                </span>
                                                            </span>
                                                            <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                                            </ul>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="remove">
                                                                删除
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="save">
                                                                保存
                                                            </a>
                                                        </span>
                                                    </span>
                                                    <span data-line-elem="displayline">
                                                        <span class="vl-inline">
                                                            <em class="c666" data-line-elem="display">
                                                                未设置
                                                            </em>
                                                        </span>
                                                        <span class="item-opt">
                                                            <a href="javascript:;" data-line-elem="add" style="display:none">
                                                                +添加
                                                            </a>
                                                            <a class="ml10" href="javascript:;" data-line-elem="edit">
                                                                设置
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="light-tips" data-widget-mobiletips="lighttips" style="position: static; top: 0px; left: 0px; z-index: 5555; display: none;">
                                    <p>
                                        <a href="" class="light-tips_close" data-mobiletips-elem="close">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 个人中心左侧导航栏 开始 -->
                    <div class="custom-main-left-side" id="uc-leftBar">
                        <div class="side-top-tr" data-leftnav-elem="content">
                            <div class="mod-side_menu">
                                <dl class="mod-menu">
                                    <dd>
                                        <div class="tle  ">
                                            <a href="http://www.iqiyi.com/u/record" rseat="lnav75737_record" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    播放记录
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle  ">
                                            <a href="http://www.iqiyi.com/u/sub" rseat="lnav75737_sub" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    我的订阅
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle ">
                                            <a href="http://www.iqiyi.com/u/fav" rseat="lnav75737_fav" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    追剧&收藏
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle ">
                                            <a href="http://www.iqiyi.com/u/news/update" rseat="lnav75737_news" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    我的消息
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle ">
                                            <a href="http://www.iqiyi.com/u/1455686071" rseat="lnav75737_spacem" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    我的空间
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle  selected">
                                            <a href="http://www.iqiyi.com/u/accountset" rseat="612211_setting" class="link">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    个人设置
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                </dl>
                                <div class="user_line">
                                </div>
                                <dl class="mod-menu">
                                    <dd>
                                        <div class="tle" data-leftbar-elem="menu">
                                            <a href="javascript:void(0)" class="link" rseat="lnav75737_vip" data-menu-elem="title">
                                                <i class="ff-icon">
                                                    
                                                </i>
                                                <span class="menu-text">
                                                    VIP会员
                                                </span>
                                            </a>
                                            <!-- 展开时去掉 dn 追加 link-click-open 类名 ，关闭时将 link-click-open 替换为 link-click-close
                                            类名 -->
                                            <ul class="mod-mene-sub" style="display: none;" data-menu-elem="body"
                                            data-menu-show="hide">
                                                <li class="pt10">
                                                    <a href="http://vip.iqiyi.com/" rseat="lnav75737_vippkg" target="_blank"
                                                    class="mene-sub-title">
                                                        我的VIP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="//vip.iqiyi.com/upgrade.html" rseat="lnav75737_vipclub" target="_blank"
                                                    class="mene-sub-title">
                                                        VIP俱乐部
                                                    </a>
                                                </li>
                                                <li class="pb10">
                                                    <a href="http://vip.iqiyi.com/jihuoma.html" class="mene-sub-title" target="_blank"
                                                    rseat="lnav75737_vipact">
                                                        激活会员卡
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle ">
                                            <a href="https://payweb.iqiyi.com/mywallet.html" rseat="lnav75737_account"
                                            class="link" target="_blank">
                                                <i class="icon-personalCenterNav icon-wallt">
                                                </i>
                                                <span class="menu-text">
                                                    我的钱包
                                                </span>
                                            </a>
                                        </div>
                                    </dd>
                                </dl>
                                <div class="user_line">
                                </div>
                                <dl class="mod-menu">
                                    <dd>
                                        <div class="tle" data-leftbar-elem="menu">
                                            <a href="javascript:void(0)" class="link" rseat="612211_author" data-menu-elem="title">
                                                <i class="icon-personalCenterNav icon-creation">
                                                </i>
                                                <span class="menu-text">
                                                    创作中心
                                                </span>
                                            </a>
                                            <ul class="mod-mene-sub" style="display: none;" data-menu-elem="body"
                                            data-menu-show="hide">
                                                <li class="pt10 ">
                                                    <a href="http://www.iqiyi.com/u/video" rseat="lnav75737_videoMng" class="mene-sub-title">
                                                        视频管理
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="http://www.iqiyi.com/u/live" rseat="607111_1" class="mene-sub-title">
                                                        直播管理
                                                    </a>
                                                </li>
                                                <li class="pb10 ">
                                                    <a href="http://www.iqiyi.com/u/a/video" rseat="704281_data" class="mene-sub-title">
                                                        数据管理
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd>
                                        <div class="tle  " data-leftbar-elem="menu">
                                            <a href="javascript:void(0)" class="link" rseat="612211_highlight" data-menu-elem="title">
                                                <i class="icon-personalCenterNav  icon-rim">
                                                </i>
                                                <span class="menu-text">
                                                    精彩周边
                                                </span>
                                            </a>
                                            <!-- 展开时去掉 dn 追加 link-click-open 类名 ，关闭时将 link-click-open 替换为 link-click-close
                                            类名 -->
                                            <ul class="mod-mene-sub" style="display: none;" data-menu-elem="body"
                                            data-menu-show="hide">
                                                <li class="pt10">
                                                    <a href="http://vip.game.iqiyi.com/index.php?r=UserGrowth/myCenter/myGame"
                                                    rseat="lnav75737_game" class="mene-sub-title" target="_blank">
                                                        游戏
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://wenxue.iqiyi.com/book/shelf.html" rseat="612211_shelf"
                                                    class="mene-sub-title" target="_blank">
                                                        书架
                                                    </a>
                                                </li>
                                                <li class="pb10">
                                                    <a href="http://mall.iqiyi.com/shoppingcart.html?odfrm=pc_shoppingcart"
                                                    rseat="lnav75737_mall" class="mene-sub-title" target="_blank">
                                                        购物车
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <div class="user_line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 个人中心左侧导航栏改版 结束 -->
                </div>
            </div>
        </div>
        <!-- 二维码耳朵 start -->
        <div id="block-F" data-block-name="二维码耳朵">
            <div class="baseScrollBar0217" id="scrollBar-menus">
                <ul class="baseScrollBar0217_menus">
                    <li data-item="totop" data-totopbtn-time=100 data-totopbtn-max=200 class="dn">
                        <a href="javascript:;" class="baseToTop" rseat="702151_totop">
                            <i class="baseToTop-icon">
                            </i>
                            <span>
                                回到顶部
                            </span>
                        </a>
                    </li>
                    <li data-item="feedback" class="dn">
                        <a href="http://www.iqiyi.com/common/helpandsuggest.html?entry=uhome"
                        target="_blank" class="helpFeedback" rseat="702151_feedback_uhome">
                            <i class="helpFeedback-icon">
                            </i>
                            <span>
                                意见反馈
                            </span>
                        </a>
                    </li>
                    <li data-item="downloadmacorwin" class="dn">
                        <a href="http://app.iqiyi.com/pc/player/index.html#pcplayer" target="_blank"
                        class="pcaDown J_downloadMacOrWin" rseat="708141_downloadsw">
                            <i class="pcaDown-icon">
                            </i>
                            <span>
                                软件下载
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 二维码耳朵 end -->
        <!--分享优化-->
        <div data-widget-sharethirdparty="share" data-sharethirdparty-type="1"
        data-sharethirdparty-tvid="" data-sharethirdparty-albumid="" data-sharethirdparty-videoid=""
        style="display:none;">
            <div class="share20130417">
                <div class="share_web_panel">
                    <div class="share_hd">
                        <h2>
                            <a href="javascript:void(0);" class="logo_iqiyi">
                                爱奇艺
                            </a>
                        </h2>
                        <a href="javascript:void(0);" class="shutup" data-sharethirdparty-elem="close">
                            关闭
                        </a>
                    </div>
                    <div class="share_bd" data-sharethirdparty-panelelem="normal">
                        <!--comment_start-->
                        <div class="share-ipt clearfix">
                            <div class="user">
                                <img data-sharethirdparty-elem="avatar" width="64" height="64" src="picture/avatar-40.png">
                                <a class="btn_new btn_green_s" href="#" data-sharethirdparty-elem="login">
                                    <span class="left_pd">
                                        登&nbsp;录
                                    </span>
                                </a>
                                <span class="user-nick" data-sharethirdparty-elem="usernick" style="display:none">
                                    刘淼001
                                </span>
                            </div>
                            <div class="entry">
                                <textarea data-sharethirdparty-elem="input" maxlength="" placeholder="">
                                </textarea>
                                <p class="set" data-sharethirdparty-tipelem="normal" style="display:none">
                                    <span data-sharethirdparty-tipelem="rest">
                                        还可以输入
                                        <span data-sharethirdparty-tipinputelem="how">
                                            90
                                        </span>
                                        个字
                                    </span>
                                    <span data-sharethirdparty-tipelem="pass">
                                        已经超过
                                        <span data-sharethirdparty-tipelem="normal" class="red" data-sharethirdparty-tipinputelem="exceed">
                                            30
                                        </span>
                                        个字
                                    </span>
                                </p>
                                <p class="set" style="display:none" data-sharethirdparty-tipelem="noempty">
                                    <span class="red">
                                        内容不能为空
                                    </span>
                                </p>
                            </div>
                            <s>
                            </s>
                        </div>
                        <!--comment_end-->
                        <!--share_start-->
                        <div class="shareto" data-sharethirdparty-elem="sharethirdparty">
                            <span>
                                分享到：
                            </span>
                            <a data-sharethirdparty-elem="sharethirdpartyele" title="授权后，下次可以直接分享"
                            data-sharethirdparty-plattype="1" data-sharethirdparty-pt="wbVeri" href="http://passport.iqiyi.com/sns/oauth.php?source=1"
                            data-sharethirdparty-sourceid="2" data-sharethirdparty-href="http://passport.iqiyi.com/oauth/login.php?type=2&isiframe=1"
                            class="fx-icon icon-weibo">
                                <span data-sharethirdparty-elem="sharestatus" title="授权后，下次可以直接分享" class="out">
                                </span>
                            </a>
                            <a data-sharethirdparty-elem="sharethirdpartyele" href="http://passport.iqiyi.com/sns/oauth.php?source=2"
                            data-sharethirdparty-sourceid="4" data-sharethirdparty-href="http://passport.iqiyi.com/oauth/login.php?type=4&isiframe=1"
                            data-sharethirdparty-pt="qqVeri" title="授权后，下次可以直接分享" data-sharethirdparty-plattype="2"
                            href="javascript:void(0);" class="fx-icon icon-qzone">
                                <span data-sharethirdparty-elem="sharestatus" class="out">
                                </span>
                            </a>
                            <a title="授权后，下次可以直接分享" href="http://passport.iqiyi.com/sns/oauth.php?source=3"
                            data-sharethirdparty-pt="qweibo" data-sharethirdparty-elem="sharethirdpartyele"
                            data-sharethirdparty-plattype="3" data-sharethirdparty-sourceid="4" data-sharethirdparty-href="http://passport.iqiyi.com/oauth/login.php?type=4&isiframe=1"
                            class="fx-icon icon-qweibo">
                                <span data-sharethirdparty-elem="sharestatus" class="out">
                                </span>
                            </a>
                            <a title="授权后，下次可以直接分享" data-sharethirdparty-elem="sharethirdpartyele"
                            data-sharethirdparty-plattype="4" data-sharethirdparty-pt="rrVeri" href="http://passport.iqiyi.com/sns/oauth.php?source=4"
                            class="fx-icon icon-renren" data-sharethirdparty-sourceid="3" data-sharethirdparty-href="http://passport.iqiyi.com/oauth/login.php?type=3&isiframe=1">
                                <span data-sharethirdparty-elem="sharestatus" class="out">
                                </span>
                            </a>
                            <a title="授权后，下次可以直接分享" href="http://passport.iqiyi.com/sns/oauth.php?source=6"
                            data-sharethirdparty-elem="sharethirdpartyele" data-sharethirdparty-plattype="5"
                            data-sharethirdparty-pt="kxVeri" class="fx-icon icon-kaixin" data-sharethirdparty-sourceid="6"
                            data-sharethirdparty-href="http://passport.iqiyi.com/oauth/login.php?type=6&isiframe=1">
                                <span data-sharethirdparty-elem="sharestatus" class="out">
                                </span>
                            </a>
                            <a data-sharethirdparty-elem="sharethirdpartyele" data-sharethirdparty-plattype="7"
                            href="javascript:void(0);" data-sharethirdparty-pt="qitan" style="display:none"
                            class="fx-icon icon-qitan">
                                <span data-sharethirdparty-elem="sharestatus" class="out">
                                </span>
                            </a>
                            <div class="b-arrow" data-sharethirdparty-elem="mustselect">
                            </div>
                        </div>
                        <!--share_end-->
                        <!--pic_list-->
                        <div class="sharepic clearfix">
                            <ul class="piclist12080">
                                <li data-sharethirdparty-elem="sharepic">
                                    <a href="javascript:void(0)">
                                        <img src="" width="160" height="90">
                                        <span class="close" data-sharethirdparty-elem="sharepicclose">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <div class="share-btn" data-sharethirdparty-elem="sharebtn">
                                <a class="btn_new btn_orange_l" href="javascript:void(0);">
                                    <span class="left_pd">
                                        立即分享
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--pis_end-->
                    </div>
                    <div class="share_bd" data-sharethirdparty-panelelem="fail" style="display:none">
                        <div class="tips tips_2" data-sharethirdparty-failretry="retry">
                            <h3>
                                <i class="icon_wrong">
                                </i>
                                有内容分享失败了
                            </h3>
                            <div class="fx-fail" data-sharethirdparty-failplat="fail">
                                <span>
                                    以下平台
                                </span>
                                <a style="display:none" href="javascript:void(0);" class="fx-icon icon-weibo"
                                data-sharethirdparty-plattype="1">
                                </a>
                                <a style="display:none" href="javascript:void(0);" data-sharethirdparty-plattype="2"
                                class="fx-icon icon-qzone">
                                </a>
                                <a data-sharethirdparty-plattype="3" style="display:none" href="javascript:void(0);"
                                class="fx-icon icon-qweibo">
                                </a>
                                <a href="javascript:void(0);" style="display:none" data-sharethirdparty-plattype="4"
                                style="display:none" class="fx-icon icon-renren">
                                </a>
                                <a href="javascript:void(0);" style="display:none" data-sharethirdparty-plattype="5"
                                class="fx-icon icon-kaixin">
                                </a>
                                <a href="javascript:void(0);" style="display:none" data-sharethirdparty-plattype="6"
                                style="display:none" class="fx-icon icon-qitan">
                                </a>
                                <span>
                                    分享失败了，
                                    <a href="javascript:void(0);" class="green" data-sharethirdparty-elem="retry"
                                    data-sharethirdparty-retryBtn="retry">
                                        再试一次?
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="tips tips_3" style="display:none" data-sharethirdparty-failloading="loading">
                            <h3>
                                <img src="picture/load.gif">
                                &nbsp;
                                <span>
                                    正在为您重新提交，请稍后
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="share_bd" data-sharethirdparty-panelelem="success" style="display:none">
                        <div class="tips">
                            <h3 class="fwb">
                                <i class="icon_right">
                                </i>
                                恭喜您，内容已成功分享至以下平台
                            </h3>
                            <div class="shareto share_success" data-sharethirdparty-successplat="success">
                                <a href="javascript:void(0);" class="fx-icon icon-weibo" data-sharethirdparty-plattype="1"
                                style="display:none">
                                    <span class="in">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="fx-icon icon-qzone" style="display:none"
                                data-sharethirdparty-plattype="2">
                                    <span class="in">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="fx-icon icon-qweibo" data-sharethirdparty-plattype="3"
                                style="display:none">
                                    <span class="out">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" data-sharethirdparty-plattype="4" style="display:none"
                                class="fx-icon icon-renren">
                                    <span class="out">
                                    </span>
                                </a>
                                <a style="display:none" data-sharethirdparty-plattype="5" href="javascript:void(0);"
                                class="fx-icon icon-kaixin">
                                    <span class="out">
                                    </span>
                                </a>
                                <a data-sharethirdparty-plattype="7" style="display:none" href="javascript:void(0);"
                                class="fx-icon icon-qitan">
                                    <span class="out">
                                    </span>
                                </a>
                            </div>
                            <div class="sh-friend" data-sharethirdparty-shareele="friend" style="display:none">
                                你的好友
                                <span data-sharethirdparty-friend="share">
                                </span>
                                也分享了该视频
                                <span data-sharethirdparty-sharetxt="also" style="display:none">
                                    ，他们还分享了
                                </span>
                            </div>
                            <h2 class="title_h fwb" data-sharethirdparty-sharetxt="all" style="display:none">
                                大家在分享
                            </h2>
                            <!--pic_list-->
                            <div class="sharepic clearfix sharepic_1">
                                <ul class="piclist14590 clearfix" data-sharethirdparty-sharelist="list">
                                </ul>
                            </div>
                            <!--pis_end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--微信分享-->
        <div class="pointPop_con619" data-widget-sharethirdparty="weixin" data-sharethirdparty-type="url"
        data-sharethirdparty-videoname="的个人空间内容不错，推荐去看看" style="display:none;"
        data-sharethirdparty-url="http://www.iqiyi.com/u/1455686071">
            <h3>
                分享到
                <span data-sharethirdparty-pf="pf">
                    微信
                </span>
                <a href="#" data-sharethirdparty-ele="close" class="np_btn btn_close">
                </a>
            </h3>
            <div class="pointPop_content">
                <h4 data-sharethirdparty-ele="videoname">
                </h4>
                <p class="title_wx">
                    将个人空间分享给
                    <span data-sharethirdparty-pf="pf">
                        微信
                    </span>
                    好友或
                    <span data-sharethirdparty-pf="pf">
                        微信
                    </span>
                    好友圈。
                </p>
                <p>
                    <a style="position:relative;z-index:10;" href="#" data-sharethirdparty-ele="ptcls"
                    class="wx-code">
                        <img src="" data-sharethirdparty-ele="qrimage">
                    </a>
                </p>
                <p>
                    使用
                    <span data-sharethirdparty-pf="pf">
                        微信
                    </span>
                    扫一扫
                </p>
            </div>
            <!--微信图片-->
            <div class="guide_positon" data-sharethirdparty-ele="weixinfly">
                <img src="picture/453be18f554d4fb494788a828ca65212.png" />
            </div>
            <!--ie6微信图片-->
            <div class="guide_positon" data-sharethirdparty-ele="ie6weixin">
                <img src="picture/84cdf6ca64db4ac29fcc8e6c3c96a20d.jpg" />
            </div>
            <!--易信图片-->
            <div class="guide_positon" data-sharethirdparty-ele="yixinfly">
                <img src="picture/34224c20a9cf49f3b838f272a94ef524.png" />
            </div>
            <!--ie6易信图片-->
            <div class="guide_positon" data-sharethirdparty-ele="ie6yixinfly">
                <img src="picture/c623fea13a9246439faf1b02f3123126.jpg" />
            </div>
            <div class="guideTrigger" data-sharethirdparty-ele="anim">
            </div>
        </div>
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
        <div style="display:none" id="i18nWebSelTip">
        </div>
        <!-- 修改手机号弹出框 开始 -->
        <div class="modifiedNum_wrap" style="display:none;" id="J_update-phoneNum">
            <div class="modifiedNum_closed">
                <a href="#" id="J_layV-closed">
                    ×
                </a>
            </div>
            <div class="modifiedNum_title modifiedNum_width110">
                <span class="emailIcon modifiedNum_title_iconM fl">
                </span>
                <span class="modifiedNum_title_con fl">
                    修改手机号
                </span>
            </div>
            <div class="modifiedNum_detail">
                <div class="modifiedNum_detail_note">
                    温馨提示：为了保护您的帐号安全，修改手机号前请先进行安全验证。
                </div>
                <div class="pop_content">
                    <div class="setting_itemNew pr martop20">
                        <label class="setting_label" for="">
                            原手机号码：
                        </label>
                        <input class="setting_input" type="text" id="J_phone-num" data-info="17610168300">
                        <span class="icheckingEmail left95" style="visibility: visible;">
                            176****8300
                        </span>
                    </div>
                    <div id="correctCode" class="setting_itemNew martop20 pr clearfix">
                        <div class="fl">
                            <label class="setting_label fl" for="">
                                短信校验码：
                            </label>
                            <div class="inputValue">
                                <input class="setting_input input110" type="text" id="J_code-inp">
                            </div>
                        </div>
                        <div class="fl marLeft11">
                            <a href="javascript:void(0)" class="getCode" id="J_get-code">
                                获取短信校验码
                            </a>
                            <a href="javascript:void(0)" class="getCode dn" id="J-reGet-code">
                                重新获取校验码
                            </a>
                            <a href="javascript:void(0)" class="getCode regetCode dn" id=J_time-info>
                                <span id="J_num-time">
                                    29
                                </span>
                                秒后重新发送
                            </a>
                        </div>
                        <div class="fl">
                            <span class="incorrectCode dn" id="J_warn-info">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text_ie textAlignCenter clearfix">
                    <a href="#" class="pc-btn pc-btn-green pc-btn-fillet pc-btn-width124"
                    id="J_submit-phoneNum" rseat="1411251_3">
                        立即验证
                    </a>
                </div>
                <div class="comfirmedIssue popLiColor martop25">
                    <ul>
                        <li>
                            若您的原手机号已经无法接收短信，请拨打客服电话400-800-7171完成手机号修改。
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 修改手机号弹出框 结束 -->
        <!-- 更换手机成功框 开始 -->
        <div style="width:178px;display:none;" class="mod-popupWrap" id="widget-replaceSucBox">
            <div class="mod-popup">
                <div class="popup_inner">
                    <div class="fs18 p20 green">
                        <i class="site-icons icon-ok">
                        </i>
                        <span>
                            更换成功！
                        </span>
                    </div>
                </div>
            </div>
            <span class="popup_vm">
            </span>
        </div>
        <!-- 更换手机成功框 结束 -->
        <!-- 验证用户信息 开始 -->
        <div id="widget-vertifyPwdbox" class="accountCenter_pop_inner accountCenter_pop_inner-small accountCenter_pop_inner_change"
        style="position: static;display: none;">
            <div class="accountCenter_pop_inner_closeBtn">
                <a href="javascript:void(0);" data-vertifypwdbox-elem="close" class="btn-close-popup">
                    ×
                </a>
            </div>
            <h1 class="tc">
                <i class="icon-cellphone mr5">
                </i>
                <span class="vl-inline">
                    请验证您的登录信息
                </span>
            </h1>
            <div class="mb5">
                <label class="setting-item mainColor">
                </label>
                <span class="red" data-vertifypwdbox-elem="notice">
                </span>
            </div>
            <div class="inputlist_item">
                <label class="setting-item mainColor">
                    手机号码：
                </label>
                <span class="user_number mainColor" data-vertifypwdbox-elem="mobilenum">
                </span>
            </div>
            <div class="inputlist_item">
                <label class="setting-item mainColor">
                    密码：
                </label>
                <input type="password" data-vertifypwdbox-elem="pwd" placeholder="请输入您当前的登录密码..."
                class="input-common input-common-small">
            </div>
            <div class="inputlist_item mt20 tr">
                <a class="fs14 mainColor mr20 vl-inline" href="#" title="取消" data-vertifypwdbox-elem="cancel">
                    取消
                </a>
                <a href="#" class="site-btn site-btn-green" data-vertifypwdbox-elem="next">
                    下一步
                </a>
            </div>
        </div>
        <!-- 验证用户信息 结束 -->
        <!-- 绑定手机弹层 开始 -->
        <div class="accountCenter_pop_inner accountCenter_pop_inner-small" id="widget-bindphonebox"
        style="display:none;position:static;">
            <div class="accountCenter_pop_inner_closeBtn" data-bindphonebox-elem="close">
                <a href="javascript:void(0);" class="btn-close-popup">
                    ×
                </a>
            </div>
            <h1 class="tc">
                <i class="icon-cellphone mr5">
                </i>
                <span class="vl-inline" data-bindphonebox-elem="title">
                    绑定手机号
                </span>
            </h1>
            <div class="mb5" data-bindphonebox-elem="noticeline" style="display:none;">
                <label class="setting-item mainColor">
                </label>
                <span class="red" data-bindphonebox-elem="notice">
                </span>
            </div>
            <div class="inputlist_item" data-bindphonebox-elem="mobileinputline">
                <label class="setting-item mainColor">
                    手机号码：
                </label>
                <input class="input-common input-common-small" type="text" placeholder="请输入您需要更换的新手机号"
                data-bindphonebox-elem="phonein">
            </div>
            <div class="inputlist_item" data-bindphonebox-elem="mobilecodeline">
                <label class="setting-item mainColor">
                    验证码：
                </label>
                <input class="input-common input-size-small" type="text" placeholder="请输入验证码"
                data-bindphonebox-elem="codein">
                <a class="green tdu ml5" href="javascript:;" title="免费获取验证码" data-bindphonebox-elem="getcode">
                    免费获取验证码
                </a>
                <span class="tip-gray ml5" data-bindphonebox-elem="codestatus" style="display:none;">
                    <span data-bindphonebox-elem="statustime">
                        60
                    </span>
                    秒后重新发送
                </span>
                <span class="red ml5" data-bindphonebox-elem="inputnotice" style="display:none;">
                    每天最多可发送3次
                </span>
            </div>
            <div class="inputlist_item" data-bindphonebox-elem="pwdline" style="display:none;">
                <label class="setting-item mainColor">
                    创建密码：
                </label>
                <input class="input-common input-size-small" type="password" placeholder="请输入密码"
                data-bindphonebox-elem="pwdin">
            </div>
            <div class="inputlist_item mt20 tr">
                <a class="fs14 mainColor mr20 vl-inline" href="#" title="取消" data-bindphonebox-elem="cancel">
                    取消
                </a>
                <a href="#" class="site-btn site-btn-green" data-bindphonebox-elem="bind">
                    立即绑定
                </a>
            </div>
        </div>
        <!-- 绑定手机弹层 结束 -->
        <div class="userSetting-pop" style="display:none;">
            <div id="widget-schoolselector" class="userSetting-pop_inner" style="width:545px;">
                <h3 class="pop_title">
                    <div class="title">
                        <em class="fs14 mainColor">
                            添加学校
                        </em>
                    </div>
                    <div class="closeBtn">
                        <a href="javascript:void(0);" class="btn-close-popup" data-schoolselector-elem="cancel">
                            ×
                        </a>
                    </div>
                </h3>
                <div class="popup-con clearfix">
                    <div class="leftCon">
                        <div class="mb10">
                            <div class="mb5">
                                <em class="red">
                                    *
                                </em>
                                <em class="fs14 mainColor">
                                    学校类型：
                                </em>
                            </div>
                            <div>
                                <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-schoolselector-elem="periodin">
                                    <span data-pcselect-elem="handler">
                                        <span class="checkBox checkBox_wrap-default">
                                            请选择
                                        </span>
                                        <span class="checkBoxBtn">
                                        </span>
                                    </span>
                                    <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="mb10">
                            <div class="mb5">
                                <em class="fs14 mainColor">
                                    学校所在地：
                                </em>
                            </div>
                            <div class="mb5">
                                <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-schoolselector-elem="provincein">
                                    <span data-pcselect-elem="handler">
                                        <span class="checkBox checkBox_wrap-default">
                                            请选择
                                        </span>
                                        <span class="checkBoxBtn">
                                        </span>
                                    </span>
                                    <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                    </ul>
                                </span>
                            </div>
                            <div>
                                <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-schoolselector-elem="cityin">
                                    <span data-pcselect-elem="handler">
                                        <span class="checkBox checkBox_wrap-default">
                                            请选择
                                        </span>
                                        <span class="checkBoxBtn">
                                        </span>
                                    </span>
                                    <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="mb10">
                            <div class="mb5">
                                <em class="red">
                                    *
                                </em>
                                <em class="fs14 mainColor">
                                    入学年份：
                                </em>
                            </div>
                            <div>
                                <span class="checkBox_wrap checkBox_wrap-normal clearfix" data-schoolselector-elem="yearin">
                                    <span data-pcselect-elem="handler">
                                        <span class="checkBox checkBox_wrap-default">
                                            请选择
                                        </span>
                                        <span class="checkBoxBtn">
                                        </span>
                                    </span>
                                    <ul class="checkBoxList" style="display: none" data-pcselect-elem="optionList">
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="mb10">
                            <div class="mb5">
                                <em class="red">
                                    *
                                </em>
                                <em class="fs14 mainColor">
                                    学校名称：
                                </em>
                            </div>
                            <div>
                                <input class="input-common input-size-small mr5" type="text" data-schoolselector-elem="schoolin"
                                placeholder="">
                            </div>
                            <a data-schoolselector-elem="noresult" href="javascript:;" class="noschool">
                                <i class="userSetting_icon-alert mr5">
                                </i>
                                <em class="vl-inline green">
                                    找不到我的学校
                                </em>
                            </a>
                        </div>
                        <div>
                            <a class="site-btn-small site-btn-green" href="#" title="提交" data-schoolselector-elem="submit">
                                提交
                            </a>
                        </div>
                    </div>
                    <div class="rightCon">
                        <div class="arrow">
                            <i class="arrow-inner">
                            </i>
                            <i class="arrow-outer">
                            </i>
                        </div>
                        <div class="letter_list" data-schoolselector-elem="initialin">
                        </div>
                        <div class="selectSchool-box">
                            <ul class="select-item" data-schoolselector-elem="schoollist">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 用户更换头像浮层-->
        <div class="upLoad_userHeadWrap" style="margin: 100px auto; display:none;"
        id="changeIconBox">
            <div class="upLoad_userHead-title">
                <p class="popupTitle">
                    更改头像
                </p>
                <a href="javascript:;" class="ff-icon popup-closeBtn" data-icon-elem="closebtn">
                    
                </a>
            </div>
            <div class="upLoad_userHead-con" id="widget-avatarform">
                <div class="upLoad_userHead-type pr clearfix">
                    <div class="userHead-lt">
                        <p class="largeImg">
                            <img data-avatarform-elem="defaultImg" src='/video/picture/male-70.png'>
                        </p>
                    </div>
                    <div class="userHead-rt">
                        <div>
                            <form class="userHead-upLoadBtn" method="post" enctype="multipart/form-data"
                            action="#" data-avatarform-elem="uploadForm" style="width: 124px; height: 32px; position: relative; overflow: hidden;">
                                <a href="#" class="site-btn-green" style="cursor: default;" data-avatarform-elem="uploadBtn">
                                    上传本地照片
                                </a>
                                <input type="file" name="icon" class="upload-btn-placeholder" data-avatarform-elem="uploader">
                            </form>
                        </div>
                        <p class="userHeadList-title">
                            您可以使用：
                        </p>
                        <div class="mod-scrollList-userHead pr clearfix" id="widget-slidewidget-0"
                        data-slide-name="childrenIndexSlide" data-slide-step="-1" data-slide-enablescroll="true"
                        data-slide-enabletouch="false" data-slide-lbtnclass="disabled" data-slide-rbtnclass="disabled"
                        data-slide-style="marginLeft" data-slide-dura="0" data-slide-disp="6">
                            <a href="javascript:void(0)" data-slide-elem="pbtn">
                                <i title="向前" rseat="left" class="scrollList_btn scrollList_leftBtn">
                                </i>
                            </a>
                            <a href="javascript:void(0)" data-slide-elem="nbtn">
                                <i title="向后" rseat="right" class="scrollList_btn scrollList_rightBtn">
                                </i>
                            </a>
                            <div class="userHead-scroll-bd" data-slide-elem="content">
                                <ul class="userHead-scroll-list" data-slide-elem="list" style="width: 2128px; margin-left: 0px;">
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                默认头像男
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                默认头像女
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male02-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                职场帅哥
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female02-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                呆萌MM
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male03-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                经济适用男
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female03-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                知性少女
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male04-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                呆萌GG
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female04-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                呆萌MM
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male05-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                斯文眼镜GG
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female05-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                乖巧可爱MM
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/male06-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                蒙面GG
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/female06-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                蒙面MM
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/headicon01-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                奇艺果子
                                            </a>
                                        </p>
                                    </li>
                                    <li data-delegate="pic">
                                        <p class="userHead-pic" data-icon-item="select">
                                            <a href="javascript:void(0)">
                                                <img src=picture/headicon02-130.png>
                                                <i class="userHead-shade">
                                                </i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)">
                                                毛茸茸
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-elem-avatarform="upload">
                    <p class="infoColor">
                        仅支持JPG、GIF、PNG，且文件小于1M
                    </p>
                    <div class="pupopBtnWrap">
                        <a href="#" class="userHeadPopup-saveBtn" style="display:none" data-avatarform-elem="submit">
                            保存
                        </a>
                        <a href="#" class="userHeadPopup-cancleBtn" style="display:none" data-avatarform-elem="cancel">
                            取消
                        </a>
                    </div>
                    <div class="settingImg_item">
                        <span class="maxImg dn " style="position: relative; overflow: hidden; width: 230px; height: 172px;margin-right:20px; ">
                            <img data-avatarform-elem="maxImg" init="http://www.qiyipic.com/common/fix/passport_images/passport70.png"
                            src='/video/picture/male-70.png' alt="">
                        </span>
                        <span class="largeImgWrap">
                            <span class="largeImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="largeImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                130*130
                            </p>
                        </span>
                        <span class="mediumImgWrap">
                            <span class="mediumImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="mediumImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                70*70
                            </p>
                        </span>
                        <span class="smallImgWrap">
                            <span class="smallImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="smallImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                50*50
                            </p>
                        </span>
                    </div>
                </div>
                <div data-elem-avatarform="default" class="dn">
                    <p class="infoColor mt15">
                        仅支持JPG、GIF、PNG，且文件小于1M
                    </p>
                    <div class="pupopBtnWrap">
                        <a href="#" class="userHeadPopup-saveBtn" style="display:none" data-avatarform-elem="submit">
                            保存
                        </a>
                        <a href="#" class="userHeadPopup-cancleBtn" style="display:none" data-avatarform-elem="cancel">
                            取消
                        </a>
                    </div>
                    <div class="settingImg_item">
                        <span class="maxImg dn" style="position: relative; overflow: hidden; width: 230px; height: 172px;">
                            <img data-avatarform-elem="maxImg" init="http://www.qiyipic.com/common/fix/passport_images/passport70.png"
                            src='picture/male-70.png' alt="">
                        </span>
                        <span class="largeImgWrap">
                            <span class="largeImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="largeImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                130*130
                            </p>
                        </span>
                        <span class="mediumImgWrap">
                            <span class="mediumImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="mediumImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                70*70
                            </p>
                        </span>
                        <span class="smallImgWrap">
                            <span class="smallImg" style="position: relative; overflow: hidden;">
                                <img data-avatarform-elem="smallImg" src='picture/male-70.png' alt=""
                                style="position: absolute; left: 0px; top: 0px; width: 100%;">
                            </span>
                            <p class="userHead-size">
                                50*50
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <span id="widget-targetuid" style="display:none;" data-targetuid-elem='1455686071'>
        </span>
    </body>
    <!-- End comScore Tag --》
</html>