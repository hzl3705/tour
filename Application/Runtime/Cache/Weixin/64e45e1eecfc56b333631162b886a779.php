<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if(isset($_COOKIE['company'])): echo ($_COOKIE['company']); ?>
            <?php else: ?> 随意游-suiyiyou.net<?php endif; ?>
    </title>
    <link rel="stylesheet" href="/Public/Weixin/dist/order.min.css?st=v1.0.1">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_422207_kse831de677dgqfr.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<script>
    window.public = "/Public";
    window.controller = "/index.php/Weixin/Index";
    window.CONFIG = <?php echo ($wxconfig); ?>;
</script>

<body>
    <p class="title">订单管理
        <i class="syy icon-liebiao"></i>
    </p>
    <div class="order">
        <div id="list" class="list hide">
            <li class="href">
                <a href="/index.php/Weixin/Index/home">首页</a>
            </li>
            <li class="href">
                <a href="/index.php/Weixin/Index/s_route">跟团线路</a>
            </li>
            <!-- <li class="href">
                <a href="/index.php/Weixin/Index/s_hotel">特惠酒店</a>
            </li> -->
            <li class="href">
                <a href="/index.php/Weixin/Index/s_ticket">景区门票</a>
            </li>
        </div>

        <div class="choose-type">
            <div id="orderType">
                <span id="typeItem">跟团线路</span>
                <i class="syy icon-xiajiantou"></i>
            </div>
        </div>

        <ul id="typeList" class="type-list hide">
            <li class="type-item" data-type="group">跟团线路</li>
            <!-- <li class="type-item" data-type="scenery">特惠酒店</li> -->
            <li class="type-item" data-type="tick" style="border-bottom:none">景区门票</li>
        </ul>
    </div>
    <ul class="state-list">
        <li class="state-item" data-status="4">未付款</li>
        <li class="state-item on" data-status="8">待确认</li>
        <li class="state-item" data-status="2">已确认</li>
        <li class="state-item" data-status="1">已出行</li>
        <li class="state-item" data-status="3">已取消</li>
    </ul>

    <div id="orderList">

    </div>
    <div id="noOrder">
        <i class="syy icon-no-order"></i>
        <p class="tips">您还没有相关订单</p>
    </div>
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Weixin/dist/order.min.js?st=v1.0.2"></script>

</html>