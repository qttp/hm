@extends('admin/temp/temp')
@section('title','后台管理员添加')
@section('content')
    <div class="tpl-content-wrapper">
    <div class="row-content am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">
                            管理员添加
                        </div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog">
                            </a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <form class="am-form tpl-form-line-form">
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">
                                    管理员账号
                                    <span class="tpl-form-line-small-title">
                                        Number
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input class="tpl-form-input" id="uname" name="uname" placeholder="请输入管理员账号"
                                    type="text">
                                    <small>
                                        请填写管理员账号4-18字左右。
                                    </small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-phone" class="am-u-sm-3 am-form-label">
                                    作者
                                    <span class="tpl-form-line-small-title">
                                        Author
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <select data-am-selected="{searchBox: 1}" style="display: none;">
                                        <option selected value="0">
                                            普通管理员
                                        </option>
                                        <option value="1">
                                            超级管理员
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    SEO关键字
                                    <span class="tpl-form-line-small-title">
                                        SEO
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input placeholder="输入SEO关键字" type="text">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-weibo" class="am-u-sm-3 am-form-label">
                                    封面图
                                    <span class="tpl-form-line-small-title">
                                        Images
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-group am-form-file">
                                        <div class="tpl-form-file-img">
                                            <img src="assets/img/a5.png" alt="">
                                        </div>
                                        <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                            <i class="am-icon-cloud-upload">
                                            </i>
                                            添加封面图片
                                        </button>
                                        <input id="doc-form-file" multiple="" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-weibo" class="am-u-sm-3 am-form-label">
                                    添加分类
                                    <span class="tpl-form-line-small-title">
                                        Type
                                    </span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input id="user-weibo" placeholder="请添加分类用点号隔开" type="text">
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-intro" class="am-u-sm-3 am-form-label">
                                    隐藏文章
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="tpl-switch">
                                        <input class="ios-switch bigswitch tpl-switch-btn" checked="" type="checkbox">
                                        <div class="tpl-switch-btn-view">
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                        提交
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
