var infos = [];
    function err(ele,info)
    {
        ele.next().text(info).css('color','red');
    }
    //检测用户账号是否符合规则
    $('#uname').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户账号不能为空,请重新输入');
            infos[0] = false;
            return false;
        }
        var exp = /^[a-zA-z]\w{6,18}$/;
        if (! exp.test(text)){
            err($(this),'用户账号格式不正确,请重新输入');
            infos[0] = false;
            return false;
        }
        var _this = $(this);
        //发送ajax判断用户账号是否已经注册
        $.get('/admin/check',{
            'type':'uname',
            'val':text
        },function(data){
            if(data != 0){
                _this.next().text('用户账号已存在,请更改').css('color','red');
                infos[0] = false;
                return false;
            } else {
                _this.next().css('color','#39A824').text('✔');
               infos[0] = true;
               return true;
            }
        });
    });

    //检测用户昵称是否符合规则
    $('#nick_name').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户昵称不能为空,请重新输入');
            infos[1] = false;
            return false;
        }
        var exp = /^\S{2,8}$/;
        if (! exp.test(text)){
            err($(this),'用户昵称格式不正确,请重新输入');
            infos[1] = false;
            return false;
        }
        var _this = $(this);
        //发送ajax判断用户昵称是否已经注册
        $.get('/admin/check',{
            'type':'nick_name',
            'val':text
        },function(data){
            var result = JSON.parse(data);
            if(result){
                _this.next().text('用户昵称已存在,请更改').css('color','red');
                infos[1] = false;
                return false;
            } else {
                _this.next().css('color','#39A824').text('✔');
                infos[1] = true;
                return true;
            }
        });
    });

    //检测用户手机号是否符合规则
    $('#tel').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户手机号码不能为空,请重新输入');
            infos[2] = false;
            return false;
        }
        var exp = /^1[345678]\d{9}$/;
        if (! exp.test(text)){
            err($(this),'用户手机号码格式不正确,请重新输入');
            infos[2] = false;
            return false;
        }
        var _this = $(this);
        //发送ajax判断用户账号是否已经注册
        $.get('/admin/check',{
            'type':'tel',
            'val':text
        },function(data){
            var result = JSON.parse(data);
            if(result){
                _this.next().text('用户手机号码已存在,请更改').css('color','red');
                infos[2] = false;
                return false;
            } else {
                _this.next().css('color','#39A824').text('✔');
                infos[2] = true;
                return true;
            }
        });
    });

    //检测用户邮箱是否符合规则
    $('#email').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户邮箱不能为空,请重新输入');
            infos[3] = false;
            return false;
        }
        var exp = /^\w+@\w+(\.com|\.cn|\.cc|\.net|\.co|\.top){1,2}$/;
        if (! exp.test(text)){
            err($(this),'用户邮箱格式不正确,请重新输入');
            infos[3] = false;
            return false;
        }
        var _this = $(this);
        //发送ajax判断用户账号是否已经注册
        $.get('/admin/check',{
            'type':'email',
            'val':text
        },function(data){
            var result = JSON.parse(data);
            if(result){
                _this.next().text('用户邮箱已存在,请更改').css('color','red');
                infos[3] = false;
                return false;
            } else {
                _this.next().css('color','#39A824').text('✔');
                infos[3] = true;
                return true;
            }
        });
    });

    $('#upwd').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户密码不能为空,请重新输入');
            infos[4] = false;
            return false;
        }
        var exp = /^\S{6,18}$/;
        if (! exp.test(text)){
            err($(this),'用户密码格式不正确,请重新输入');
            infos[4] = false;
            return false;
        }
        $(this).next().css('color','#39A824').text('✔');
        infos[4] = true;
        return true;
    });

    $('#reupwd').blur(function(){
        var text = $(this).val();
        if (! text) {
            err($(this),'用户密码不能为空,请重新输入');
            infos[5] = false;
            return false;
        }
        var exp = /^\S{6,18}$/;
        if (! exp.test(text)){
            err($(this),'用户密码格式不正确,请重新输入');
            infos[5] = false;
            return false;
        }

        if ($(this).val() != $('#upwd').val()) {
            err($(this),'两次密码输入不一致,请重新输入');
            infos[5] = false;
            return false;
        }
        $(this).next().css('color','#39A824').text('✔');
        infos[5] = true;
        return true;
    });
    //当表单提交时检测
    $('form').submit(function(){
        if(! infos.length){
            layer.alert('您还没填写数据,不能提交', {
            skin: 'layui-layer-molv'
            ,closeBtn: 0
            });
            return false;
        }

        for(var i=0;i<infos.length;i++){
            if (! infos[i]) {
                return false;
            }
        }
        //检查错误信息
        layer.msg('确定添加此管理员？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //发送ajax
            var formData = new FormData($('#user_form')[0]);
            $.ajax({
                type:"POST",
                url:"/admin/user",
                data:formData,
                asyc:true,
                cache:false,
                contentType:false,
                processData:false,
                success:function(data){
                    if(data){
                        layer.msg('管理员添加完成', {icon: 6,time: 1000});
						location.href = '/admin/user';
                    }else {
                        layer.msg('管理员添加失败', {icon: 5});
                    }
                },
                error:function(data){
                    //服务错误
                }
            });
        });
        return false;
    });