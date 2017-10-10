@extends('admin.temp.temp')
@section('title','视频类别修改')
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
								视频类别修改
							</div>
							<div class="widget-function am-fr">
								<a href="javascript:;" class="am-icon-cog">
								</a>
							</div>
						</div>
						<div class="widget-body am-fr">
							<form id="system_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/cate/{{$cate -> cate_id}}">
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										类别名称
										<span class="tpl-form-line-small-title">
											Cate Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="{{$cate -> cate_name}}" id="=cate_name" name="cate_name" placeholder="请输入类别名称"
										type="text">
										<small>
											请填写昵称2~8位左右
										</small>
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