<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录--随意游</title>

    <link rel="stylesheet" href="/Public/Page/dist/login.min.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_469978_2tq1t0jb4mhlrf6r.css">
    <link rel="icon" type="image/jpg" href="/Public/Page/image/logo-icon.jpg">
</head>
<body>
    <div class="top">

    </div>
    <div>
        <img class="bg" src="/Public/Page/image/bg-login.png" alt="登录背景">
    </div>
    
    <div class="content">

        <div class="left" >
            <img class="lg" src="/Public/Page/image/lg-bg.png" >
        </div>
        
        <div class="right">
            <h1 class="lg-text">登 录</h1>
            <div class="lg-div lg-div-top">
                <i class="syy icon-user"></i>
                <input class="btn-t" type="text" maxlength="13" id="phoneIpn" placeholder="请输入手机号" >
            </div>

            <div class="lg-div">
                <i class="syy icon-psd"></i>
                <input class="btn-t" type="password" maxlength="13" id="loginPwd" placeholder="请输入密码">
            </div>

            <div class="psd-reg">
                <a href="#" class="color-00AAFF">忘记密码？</a>
                <p class="reg">
                    <span>没有账号？</span>
                    <a href="#" class="color-00AAFF">立即注册</a>
                </p>
            </div>

            <div>
                <button type="button" class="btn" id="button">登 录</button>
            </div>

            <p class="login-cue" id="loginCue"></p>

            <div class="line-div">
                <span class="line-ib"></span>
                <span class="line-text">S Y Y</span>
                <span class="line-ib"></span>
            </div>
        </div>
    </div>
    <input type="hidden" value="<?php echo U('UserLogin/login_check');?>" id="loginUrl">
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Page/dist/login.min.js"></script>
</html>