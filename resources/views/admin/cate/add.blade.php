@extends('admin.temp.temp')
@section('title','视频分类添加')
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
								视频分类添加
							</div>
							<div class="widget-function am-fr">
								<a href="javascript:;" class="am-icon-cog">
								</a>
							</div>
						</div>
						<div class="widget-body am-fr">
							<form id="cate_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/cate">
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">
										视频分类级别
										<span class="tpl-form-line-small-title">
											Authority
										</span>
									</label>
									<div class="am-u-sm-9">
										<select data-am-selected="{searchBox: 0}" name="pid" style="display: none;">
											<option value="0">
												顶级分类
											</option>
											@foreach($cates as $cate)
											<option value="{{$cate -> cate_id}}">
												{{$cate -> cate_name}}
											</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="am-form-group">
									<label for="cate_name" class="am-u-sm-3 am-form-label">
										视频分类名称
										<span class="tpl-form-line-small-title">
											Cate Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="cate_name" name="cate_name" placeholder="请输入分类名称"
										type="text">
										<small>
											分类名称，必须填写
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<div class="am-u-sm-9 am-u-sm-push-3">
										{{ csrf_field() }}
										<input class="am-btn am-btn-primary tpl-btn-bg-color-success " value="添加分类"
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
		$('form').submit(function(){
			if ($('#cate_name').val() == '') {
				$('#cate_name').html('分类名称不可为空').css('color','red');
				return false;
			}
		});
		$('#cate_name').blur(function(){
			if ($('#cate_name').val() == '') {
				$('#cate_name').next().html('分类名称不可为空').css('color','red');
				return false;
			}
			var _this = $('#cate_name');
			$.get('/admin/cate/check',{cate_name:_this.val()},function(data){
				if (data == '1') {
					_this.next().html('分类名称已经存在,请重新设置').css('color','red');
				} else {
					_this.next().html('✔').css('color','green');
				}
			});
		});
	</script>
@endsection