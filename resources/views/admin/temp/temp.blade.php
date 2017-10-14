<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/admin/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admin/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admin/css/app.css">
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/layer/layer.js"></script>
</head>
<body data-type="widgets">
    <script src="/admin/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/admin/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你,<span>{{ session('adminInfo') -> user_name }}</span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>
						
                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="/admin/logout">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/{{ session('adminInfo') -> face }}" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o @if(session('adminInfo') -> sex != 0 ) am-text-success @else am-text-danger @endif tpl-user-panel-status-icon"></i>
              {{ session('adminInfo') -> user_name }}
          </span>
                    <a href="/admin/user/{{ session('adminInfo') -> user_id }}/setpwd" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 修改密码</a>
					<a href="/admin/user/{{ session('adminInfo') -> user_id }}/editInfo" class="tpl-user-panel-action-link"> <span class="am-icon-cog"></span> 更多设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
				@if( session('adminInfo') -> auth > 0)
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 后台用户管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 管理员添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 管理员列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 前台用户管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 用户添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 用户列表
                            </a>
                        </li>
                    </ul>
                </li>
				@endif
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 分类管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/cate/create">
                                <span class="sidebar-nav-link-logo"></span> + 分类添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/cate">
                                <span class="sidebar-nav-link-logo"></span> ~ 分类列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 视频管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/video/create">
                                <span class="sidebar-nav-link-logo"></span> + 视频添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/video">
                                <span class="sidebar-nav-link-logo"></span> ~ 视频列表
                            </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 视频评论管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 视频评论列表
                            </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 视频广告管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 视频广告添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 视频广告列表
                            </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 轮播图管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 轮播图片添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 轮播图片列表
                            </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 网站公告管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 公告发布
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 公告列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 广告位管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 广告发布
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 广告列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 用户反馈管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 反馈列表列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 友情链接管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/user/create">
                                <span class="sidebar-nav-link-logo"></span> + 友情链接添加
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/user">
                                <span class="sidebar-nav-link-logo"></span> ~ 友情链接列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 网站系统配置
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/system/create">
                                <span class="sidebar-nav-link-logo"></span> ~ 网站配置添加
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="/admin/system">
                                <span class="sidebar-nav-link-logo"></span> ~ 网站配置列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
@section('content')
@show 
    </div>
    <script src="/admin/js/amazeui.min.js"></script>
    <script src="/admin/js/amazeui.datatables.min.js"></script>
    <script src="/admin/js/dataTables.responsive.min.js"></script>
    <script src="/admin/js/app.js"></script>

</body>

</html>