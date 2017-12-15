<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册--随意游</title>

    <link rel="stylesheet" href="/Public/Page/dist/register.min.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_469978_0birfdklo7bn8kt9.css">

</head>
<body>
<div class="top">

</div>
<div>
    <img class="bg" src="/Public/Page/image/bg-login.png" alt="登录背景">
</div>

<div class="content">
    <!-- 左 -->
    <div class="left">
        <img class="lg" src="/Public/Page/image/lg-bg.png">
    </div>
    <!-- 左 -->
    <!-- 右 -->
    <div class="right">
        <!-- 注册 -->
        <div id="reg">
            <h1 class="lg-text">注 册</h1>
            <div class="lg-div lg-div-top">
                <i class="syy icon-user"></i>
                <input class="btn-t" type="text" id="mobile" maxlength="13" placeholder="请输入手机号">
            </div>

            <div class="lg-div">
                <i class="syy icon-psd"></i>
                <input class="btn-t" type="password" id="pwd" maxlength="13" placeholder="请输入密码 ( 6-8位字母、数字 )">
            </div>

            <div class="lg-div">
                <i class="syy icon-psd"></i>
                <input class="btn-t" type="password" id="rePwd" maxlength="13" placeholder="请再次输入密码">
            </div>

            <div class="lg-div">
                <i class="syy icon-yanzhengma"></i>
                <input class="btn-t" type="text" id="idCode" maxlength="8" placeholder="验证码">
                <button class="getCode" id='getCode'>获取验证码</button>
            </div>

            <div class="psd-reg">
                <a href="#" class="color-00AAFF">忘记密码？</a>
                <p class="reg">
                    <span>已有账号？</span>
                    <a href="<?php echo ('usershowLogin');?>" class="color-00AAFF">立即登录</a>
                </p>
                <button type="button" class="btn" id="regBtn">注 册</button>
            </div>
            <div id="register-cue"></div>
            <div class="line-div">
                <span class="line-ib"></span>
                <span class="line-text">S Y Y</span>
                <span class="line-ib"></span>
            </div>
        </div>
        <!-- 注册 end-->

        <!-- 注册成功 -->
        <div id="reg-suc" style="display:bolck;">
            <div class="rs-icon">

                <i class="syy icon-kaixin rs-big"></i>
                <input type="hidden" id="regUrl" value="<?php echo U('userRegister');?>">
                <!--<div class="rs-text">-->
                    <!--<span>恭喜您注册成功!</span>-->
                <!--</div>-->
                <div class="rs-btn">
                    <a href="#"><span class="rs-btni">成为分销商</span></a>
                    <a href="#"><span class="rs-btni">返回首页</span></a>
                </div>
            </div>
        </div>
        <!-- 注册成功 end-->
    </div>
    <!-- 右 -->
</div>
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Page/dist/register.min.js"></script>
<script>
    $('#getCode').click(function () {
        mobile = $('#mobile').val();
        pwd = $("#pwd").val();
        repwd = $("#rePwd").val();
        if (mobile == '') {
            alert('请输入手机号')
            return false;
        }
        if (pwd == '') {
            alert('请输入密码')
            return false;
        }
        if (repwd == '') {
            alert('请输入密码')
            return false;
        }
        if (pwd != repwd) {
            alert('两次输入的密码不一样');
            return false;
            l
        }
        $.ajax({
            url: "<?php echo U('Sms/useSendSms');?>",
            method: "POST",
            data: {'mobile': mobile},
            dataType: "JSON",
            success: function (response) {
                if (response.code == 1) {
                    alert('发送成功')
                } else {
                    alert(response.msg)
                }
            }

        })


    })
</script>
</html>