<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_469978_0ku5qokkalb4kj4i.css">
    <link rel="stylesheet" href="/Public/Page/dist/p_route.min.css">
    <link rel="icon" type="image/jpg" href="/Public/Page/image/logo-icon.jpg">
    <title>随意游</title>
</head>

<body>
<header id="topTips">
    <div class="top-tips">
        <div class="top-item">
            <i class="syy icon-dianhua"></i>官方咨询电话 : 18512009795
        </div>
        <div class="top-item" id="wxCode">
            <i class="syy icon-erweima"></i>微信公众号
        </div>
    </div>
</header>

<div id="nav">
    <div class="nav-box">
        <a href="<?php echo U('index');?>">
            <div class="nav-item">首页</div>
        </a>
        <a href="<?php echo U('groupList');?>">
            <div class="nav-item-on">跟团游</div>
        </a>
        <a href="<?php echo U('seceneyList');?>">
            <div class="nav-item">景酒套餐</div>
        </a>
        <a href="<?php echo U('tickList');?>">
            <div class="nav-item">景区门票</div>
        </a>

        <div class="login-register">
            <?php if(!empty($mobile)): ?><a class="lr" href=""><?php echo ($mobile); ?></a>
                <a class="lr" href="<?php echo U('Tourist/logingOut');?>">退出</a>
                <?php else: ?>
                <a class="lr" href="<?php echo U('Tourist/usershowLogin');?>">登陆</a>
                <a class="lr" href="<?php echo U('Tourist/userRegistShow');?>">注册</a><?php endif; ?>

        </div>
    </div>
</div>

<div id="background">
    <img id="bigBg" src="/Public/Page/image/bg.jpg" alt="">
    <div id="selectItem">
        <ul class="line-item" id='jg'>
            <li class="line-name">价格区间 :</li>
            <li class="item on" id='jn'>不限</li>
            <li class="item" onclick="priceC(this,0,100)">100以内</li>
            <li class="item" onclick="priceC(this,100,500)">100~500</li>
            <li class="item" onclick="priceC(this,5,1000)">500~1000</li>
            <li class="item" onclick="priceC(this, 1000,10000)">大于1000</li>
            <li class="item">
                <input class="price-area" id="cbp" type="text">~<input class="price-area" id='cep' type="text">
                <button id="priceBtn">确定</button>
            </li>
        </ul>
        <ul class="line-item" id='xc'>
            <li class="line-name">行程天数 :</li>
            <li class="item on" id="xn">不限</li>
            <li class="item" onclick="dayC(this,'1')">1天</li>
            <li class="item" onclick="dayC(this,'2')">2天</li>
            <li class="item" onclick="dayC(this,'3')">3天</li>
            <li class="item" onclick="dayC(this,'4')">4天</li>
            <li class="item" onclick="dayC(this,'5')">5天</li>
            <li class="item" onclick="dayC(this,'6')">6天</li>
            <li class="item" onclick="dayC(this,'7')">7天</li>
            <li class="item" onclick="dayC(this,'8')">8天</li>
            <li class="item" onclick="dayC(this,'9')">9天</li>
            <li class="item" onclick="dayC(this,'10')">10天及以上</li>
        </ul>
        <ul class="line-item" id="ga">
            <li class="line-name">出发地 :</li>
            <li class="item on" id='bn'>不限</li>
            <li class="item" id='bf'>福州</li>
            <li class="item" id='bp'>平潭</li>
        </ul>
        <ul class="line-item" id='ge'>
            <li class="line-name">目的地 :</li>
            <li class="item on" id='en'>不限</li>
            <li class="item" id='ef'>福州</li>
            <li class="item" id='ep'>平潭</li>
        </ul>
        <div class="item-box">
            <input class="seach-inp" type="text" id="allSearchInp" placeholder="我想去...">
            <button class="search-btn" id="allSearchBtn">
                <i class="syy icon-sousuo" id='cb'></i>
            </button>
        </div>
    </div>
</div>

<div id="content">
    <div class="sort-bar" id='od'>
        <div class="sort-item on" id='zh'>综合排序</div>
        <div class="sort-item" id='xl'>销量优先</div>
        <div class="sort-item" id='asprice'>价格从低到高</div>
        <div class="sort-item" id='desprice'>价格从高到低</div>
    </div>
    <div class="content-box" id='list'>

    </div>
</div>


<footer id="footer">
    <div class="footer-content">
        <img class="bottom-logo" src="/Public/Page/image/bottom.png" alt="" width="150">
    </div>
</footer>
</body>
<script src="/Public/Page/dist/p_route.min.js"></script>
<script src="/Public/common/jquery-2.1.1.min.js"></script>
<script>

    function addGroup() {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
            }
        })
    }

    addGroup();

    $('#bf').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'gAddress': '福州'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg li').removeClass('on')
                $('#jn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en ').addClass('on')
                $('#ga li').removeClass('on')
                $('#bf').addClass('on')
            }
        })
    })
    $('#bn').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en ').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
            }
        })
    })
    $('#ef').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'eAddress': '福州'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li').removeClass('on')
                $('#ef').addClass('on')
            }
        })
    })
    $('#en').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li').removeClass('on')
                $('#en').addClass('on')
            }
        })
    })
    $('#bp').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'gAddress': '平潭'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en ').addClass('on')
                $('#ga li').removeClass('on')
                $('#bp').addClass('on')
            }
        })
    })
    $('#ep').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'eAddress': '平潭'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $('#xn').addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#ep  ').addClass('on')
            }
        })
    })

    function dayC(c, id) {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'day': id},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $(c).addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')
            }
        })
    }

    function priceC(c, ap, bp) {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'ap': ap, 'bp': bp},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')
                $('#jg li').removeClass('on')
                $(c).addClass('on');
            }
        })
    }

    $('#priceBtn').click(function () {
        cbp = $('#cbp').val();
        cep = $('#cep').val();
        if (cbp == '' || cep == '') {
            alert('价格区间请填写完整')
            return false;
        }
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'cbp': cbp, 'cep': cep},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')
                $('#jg li').removeClass('on')
            }
        })
    })

    $('#cb').click(function () {
        gad = $('#allSearchInp').val();
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'gad': gad},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')

            }
        })
    })

    $('#xl').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'xl': 'aa'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#od div').removeClass('on');
                $('#xl').addClass('on')
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')

            }
        })
    })

    $('#asprice').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'asprice': 'asprice'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#od div').removeClass('on');
                $('#asprice').addClass('on')
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')

            }
        })
    })

    $('#desprice').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            data: {'desprice': 'desprice'},
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#od div').removeClass('on');
                $('#desprice').addClass('on')
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')

            }
        })
    })
    $('#zh').click(function () {
        $.ajax({
            url: "<?php echo U('groupLi');?>",
            method: "POST",
            dataType: "HTML",
            success: function (response) {
                $('#list').html(response)
                $('#od div').removeClass('on');
                $('#zh').addClass('on')
                $('#xc li').removeClass('on')
                $("#xn").addClass('on')
                $('#jg').removeClass('on')
                $('#jn').addClass('on')
                $('#ga li').removeClass('on')
                $('#bn').addClass('on')
                $('#ge li ').removeClass('on')
                $('#en  ').addClass('on')

            }
        })
    })
</script>
</html>