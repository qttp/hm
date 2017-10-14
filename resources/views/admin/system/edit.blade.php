@extends('admin.temp.temp')
@section('title','修改网站配置')
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
								网站配置修改
							</div>
							<div class="widget-function am-fr">
								<a href="javascript:;" class="am-icon-cog">
								</a>
							</div>
						</div>
						<div class="widget-body am-fr">
							<form id="system_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/system/{{$config -> system_id}}">
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										标识名称
										<span class="tpl-form-line-small-title">
											Field Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="{{$config -> system_title}}" id="=system_title" name="system_title" placeholder="请输入标识名称"
										type="text">
										<small>
											请填写标识名称
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										说明描述
										<span class="tpl-form-line-small-title">
											Description
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="{{$config -> system_desc}}" id="system_tips" name="system_desc" placeholder="请输入描述信息"
										type="text">
										<small>
											请填写说明描述
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										内容
										<span class="tpl-form-line-small-title">
											Description
										</span>
									</label>
									<div class="am-u-sm-9">
										@if( $config -> system_type != 'radio')
										<input class="tpl-form-input" value="{{$config -> system_content}}" id="system_content" name="system_content" placeholder="请输入内容"
										type="text">
										<small>
											请填写内容
										</small>
										@else
										<input value="1" id="open" @if($config -> system_content == 1) checked @endif name="system_content" type="radio" />
										<label for="open">启用</label>
										<input value="0" id="close" @if($config -> system_content == 0) checked @endif name="system_content" type="radio" />
										<label for="close">关闭</label>
										@endif
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