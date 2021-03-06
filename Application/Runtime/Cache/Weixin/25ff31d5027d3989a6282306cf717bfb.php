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

    <link rel="stylesheet" href="//at.alicdn.com/t/font_422207_o6foye54q7meipb9.css">
    <link rel="stylesheet" href="/Public/Weixin/dist/d_route.min.css?st=v1.0.1">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        window.public = "/Public";
        window.controller = "/index.php/Weixin/Index";
        window.CONFIG = <?php echo ($wxconfig); ?>;
    </script>
</head>

<body>

    <div id="reserveMess">
        <p class="title">填写信息</p>
        <div class="ticket-mess">
            <p id="ticketName">--</p>
            <p class="ticket">游玩日期 :
                <span id="ticketTime"></span>
            </p>
        </div>
        <div id="ticketNumBox">
            <p class="subtitle">数量选择</p>
            <div id="peopleNum">

            </div>

            <p class="subtitle" id="zfTitle">自费项目</p>
            <div id="zfNum">

            </div>
        </div>
        <div id="dfcBox">

        </div>
        <p class="reserve-know">
            <input checked type="checkbox" id="reserveCheck"> 我已经查看&nbsp;
            <b id="mustKnow"> 预定须知 </b>&nbsp;,并同意该内容。
        </p>
        <div class="bottom-box">
            <p class="order-total">订单总金额:
                <span class="red">￥</span>
                <span class="red" id="bottomTotalPri">--</span>
            </p>
            <button id="goTourBtn">去填写游客信息</button>
        </div>
    </div>

    <div id="tourristMess" style="display:none">
        <p class="title">
            <i class="iconfont icon-zuojiantou"></i>填写游客信息
        </p>
        <div id="itemContainer">
            <div id="firstItem">
                <div class="item-box">
                    <p class="item-p">
                        <span class="red">1.</span>游客姓名 : </p>
                    <input id="tourName" class="item-inp name" type="text" placeholder="请输入真实姓名">
                </div>
                <div class="item-box">
                    <p class="item-p">手机号码 : </p>
                    <input id="tourMobile" class="item-inp mobile" type="tel" placeholder="请输入手机号码">
                </div>
                <div class="item-box">
                    <p class="item-p">身份证号 : </p>
                    <input id="tourIdentify" class="item-inp identify" type="text" placeholder="请输入身份证号码">
                </div>
            </div>
            <div id="secItem">

            </div>
        </div>

        <div class="remarks-box">
            <p class="title">
                <i class="iconfont icon-shuoming"></i>备注说明</p>
            <textarea placeholder="可输入客人的一些情况和需求，价格信息备注无效" maxlength="100" id="remarks" rows="2"></textarea>
        </div>
        <div class="bottom-box">
            <p class="order-total">订单总金额:
                <span class="red">￥</span>
                <span class="red" id="orderTotalPri">--</span>
            </p>
            <button id="takeOrderBtn">提交订单</button>
        </div>
    </div>
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Weixin/dist/d_route.min.js?st=v1.0.2"></script>

</html>