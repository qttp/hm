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
							method="post" action="/admin/system">
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										标题
										<span class="tpl-form-line-small-title">
											Title
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="=system_title" name="system_title" placeholder="请输入中文标题"
										type="text">
										<small>
											配置项标题名称，必须填写
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="field_name" class="am-u-sm-3 am-form-label">
										字段名称
										<span class="tpl-form-line-small-title">
											Field Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="system_name" name="system_name" placeholder="请输入字段名称"
										type="text">
										<small>
											配置项字段名称，必须填写
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="nick_name" class="am-u-sm-3 am-form-label">
										变量值
										<span class="tpl-form-line-small-title">
											Variabale Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="system_value" name="system_value" placeholder="请输入变量值"
										type="text">
										<small>
											变量的值
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="system_order" class="am-u-sm-3 am-form-label">
										排序
										<span class="tpl-form-line-small-title">
											Sort
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="system_order" name="system_order" placeholder="请输入管理员昵称"
										type="text">
										<small>
											按照从小到大的排序规则
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="system_tips" class="am-u-sm-3 am-form-label">
										说明
										<span class="tpl-form-line-small-title">
											Description
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="system_tips" name="system_tips" placeholder="请输入管理员昵称"
										type="text">
										<small>
											对字段的描述信息
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">
										字段类型
										<span class="tpl-form-line-small-title">
											Field Type
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" checked value="input" id="input" name="system_type" onclick="show()" type="radio">
										<label for="input">Input</label>
										<input class="tpl-form-input" value="text" id="text" name="system_type" onclick="show()" type="radio">
										<label for="text">Text</label>
										<input class="tpl-form-input" value="radio" id="radio" name="system_type" onclick="show()" type="radio">
										<label for="radio">textarea</label>
									</div>
								</div>
								<div class="am-form-group" style="display:none" id="open_close">
									<label class="am-u-sm-3 am-form-label">
										Radio作用
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" checked value="1" id="start" name="mark" onclick="show()" type="radio">
										<label for="start">开启</label>
										<input class="tpl-form-input" value="0" id="stop" name="mark" onclick="show()" type="radio">
										<label for="stop">关闭</label>
										<small style="margin-left:50px;">
											只有radio类型的时候才能配置;0关闭/1启用
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<div class="am-u-sm-9 am-u-sm-push-3">
										{{ csrf_field() }}
										<input class="am-btn am-btn-primary tpl-btn-bg-color-success " value="添加字段"
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
	<script type="text/javascript">
		function show()
		{
			var type = $('input[name=system_type]:checked').val();
			if (type == 'radio') {
				$('#open_close').show().find('input').removeAttr('disabled');
			} else {
				$('#open_close').hide().find('input').attr('disabled',true);
			}
		}
		show();
		$('input[type=text]').blur(function(){
		    if ($(this).val() == '') {
			    $(this).next().html('字段名称不能为空').css('color','red');
				return false;
			}
		});
		$('#system_name').blur(function(){
			var _this = $(this);
			$.get('/admin/system/check',{system_name:_this.val()},function(data){
				if (data == '1') {
					_this.next().html('字段名已经存在,请重新设置').css('color','red');
				} else {
					_this.next().html('✔').css('color','green');
				}
			});
		});
	</script>
@endsection