@extends('admin.temp.temp')
@section('title','用户列表')
@section('content')
	<div class="tpl-content-wrapper">
		<div class="row-content am-cf">
			<div class="row">
				<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
					<div class="widget am-cf">
						<div class="widget-head am-cf">
							<div class="widget-title  am-cf">
								用户列表
							</div>
						</div>
						<div class="widget-body  am-fr">
							<form method="get" action="{{url('/admin/homeuser')}}" >
								<div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
									<div class="am-form-group tpl-table-list-select">
										<select name="type" data-am-selected="{btnSize: 'sm'}" style="display: none;">
											<option value="nickname">
												昵称
											</option>
											<option value="uname">
												账号
											</option>
											<option value="email">
												邮箱
											</option>
											<option value="tel">
												联系方式
											</option>
										</select>
									</div>
								</div>
								<div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:left">
									<div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
										<input class="am-form-field " name="keywords" placeholder="请输入查询内容" type="text">
										<span class="am-input-group-btn">
											<button class="am-btn am-btn-default am-btn-success tpl-table-list-field am-icon-search"
											type="submit"></button>
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
												账号
											</th>
											<th>
												昵称
											</th>
											<th>
												头像
											</th>
											<th>
												上次登陆时间
											</th>
											<th>
												登陆IP
											</th>
											<th>
												账户状态
											</th>
											<th>
												会员等级
											</th>
											<th>
												操作
											</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
										<tr class="gradeX">
											<td>
												{{ $user -> uid }}
											</td>
											<td>
												{{ $user -> uname }}
											</td>
											<td>
												{{ $user -> nickname }}
											</td>
											<td>
												<div class="tpl-user-panel-profile-picture">
												<img src="{{asset($user -> uface)}}" alt="头像" />
												</div>
											</td>
											<td>
												@if($user -> last_login)
												    {{ date('Y-m-d H:i:s',$user -> last_login) }}
												@else
													暂无登录记录
												@endif
											</td>
											<td>
												@if($user->login_ip)
													{{ $user -> login_ip }}
												@else
													无记录或未知IP
												@endif
											</td>
											<td>
												{{ $status[$user -> status] }}
											</td>
											<td>
												{{ $vip[$user -> vip] }}
											</td>
											<td>
												<div class="tpl-table-black-operation">
													<a href="javascript:;" class="tpl-table-black-operation-del">
														<i class="am-icon-envelope">
														</i>
														发消息
													</a>
													<a href="javascript:;" onclick="del({{ $user -> uid }})" class="tpl-table-black-operation-del">
														<i class="am-icon-trash">
														</i>
														{{ $chStatus[$user -> status] }}
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
									{!! $users -> appends(['keywords' => $keywords]) -> render() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		table tr td > input{
			color:black;
		}
		#win{
		    position:fixed;
			z-index:1000;
			top:200px;
			left:300px;
			width:500px;
			height:500px;
			background:red;
		}
	</style>
	<script>
		var ele = null;
		var oldText = '';
		var _this = null;
		function varify(reg,text)
		{
			if(! reg.test(text)){
				_this.text(oldText);
			    layer.msg('设置不合理',{time: 1500, icon:5});
				return false;
			}
			
			return ele;
		}
	    function edit()
		{
			_this = $(this);
			var reg = /\S+/i;
			var arr = reg.exec($(this).text());
			oldText = arr.pop();
			ele = $('<input type="text" />');
			ele.attr('name',oldText);
			ele.val(oldText);
			$(this).html(ele);
			ele.blur(change);
			ele.focus();
		}
		function change()
		{
			if (oldText == $(this).val()) {
			    _this.html(oldText);
				return false;
			}
			var attr = _this.attr('id');
			switch (attr) {
				case 'user_name':
					ele = varify(/^[a-zA-z]\w{5,18}$/,$(this).val());
					
				break;
				case 'nick_name':
					ele = varify(/^\S{2,8}$/,$(this).val());
				break;
				case 'email':
					ele = varify(/^\w+@\w+(\.com|\.cn|\.cc|\.net|\.co|\.top){1,2}$/,$(this).val());
				break;
				case 'tel':
					ele = varify(/^1[345678]\d{9}$/,$(this).val());
				break;
				default:
					_this.html(oldText);
					return false;
				break;
			};
			
			//发送ajax
			if(! ele){return false}
			console.log(oldText);
			$.get('/admin/verify',{type:attr,val:$(this).val(),old:oldText},function(data){
			    if (data != 0) {
					_this.html(ele.val());
					layer.msg('修改成功',{time: 1500, icon:6});
				} else {
					_this.text(oldText);
					layer.msg('修改失败',{time: 1500, icon:5});
				}
			});
		}
		var trs = $('table tr');
		trs.each(function(){
		    $(this).find('td').eq(1).dblclick(edit).attr('id','user_name');
			$(this).find('td').eq(2).dblclick(edit).attr('id','nick_name');
			$(this).find('td').eq(4).dblclick(edit).attr('id','email');
			$(this).find('td').eq(5).dblclick(edit).attr('id','tel');
		});
		
		//删除
		function del(id)
		{
            layer.confirm('您确定需要进行此操作？', {
				btn: ['确定','取消']
			}, function(){
                $.post('{{url("/admin/homeuser")}}/'+id,{
                    '_method':'delete',
                    '_token':"{{ csrf_token() }}"
				},function(data){
					if(data == 1){
						layer.msg('OK', {icon: 6,time:1500});
						location.href = location.href;
					} else {
						layer.msg('操作失败', {icon: 5,time:1500});
						location.href = location.href;
					}
					
				});
			});
		}
	</script>
@endsection