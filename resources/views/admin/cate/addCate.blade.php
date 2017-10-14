@extends('admin.temp.temp')
@section('title','视频子类别添加')
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
								视频子类别添加
							</div>
							<div class="widget-function am-fr">
								<a href="javascript:;" class="am-icon-cog">
								</a>
							</div>
						</div>
						<div class="widget-body am-fr">
							<form id="system_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/cate/doAddChild">
								<div class="am-form-group">
									<label for="cate_name" class="am-u-sm-3 am-form-label">
										父级名称
										<span class="tpl-form-line-small-title">
											Parent Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<span>
											{{ $cate -> cate_name }}
										</span>
									</div>
								</div>
								<div class="am-form-group">
									<label for="cate_name" class="am-u-sm-3 am-form-label">
										标签名称
										<span class="tpl-form-line-small-title">
											Tag Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="=cate_name" name="cate_name" placeholder="请输入标签名称"
										type="text">
										<small>
											请填写标签名称
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<div class="am-u-sm-9 am-u-sm-push-3">
										{{ csrf_field() }}
										<input type="hidden" name="pid" value="{{ $pid }}" />
										<input class="am-btn am-btn-primary tpl-btn-bg-color-success " value="添加子类"
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