<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if(isset($_COOKIE['company'])): echo ($_COOKIE['company']); ?>
        <?php else: ?> 随意游-suiyiyou.net<?php endif; ?></title>
    <link rel="stylesheet" href="/Public/Weixin/dist/route_pay.min.css?st=v1.0.1">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        window.public = "/Public";
        window.controller = '/index.php/Weixin/Jsapi';
    </script>
</head>

<body>
    <input type="hidden" id='js' value="<?php echo ($jsApiParameters); ?>">

    <p class="main-title">待支付订单</p>
    <img id="orderPic" src="" alt="">
    <div id="orderMessBox">
        <div class="item">
            <p class="title">订单号 : </p>
            <p class="mess" id="orderNum">--</p>
        </div>
        <div class="item">
            <p class="title">产品ID : </p>
            <p class="mess" id="proNum">--</p>
        </div>
        <div class="item">
            <p class="title">产品名称 : </p>
            <p class="mess" id="orderName">--</p>
        </div>
        <div class="item">
            <p class="title">出游日期 : </p>
            <p class="mess" id="orderTime">--</p>
        </div>
        <div class="item">
            <p class="title">成人数量 : </p>
            <p class="mess" id="manNum">--</p>
        </div>
        <div class="item">
            <p class="title">儿童数量 : </p>
            <p class="mess" id="childNum">--</p>
        </div>
        <div class="item">
            <p class="title">单房差 : </p>
            <p class="mess" id="dfcNum">--</p>
        </div>
        <div class="item">
            <p class="title">自费项目 : </p>
            <p class="mess" id="zfInfo">--</p>
        </div>
        <div class="item">
            <p class="title">联系人 : </p>
            <p class="mess" id="connectName">--</p>
        </div>
        <div class="item">
            <p class="title">联系手机号 : </p>
            <p class="mess" id="connectMobile">--</p>
        </div>
        <div class="item">
            <p class="title">身份证 : </p>
            <p class="mess" id="connectIdent">--</p>
        </div>
        <div id="identifyBox"></div>
        <div class="item">
            <p class="title">备注 : </p>
            <p class="mess" id="remarks">--</p>
        </div>
    </div>
    <div class="bottom-box">
        <p class="price">总价 : ￥
            <span id="totalNum">--</span>
        </p>
        <button id="takeOrderBtn">立即下单</button>
    </div>
</body>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script src="/Public/Weixin/dist/route_pay.min.js?st=v1.0.1"></script>
<script>
    //调用微信JS api 支付
    function jsApiCall() {

        var js = $('#js').val();

        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',
            <?php echo ($jsApiParameters); ?>,
            function (res) {
                if (res.err_msg == "get_brand_wcpay_request:ok") {
                    alert("支付成功!");
                    location.href = "http://www.suiyiyou.net<?php echo U('Index/order');?>";

                } else if (res.err_msg == "get_brand_wcpay_request:cancel") {
                    alert("支付取消!");

                } else {
                    alert("支付失败!");
                }
            }
        );
    }

    function callpay() {
        if (typeof WeixinJSBridge == "undefined") {
            if (document.addEventListener) {
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            } else if (document.attachEvent) {
                document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        } else {
            jsApiCall();
        }
    }

    $('#takeOrderBtn').click(function () {
        callpay();
    })
</script>

</html>