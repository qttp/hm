@extends('admin.temp.temp')
@section('title','修改管理员信息')
@section('content')
	<style>
    .theme-black .tpl-form-border-form input[type="text"],.theme-black .tpl-form-border-form input[type="password"]{width:50%;display:inline-block;margin-right:5px;}
    marquee{color:#eee;padding:10px 10px 0;font-size:15px;}
</style>
	<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
			<div class="row">
				<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
					<div class="widget am-cf">
						<div class="widget-head am-cf">
							<div class="widget-title am-fl">
								后台管理员修改
							</div>
							<div class="widget-function am-fr">
								<a href="javascript:;" class="am-icon-cog">
								</a>
							</div>
						</div>
						<div class="widget-body am-fr">
							<form id="user_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/user/{{$user -> user_id}}" enctype="multipart/form-data">
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">
										管理员级别
										<span class="tpl-form-line-small-title">
											Authority
										</span>
									</label>
									<div class="am-u-sm-9">
										<select id="auth" data-am-selected="{searchBox: 0}" name="auth" style="display: none;">
											<option value="0" @if( $user -> auth == 0 ) selected @endif >
												普通管理员
											</option>
											<option value="1" @if( $user -> auth == 1 ) selected @endif>
												超级管理员
											</option>
										</select>
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
										<input class="tpl-form-input" value="{{$user -> user_name}}" id="nick_name" name="nick_name" placeholder="请输入管理员昵称"
										type="text">
										<small>
											请填写昵称2~8位左右
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
										<label for="man">
											男
										</label>
										<input class="tpl-form-input"  id="man" name="sex" value="1" @if($user -> sex == 1) checked @endif
										type="radio">
										<label for="man">
											女
										</label>
										<input class="tpl-form-input" @if($user -> sex == 0) checked @endif id="man" name="sex" value="1"
										type="radio">
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
										<input class="tpl-form-input" value="{{ $user -> tel }}" id="tel" name="tel" placeholder="请输入常用手机号"
										type="text">
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
										<input class="tpl-form-input"  value="{{ $user -> email }}" id="email" name="email" placeholder="请输入常用邮箱"
										type="text">
										<small>
											请输入常用邮箱
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">
										管理员头像
										<span class="tpl-form-line-small-title">
											Face
										</span>
									</label>
									<div class="am-u-sm-9">
											<div  style="display:inline-block;" class="tpl-user-panel-profile-picture">
												<img src="/admin/img/user04.png" alt="">
											</div>
										<div  style="display:inline-block;vertical-align:20px" class="am-form-group am-form-file">
											<button type="button" class="am-btn am-btn-danger am-btn-sm">
												<i class="am-icon-cloud-upload">
												</i>
												修改头像
											</button>
											<input id="doc-form-file" multiple="" type="file">
										</div>
									</div>
								</div>
								<div class="am-form-group">
									<div class="am-u-sm-9 am-u-sm-push-3">
										{{ method_field('PUT') }}
										{{ csrf_field() }}
										<input class="am-btn am-btn-primary tpl-btn-bg-color-success " value="保存修改"
										type="submit">
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