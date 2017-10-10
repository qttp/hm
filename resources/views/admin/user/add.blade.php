@extends('/admin/temp/temp')
@section('title','首页')
@section('content')
<style>
    .theme-black .tpl-form-border-form input[type="text"],.theme-black .tpl-form-border-form input[type="password"]{width:50%;display:inline-block;margin-right:5px;}
    marquee{color:#eee;padding:10px 10px 0;font-size:15px;}
</style>
<div class="tpl-content-wrapper">
    <div class="row">
        <marquee style="c">公告:fsdsdf</marquee>
    </div>
    <div class="row-content am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">
                            后台管理员添加
                        </div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog">
                            </a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <form  id="user_form" class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="/admin/user" enctype="multipart/form-data">
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    管理员级别
                                    <span class="tpl-form-line-small-title">
                                        Authority
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <select id="auth" data-am-selected="{searchBox: 0}" name="auth" style="display: none;">
                                        <option value="0">
                                            普通管理员
                                        </option>
                                        <option value="1">
                                            超级管理员
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user_name" class="am-u-sm-3 am-form-label">
                                    管理员账号
                                    <span class="tpl-form-line-small-title">
                                        Number
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="user_name" name="user_name" placeholder="请输入管理员账号" type="text">
                                    <small>
                                        请填写账号6~18位左右,(字母'开头',数字,下划线)
                                    </small>
                                </div>
                            </div>
							<div class="am-form-group">
                                <label for="nick_name" class="am-u-sm-3 am-form-label">
                                    管理员昵称
                                    <span class="tpl-form-line-small-title">
                                        Nick name
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="nick_name" name="nick_name" placeholder="请输入管理员昵称" type="text">
                                    <small>
                                        请填写昵称2~8位左右
                                    </small>
                                </div>
                            </div>
							<div class="am-form-group">
                                <label for="upwd" class="am-u-sm-3 am-form-label">
                                    管理员密码
                                    <span class="tpl-form-line-small-title">
                                        Password
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="upwd" name="upwd" placeholder="请输入管理员密码" type="password">
                                    <small>
                                        请填写密码6~18位左右
                                    </small>
                                </div>
                            </div>
							<div class="am-form-group">
                                <label for="reupwd" class="am-u-sm-3 am-form-label">
                                    确认密码
                                    <span class="tpl-form-line-small-title">
                                        Confirm
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="reupwd" name="reupwd" placeholder="请重输管理员密码" type="password">
                                    <small>
                                        请重新输入管理员密码
                                    </small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    管理员性别
                                    <span class="tpl-form-line-small-title">
                                        Confirm
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <label for="man">男</label>
                                    <input class="tpl-form-input" id="man" name="sex" value="1" checked type="radio">
                                    <label for="man">女</label>
                                    <input class="tpl-form-input" id="man" name="sex" value="0" chected type="radio">
                                </div>
                            </div>
							<div class="am-form-group">
                                <label for="tel" class="am-u-sm-3 am-form-label">
                                    手机号码
                                    <span class="tpl-form-line-small-title">
                                        Telephone
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="tel" name="tel" placeholder="请输入常用手机号" type="text">
                                    <small>
                                        请输入常用手机号
                                    </small>
                                </div>
                            </div>
							<div class="am-form-group">
                                <label for="email" class="am-u-sm-3 am-form-label">
                                    管理员邮箱
                                    <span class="tpl-form-line-small-title">
                                        Email
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="email" name="email" placeholder="请输入常用邮箱" type="text">
                                    <small>
                                        请输入常用邮箱
                                    </small>
                                </div>
                            </div>
							<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">管理员头像 <span class="tpl-form-line-small-title">Face</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="#" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加头像</button>
                                                <input id="doc-form-file" multiple="" type="file">
                                            </div>

                                        </div>
                                    </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    {{ csrf_field() }}
                                    <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="添加管理员" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="/admin/js/verify.js"></script>
@endsection