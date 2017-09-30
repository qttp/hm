<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>后台登录</title>
        <meta name="description" content="这是一个 index 页面">
        <meta name="keywords" content="index">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="/admin/i/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="/admin/i/app-icon72x72@2x.png">
        <link rel="stylesheet" href="/admin/css/amazeui.min.css" />
        <link rel="stylesheet" href="/admin/css/amazeui.datatables.min.css" />
        <link rel="stylesheet" href="/admin/css/app.css">
        <script src="/admin/js/jquery.min.js"></script>
    </head>
    
    <body data-type="login">
        <script src="/admin/js/theme.js">
        </script>
            <div class="tpl-login">
                <div class="tpl-login-content">

                    @if(session('errors'))
                    <script type="text/javascript">
                        setTimeout(function(){
                            $('#login_err').hide();
                        },1500);
                    </script>
                    <div id="login_err">{{session('errors')}}</div>
                    @endif


                    <form method="post" action="/admin/dologin" class="am-form tpl-form-line-form">
                        <div class="am-form-group">
                            <input type="text" class="tpl-form-input" name="uname" id="uname" value="{{old('uname')}}" placeholder="请输入管理员账号/手机号/昵称/邮箱">
                        </div>
                        <div class="am-form-group">
                            <input type="password" class="tpl-form-input" name="upwd" id="upwd" placeholder="请输入管理员密码">
                        </div>
                        <div class="am-form-group">
                            <input type="text" style="width:45%;display:inline-block;margin-right:20px" name="check" id="check" placeholder="请输入验证码">
                            <img src="{{ url('/admin/verify')}}" title="看不清,换一张" onclick="this.src='{{ url('/admin/check') }}?'+Math.random()" />
                        </div>
                        <div class="am-form-group tpl-login-remember-me">
                            <input id="remember-me" name="mark" value="1" type="checkbox">
                            <label for="remember-me">
                                记住密码
                            </label>
                        </div>
                        <a class="am-form-group">
                            {{ csrf_field() }}
                            <input id="btn" type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" value="登录后台" />
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <script src="/admin/js/amazeui.min.js"></script>
        <script src="/admin/js/app.js"></script>
    </body>
</html>