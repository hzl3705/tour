<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        <?php if(isset($_COOKIE['company'])): echo ($_COOKIE['company']); ?>
            <?php else: ?> 随意游-注册<?php endif; ?>
    </title>
    <script src="/Public/common/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="/Public/Weixin/dist/register.min.css?st=v1.0.1">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_422207_sulo1r8kqjafko6r.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        window.public = "/Public";
        window.controller = "/index.php/Weixin/Index";
        window.CONFIG = <?php echo ($wxconfig); ?>;
    </script>
</head>

<body>
    <div id="container" style="background:url('/Public/Weixin/image/loginbg2.jpg') no-repeat;background-size: 100% 100%;">

        <div id="wxHead">
            <div id="headBox">
                <div id="picBox">
                    <img id="headPic" src="/Public/Weixin/image/wxbg.png">
                </div>
            </div>
        </div>

        <div id="inputBox">
            <div class="mobile-box">
                <i class="syy icon-user"></i>
                <input class="mobile-inp" type="tel" maxlength="11" id="mobileInp" placeholder="请输入您的手机号码">
            </div>
            <div class="mobile-box">
                <i class="syy icon-psd"></i>
                <input type="password" class="mobile-inp" id="psd" placeholder="请输入您的密码">
            </div>
            <div class="mobile-box">
                <i class="syy icon-psd"></i>
                <input type="password" class="mobile-inp" id="rePsd" placeholder="确认密码">
            </div>
            <div class="mobile-box">
                <i class="syy icon-duanxin"></i>
                <input class="mobile-inp" type="text" maxlength="6" id="codeInp" placeholder="短信验证码">
                <button id="getCodeBtn">获取验证码</button>
            </div>
        </div>
        <p class="login-page">
            <a href="/index.php/Weixin/Index/login" id="loginPage">已有账号，去登陆</a>
        </p>
        <button id="bindAndLoginBtn">绑定手机并登陆</button>
        <p class="tips">初次登陆需绑定您的手机</p>
    </div>


</body>
<script src="/Public/Weixin/dist/register.min.js?st=v1.0.1"></script>

</html>