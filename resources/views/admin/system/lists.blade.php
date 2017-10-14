@extends('admin.temp.temp')
@section('title','网站配置列表')
@section('content')
	<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
			<div class="row">
				<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
					<div class="widget am-cf">
						<div class="widget-head am-cf">
							<div class="widget-title  am-cf">
								网站配置列表
							</div>
						</div>
						<div class="widget-body  am-fr">
							<div class="am-u-sm-12">
								<table class="am-table am-table-compact am-table-striped tpl-table-black "
								id="example-r" width="100%">
									<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												字段名
											</th>
											<th>
												标识名
											</th>
											<th>
												内容
											</th>
											<th style="min-width:130px">
												操作
											</th>
										</tr>
									</thead>
									<tbody>
										@foreach($configs as $config)
										<tr class="gradeX">
											<td>
												{{ $config -> system_id }}
											</td>
											<td>
												{{ $config -> system_field }}
											</td>
											<td>
												{{ $config -> system_title }}
											</td>
											<td>
												{!! $config['system_config'] !!}
											</td>
											<td>
												<div class="tpl-table-black-operation">
													<a href="{{ url('/admin/system/' . $config -> system_id . '/edit') }}">
														<i class="am-icon-pencil">
														</i>
														编辑
													</a>
													@if(session('adminInfo') -> auth)
													<a href="javascript:;" onclick="del({{ $config -> system_id }})" class="tpl-table-black-operation-del">
														<i class="am-icon-trash">
														</i>
														删除
													</a>
													@endif
												</div>
											</td>
										</tr>
										@endforeach
										<!-- more data -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function del(id)
		{
			layer.confirm('您确定需要删除此数据？', {
				btn: ['确定','取消']
			}, function(){
					$.post('http://hm.com/admin/system/' + id,{
					'_method':'delete',
					'_token':"{{ csrf_token() }}"
				},function(data){
					if (data == 1){
						layer.msg('删除成功', {icon: 6,time:1500});
						location.href = location.href;
					} else {
						layer.msg('删除失败', {icon: 5,time:1500});
						location.href = location.href;
					}
				});
			});
		}
	</script>
@endsection