<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>播放器</title>
</head>
<body> 
<div class="close_light_bg" id="close_light_bg"></div>
<!--极酷阳光播放器/代码开始-->
<script type="text/javascript" src="/video/js/swfobject.js"></script>
<div class="video" id="CuPlayer"><b><img src="/video/images/loading.gif"  /> 网页视频播放器加载中，请稍后...<a href="http://www.cuplayer.com/cuplayer" target="_blank">点此升级&gt;&gt;</a></b></div>
<script type="text/javascript">
var so = new SWFObject("/video/player.swf","ply","800","600","9","#000000");
so.addParam("allowfullscreen","true");
so.addParam("allowscriptaccess","always");
so.addParam("wmode","opaque");
so.addParam("quality","high");
so.addParam("salign","lt");
//播放器配置文件-----------------------------
so.addVariable("JcScpFile","/video/CuSunV4set.xml"); //配置文件地址

//-开播前广告参数-----------------------------
so.addVariable("ShowJcScpAFront","yes");
so.addVariable("JcScpCountDowns","7");
so.addVariable("JcScpCountDownsPosition","top-right");
so.addVariable("JcScpAFrontW","730");
so.addVariable("JcScpAFrontH","454");
so.addVariable("JcScpAFrontPath", "/video/other/a650x400_02.swf|/video/other/a650x400_02.swf");
so.addVariable("JcScpAFrontLink","/");


//-主视频-----------------------------
so.addVariable("JcScpVideoPath","/video/video/01.mp4");
so.addVariable("JcScpImg","/video/other/a730x454_03.jpg");

//-暂停广告-----------------------------
so.addVariable("ShowJcScpAPause","yes"); //是否显示暂停广告
so.addVariable("JcScpAPauseW","300"); //暂停广告地址
so.addVariable("JcScpAPauseH","250"); //暂停广告高度
so.addVariable("JcScpAPausePath","/video/other/a300x250_01.jpg|/video/other/a300x250_02.jpg"); //暂停广告地址
so.addVariable("JcScpAPauseLink",""); //暂停广告链接


so.write("CuPlayer");
</script>
<!--极酷阳光播放器/代码结束-->
</body>
</html>

