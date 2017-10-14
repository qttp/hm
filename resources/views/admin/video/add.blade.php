@extends('admin.temp.temp')
@section('title','视频分类添加')
@section('content')
	<style>
    .theme-black .tpl-form-border-form input[type="text"],.theme-black .tpl-form-border-form input[type="password"]{width:50%;display:inline-block;margin-right:5px;}
    marquee{color:#eee;padding:10px 10px 0;font-size:15px;}
</style>

<link rel="stylesheet" type="text/css" href="/css/Huploadify.css"/>
<script type="text/javascript" src="/js/jquery.Huploadify.js"></script>
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
							<form id="video_form" name="video_form" class="am-form tpl-form-border-form tpl-form-border-br"
							method="post" action="/admin/video" enctype="multipart/form-data">
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">
										管理员级别
										<span class="tpl-form-line-small-title">
											Authority
										</span>
									</label>
									<div class="am-u-sm-9">
										<select id="cate_id" data-am-selected="{searchBox: 0}" name="cate_id" style="display: none;">
											@foreach($types as $type)
											<option @if($id == $type -> cate_id) selected @endif value="{{ $type -> cate_id }}">
												{{ $type -> cate_name }}
											</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="am-form-group">
									<label for="video_name" class="am-u-sm-3 am-form-label">
										视频分类名称
										<span class="tpl-form-line-small-title">
											Cate Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="video_name" name="video_name" placeholder="请输入视频名称"
										type="text">
										<small>
											视频名称，必须填写
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="actor" class="am-u-sm-3 am-form-label">
										演员
										<span class="tpl-form-line-small-title">
											Actor Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="actor" name="actor" placeholder="请输入演员组合"
										type="text">
										<small>
											演员名称，必须填写;多个使用逗号分割
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="director" class="am-u-sm-3 am-form-label">
										导演
										<span class="tpl-form-line-small-title">
											Director Name
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" value="" id="director" name="director" placeholder="请输入导演组合"
										type="text">
										<small>
											导演，必须填写;多个使用逗号分割
										</small>
									</div>
								</div>
								<div class="am-form-group">
									<label for="video_time" class="am-u-sm-3 am-form-label">
										视频总时长
										<span class="tpl-form-line-small-title">
											Video Time
										</span>
									</label>
									<div class="am-u-sm-9">
										<input class="tpl-form-input" style="width:50px" id="hours" name="hours" placeholder="小时" type="text" />
										<input class="tpl-form-input" style="width:50px" id="minutes" name="minutes" placeholder="分钟" type="text" />
										<small>
											请输入整数的小时数 与 分钟数
										</small>
									</div>
								</div>
								@foreach($lists as $list)
								<div class="am-form-group">
									<label for="director" class="am-u-sm-3 am-form-label">
										{{ $list -> cate_name }}
										<span class="tpl-form-line-small-title">
											{{ $list -> field_name }}
										</span>
									</label>
									<div class="am-u-sm-9">
										<?php $res = App\Http\Model\Cate::where('pid',$list -> cate_id) -> get(); ?>
										@foreach($res as $mark)
										@if($list -> tag_type == 0)
											<input name="{{ $list  -> field_name }}" value="{{ $list -> pid.'_'. $list -> cate_id . '_' . $mark -> cate_id}}" type="radio">
										@else
											<input name="{{ $list -> field_name }}[]" value="{{ $list -> pid .'_'. $list -> cate_id  . '_' . $mark -> cate_id}}" type="checkbox">
										@endif
										<span style="margin-right:20px">{{$mark -> cate_name}}</span>
										@endforeach
									</div>
								</div>
								@endforeach
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">上传视频 <span class="tpl-form-line-small-title">Video File</span></label>
									<div class="am-u-sm-9">
										<input id="video_path" type="hidden" name="video_path" />
										<div id="upload"></div>
									</div>
								</div>
								<div class="am-form-group">
									<label class="am-u-sm-3 am-form-label">视频封面 <span class="tpl-form-line-small-title">Video Face</span></label>
									<div class="am-u-sm-9">
										<div class="am-form-group am-form-file">
											<div class="tpl-user-panel-profile-picture">
												<img src="#" id="video_pic" alt="" />
											</div>
											<button type="button" class="am-btn am-btn-danger am-btn-sm">
		<i class="am-icon-cloud-upload"></i> 添加封面</button>
											<input id="video_face" type="hidden" name="video_face" />
											<input id="upload_face" type="file" name="upload_face" />
										</div>
									</div>
								</div>
								<div class="am-form-group">
									<label for="director" class="am-u-sm-3 am-form-label">
										视频简介
										<span class="tpl-form-line-small-title">
											Director
										</span>
									</label>
									<div class="am-u-sm-9">
										<textarea name="video_desc" style="width:80%;resize:none">视频简介信息</textarea>
									</div>
								</div>
								
								<div class="am-form-group">
									<div class="am-u-sm-9 am-u-sm-push-3">
										{{ csrf_field() }}
										<input class="am-btn am-btn-primary tpl-btn-bg-color-success " value="添加视频"
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
$(function(){
	$('#upload').Huploadify({
		auto:true,
		fileTypeExts:'*.wmv;*.mp4;*.flv;*.png;*.jpeg',
		multi:true,
		formData:{'_token':'{{csrf_token()}}'},
		fileSizeLimit:999999999999,
		showUploadedPercent:true,//是否实时显示上传的百分比，如20%
		showUploadedSize:true,
		removeTimeout:9999999,
		uploader:"{{url('admin/video/upload')}}",
		onUploadStart:function(){
			//alert('开始上传');
			},
		onInit:function(){
			//alert('初始化');
			},
		onUploadComplete:function(){
			//alert('上传完成');
			},
		onUploadSuccess:function(file,data){
			//响应信息
			$("#video_path").val(data);
			},
		onDelete:function(file){
			console.log('删除的文件：'+file);
			console.log(file);
		}
		});
	});
	
	//判断表单
	$('input[type=text]').blur(function(){
		if($(this).attr('id') == 'hours'){
			return false;
		}
		if ($(this).val() == '') {
			$(this).next().html('必填项,不可为空').css('color','red');
		} else {
			$(this).next().html('✔').css('color','green');
		}
	});
	$('select').change(function(){
		location.href = "{{ url('admin/video/create') }}?id="+ $(this).val();
	});
	
	//视频封面上传
    $('#upload_face').change(function(){
		//判断文件是否为空
		var imgPath = $('#upload_face').val();
		if (imgPath == '') {
			layer.msg('请选择上传的视频封面图',{time:1500});
			return false;
		}
		//检查后缀名
		var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'gpeg') {
                alert("请选择视频封面图文件");
                return false;
            }
		//上传文件
		var formData = new FormData($('#video_form')[0]);
		$.ajax({
			type: "POST",
			url: "{{ url('/admin/video/upload/videoface') }}",
			data: formData,
			contentType: false,
			processData: false,
			success: function(data){
				$('#video_pic').attr('src','/'+data);
				$('#video_face').val(data);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				layer.msg('请检查网络信息',{time:1500});
			}
		});
		
	});
</script>
@endsection