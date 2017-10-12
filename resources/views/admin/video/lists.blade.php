@extends('admin.temp.temp')
@section('title','视频分类列表')
@section('content')
	<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
			<div class="row">
				<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
					<div class="widget am-cf">
						<div class="widget-head am-cf">
							<div class="widget-title  am-cf">
								视频分类列表
							</div>
						</div>
						<div class="widget-body  am-fr">
							<div class="am-u-sm-12">
								<table class="am-table am-table-compact tpl-table-black "
								id="example-r" width="100%">
									<thead>
										<tr>
											<th>
												ID
											</th>
											<th>
												分类名称
											</th>
											<th>
												父级ID
											</th>
											<th style="min-width:130px">
												操作
											</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cates as $cate)
										<tr class="gradeX" cate_id="{{$cate -> cate_id}}" pid="{{$cate -> pid}}" @if($cate -> pid == 0) style="background-color:#5A5F62" @endif>
											<td>
												{{ $cate -> cate_id }}
											</td>
											<td>
												{!! $cate -> name !!}
												@if($cate -> leval < 2 )<span class="am-icon-chevron-down" this_id="{{ $cate -> cate_id }}"></span> @endif
											</td>
											<td>
												{{ $cate -> pid }}
											</td>
											<td>
												<div class="tpl-table-black-operation">
													@if($cate -> leval < 2)
													<a href="{{ url('/admin/cate/addChild') . '/' . $cate -> cate_id }}">
														<i class="am-icon-plus">
														</i>
														添加子类
													</a>
													@endif
													<a href="{{ url('/admin/cate/' . $cate -> cate_id . '/edit') }}">
														<i class="am-icon-pencil">
														</i>
														编辑
													</a>
													<a href="javascript:;" onclick="del({{ $cate -> cate_id }},this)" class="tpl-table-black-operation-del">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function del(id,_this)
		{
			var childs = $('tr[pid='+ id +']').length;
			if(childs) {
				layer.msg('不是最底层分类,不能删除',{time:1000});
				return false;
			}
			layer.confirm('您确定需要删除此数据？', {
				btn: ['确定','取消']
			}, function(){
					$.post('http://hm.com/admin/cate/' + id,{
					'_method':'delete',
					'_token':'{{ csrf_token() }}'
				},function(data){
					if (data != 0) {
						location.href = location.href;
						layer.msg('OK', {icon: 6,time:1500});
					} else {
						location.href = location.href;
						layer.msg('删除失败', {icon: 5,time:1500});
					}
				});
			});
		}
		
		$('td span').click(function(){
			if ($(this).attr('class') != 'am-icon-chevron-up') {
				cut($(this).parents('tr').attr('cate_id'),$(this),'hide');
				$(this).attr('class','am-icon-chevron-up');
			} else {
				
				cut($(this).parents('tr').attr('cate_id'),$(this),'show');
				$(this).attr('class','am-icon-chevron-down');
			}
		});
		function cut(id,_this,type)
		{
			if (type == 'hide') {
				if ($("tr[pid=" + id + "]").length) {
					$("tr[pid=" + id + "]").each(function(){
						cut($(this).attr('cate_id'),$(this),'hide');
						$(this).hide();
					});
				};
			} else {
				if($("tr[pid=1]").find('span').attr('class','am-icon-chevron-down')){
				
				}
				if ($("tr[pid=" + id + "]").length ) {
					$("tr[pid=" + id + "]").each(function(){
						cut($(this).attr('cate_id'),$(this),'show');
						$(this).show();
					});
				};
			}
		}
	</script>
@endsection