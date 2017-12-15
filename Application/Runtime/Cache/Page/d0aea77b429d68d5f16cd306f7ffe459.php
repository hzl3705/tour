<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_469978_oxn01xvt918umcxr.css">
    <link rel="stylesheet" href="/Public/Page/dist/search.min.css">
    <link rel="icon" type="image/jpg" href="/Public/Page/image/logo-icon.jpg">
    <title>随意游</title>
</head>
<script>
    window.CONTROLLER = '/index.php/Page/Index';
</script>
<body>
    <header id="topTips">
        <div class="top-tips">
            <div class="top-item">
                <i class="syy icon-dianhua"></i>官方咨询电话 : 18512009795</div>
            <div class="top-item" id="wxCode">
                <i class="syy icon-erweima"></i>微信公众号</div>
        </div>
    </header>

    <div id="nav">
        <div class="nav-box">
            <a href="/index.php/Page/Index/home">
                <div class="nav-item">首页</div>
            </a>
            <a href="/index.php/Page/Index/s_route">
                <div class="nav-item">跟团游</div>
            </a>
            <a href="/index.php/Page/Index/s_hotel">
            <div class="nav-item">景酒套餐</div>
            </a>
            <div class="nav-item-on">景区门票</div>

            <div class="login-register">
                <a class="lr" href="#">登陆</a>
                <a class="lr" href="#">注册</a>
            </div>
        </div>
    </div>

    <div id="background">
        <img id="bigBg" src="/Public/Page/image/bg.jpg" alt="">

        <div id="selectItem">
            <div class="item-box">
                <input class="seach-inp" type="text" id="allSearchInp" placeholder="输入景区名搜索...">
                <button class="search-btn" id="allSearchBtn">
                    <i class="syy icon-sousuo"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="sort-bar" style="display:none">
            <div class="sort-item on">综合排序</div>
            <div class="sort-item">销量优先</div>
            <div class="sort-item">价格从低到高</div>
            <div class="sort-item">价格从高到低</div>
        </div>
        <div id="contentBox" class="content-box">
            
        </div>
    </div>

    <footer id="footer">
        <div class="footer-content">
            <img class="bottom-logo" src="/Public/Page/image/bottom.png" alt="" width="150">
        </div>
    </footer>
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Page/dist/search.min.js"></script>

</html>