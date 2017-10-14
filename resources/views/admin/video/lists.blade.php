@extends('admin.temp.temp')
@section('title','视频分类添加')
@section('content')
<div class="tpl-content-wrapper">
    <div class="row-content am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title  am-cf">
                            视频列表
                        </div>
                    </div>
                    <div class="widget-body  am-fr">
						<form id="search" method="get" action="/admin/video">
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
								<div class="am-form-group tpl-table-list-select">
									<select name="type" data-am-selected="{btnSize: 'sm'}" style="display: none;">
										<option @if($data['type'] == 'cate_name') selected @endif value="cate_name">
											视频类别
										</option>
										<option @if($data['type'] == 'video_name') selected @endif value="video_name">
											视频名称
										</option>
										<option @if($data['type'] == 'director') selected @endif value="director">
											视频导演
										</option>
										<option @if($data['type'] == 'actor') selected @endif value="actor">
											视频演员
										</option>
									</select>
								</div>
							</div>
							<div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:left">
								<div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
									<input class="am-form-field" name="keywords" value="{{ $data['keywords'] }}" placeholder="请输入查询条件" type="text">
									<span class="am-input-group-btn">
										<button id="btn" class="am-btn am-btn-default am-btn-success tpl-table-list-field am-icon-search"
										type="submit">
										</button>
									</span>
								</div>
							</div>
						</form>
                        <div class="am-u-sm-12">
                            <table class="am-table am-table-compact am-table-striped tpl-table-black "
                            id="example-r" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            视频名称
                                        </th>
										<th>
                                            视频封面
                                        </th>
										<th>
                                            视频类别
                                        </th>
										<th>
                                            总浏览量
                                        </th>
										<th>
                                            添加时间
                                        </th>
                                        <th>
                                            视频状态
                                        </th>
                                        <th>
                                            操作
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach($videos as $video)
                                    <tr class="gradeX">
                                        <td>
                                            {{ $video -> video_id }}
                                        </td>
                                        <td>
                                            {{ $video -> video_name }}
                                        </td>
                                        <td>
											<div class="tpl-user-panel-profile-picture">
												<img src="/{{ $video -> video_face }}" alt="{{ $video -> video_face }}" />
											</div>
                                        </td>
										<td>
                                            {{ $video -> cate_name }}
                                        </td>
										<td>
                                            {{ $video -> read_count }}
                                        </td>
										<td>
                                            {{ date('Y-m-d H:i:s',$video -> create_time) }}
                                        </td>
										<td>
                                            {{ $status[ $video -> status ] }}
                                        </td>
                                        <td>
                                            <div class="tpl-table-black-operation">
                                                <a href="/admin/video/{{ $video -> video_id }}" >
                                                    <i class="am-icon-pencil">
                                                    </i>
                                                    编辑
                                                </a>
												@if($video -> status == 1)
												<a href="javascript:;" onclick="changeStatus({{ $video -> video_id }},'open')" style="color:white" class="am-btn am-btn-default am-btn-secondary" >
                                                    <i class="am-icon-pencil">
                                                    </i>
													启用
                                                </a>
												<a href="javascript:;" onclick="changeStatus({{ $video -> video_id }},'close')" style="color:white" class="am-btn am-btn-default am-btn-danger">
                                                    <i class="am-icon-pencil">
                                                    </i>
													禁用
                                                </a>
												@else
                                                    @if($video -> status == 0)
													<a href="javascript:;" onclick="changeStatus({{ $video -> video_id }},'open')" style="color:white" class="am-btn am-btn-default am-btn-secondary" >
														<i class="am-icon-pencil">
														</i>
														启用
													</a>
													@elseif($video -> status == 2)
													<a href="javascript:;" onclick="changeStatus({{ $video -> video_id }},'close')" style="color:white" class="am-btn am-btn-default am-btn-danger">
														<i class="am-icon-pencil">
														</i>
														禁用
													</a>
													@endif
													
												@endif
                                                <a href="javascript:;" onclick="del('{{ $video -> video_id }}')" class="tpl-table-black-operation-del">
                                                    <i class="am-icon-trash">
                                                    </i>
                                                    删除
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
									@endforeach
                                    <!-- more data -->
                                </tbody>
                            </table>
                        </div>
						<style>
							    .pagination::after {
									clear: both;
								}
								.pagination::after, .am-pagination::before {
									content: " ";
									display: table;
								}
								.pagination {
									position: relative;
								}
								.pagination {
									padding-left: 0;
									margin: 1.5rem 0;
									list-style: none;
									color: #999;
									text-align: left;
								}
								.pagination li{
									float:left;
									
									padding: 3px 10px;
									margin-right: 10px;
									background-color: #3F4649;
								}
								.pagination li a{
									color:white;
								}
								.pagination .active {
									color: #FFCE44;
									border: 1px solid #167fa1;
									background: #167fa1;
									
								}

							</style>
                        <div class="am-u-lg-12 am-cf">
                            <div class="am-fr">
                                {!! $videos -> appends($data) -> render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function changeStatus(id,status)
	{
		$.post("/admin/video/changeStatus",{'_token':"{{ csrf_token() }}",'id':id,'status':status},function(data){
			if(data == 1) {
				layer.msg('更改状态成功', {icon: 6,time:1000});
				location.href = location.href;
			} else {
				layer.msg('更改状态失败', {icon: 5,time:1000});
				location.href = location.href;
			}
		});
	}
	function del(id)
	{
		$.post('/admin/video/'+ id,{'_token':"{{ csrf_token() }}",'_method':'delete'},function(data){
			if (data == 1) {
				layer.msg('视频删除成功', {icon:6,time:1000});
				location.href = location.href;
			} else {
				layer.msg('视频删除失败', {icon:5,time:1000});
				location.href = location.href;
			}
		});
	}
</script>
@endsection