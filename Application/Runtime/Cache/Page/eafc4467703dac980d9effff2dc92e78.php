<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>随意游分销平台</title>
    <meta name="keywords" content="随意游旅游同业分销平台">
    <meta name="description" content="随意游依托其核心网络资源平台以及强大的传统营销渠道， 旨在通过搭建开放平台，为旅行社提供旅游最核心的库存价格，以及快速简便的旅游交易流程，真正成为一个“旅游仓库”，最终构建旅游行业当中的生态圈。">
    <link rel="shortcut icon" href="/Public/Page/image/logo-icon.jpg" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="/Public/Page/dist/loginPage.0.0.5.css">
    <style>
        a{
            text-decoration: none;
        }
        #qrcode{
            position: absolute;
            right: 0;
            top: 71px;
        }
        .reg_bt{
            border: 1px solid #5cb047;
            margin-right: 10px;
            color: #5cb047;
        }
        .reg_bt:hover{
            background: #5cb047;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="top">
        <div class="top_wrape">
            <?php if($login): ?><a href="/index.php/Page/Index/fregister" class="reg_bt"  id="distributor">成为分销商</a>
                <?php else: ?>
                <a href="/index.php/Page/Index/login" class="reg_bt"  id="distributor">成为分销商</a><?php endif; ?>
            <a href="/index.php/Page/Index/register" class="reg_bt" target="_blank">注册</a>
        </div>
    </div>
    <div class="logo_bar" style="background:url('/Public/Page/image/bar.jpg');background-size:100% 100%">
        
        <div class="con">
            <div class="content con_b">
                <img id="qrcode" src="/Public/Page/image/qrcode.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="login_line">
        
        <div class="why_choose_us">
            <div>
                <div class="int_head">为什么选随意游？</div>
                <div class="int_foot">Why Choose Us</div>
                <div class="int_line"></div>
            </div>
            <div class="choose_lc clearfix">
                <div class="sin_choose">
                    <div class="choose_img"></div>
                    <p>旅游B2B平台</p>
                    <span>随意游B2C+B2B</span>
                    <span>无缝对接构建B2B2C生态体系</span>
                    <span>我们坚持去做最受客户信赖的平台</span>
                </div>
                <div class="sin_choose">
                    <div class="choose_img"></div>
                    <p>海量供应商资源 </p>
                    <span>拥有自己的供应商系统</span>
                    <span>共享福州所有采购渠道和资源</span>
                    <span>我们坚持为同行提供更加丰富的旅游产品</span>
                </div>
                <div class="sin_choose">
                    <div class="choose_img" style="width: 130px; background-position: -249px -100px;"></div>
                    <p>优质的服务 </p>
                    <span>专属客户经理</span>
                    <span>强大的计调团队</span>
                    <span>我们坚持一切以客户的需求为依归</span>
                </div>
                <div class="sin_choose">
                    <div class="choose_img" style="width: 130px; background-position: -382px -100px;"></div>
                    <p>移动收客解决方案</p>
                    <span>微信公众号为同行收客</span>
                    <span>随意游手机站方便同行下单</span>
                    <span>我们坚持为同行提供最优的营销系统</span>
                </div>
            </div>
        </div>
        <!-- 我们的产品 -->
        <div class="us_product">
            <div>
                <div class="int_head">我们的产品</div>
                <div class="int_foot">Our Products</div>
                <div class="int_line"></div>
            </div>
            <div class="our_pro">
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro1.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon youlun"></span><span class="hover_tit">邮轮</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro2.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon chujing"></span><span class="hover_tit">出境游</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro3.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon guoneiyou"></span><span class="hover_tit">国内游</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro4.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon jiujing"></span><span class="hover_tit">酒店+景点</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro5.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon zhoubian"></span><span class="hover_tit">周边跟团</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro6.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon wanle"></span><span class="hover_tit">国际玩乐</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro7.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon qianzheng"></span><span class="hover_tit">签证</span></div><div class="layer"></div>
                </div>
                <div class="single_pro">
                    <img src="/Public/Page/image/beauty_pro8.jpg" alt="">
                    <div class="hover_pro"><span class="hover_icon jiudian"></span><span class="hover_tit">酒店</span></div><div class="layer"></div>
                </div>
            </div>
        </div>
        <!-- 随意游平台做什么 -->
        <div class="what_we_do">
            <div>
                <div class="int_head">随意游平台做什么？</div>
                <div class="int_foot">About Us</div>
                <div class="int_line"></div>
            </div>
            <div class="clearfix do_content">
                <div class="do_img"><img src="/Public/Page/image/whatwedo.png" alt="随意游是做什么的？"></div>
                <div class="do_word">
                    <div>
                        <p><i>“</i><span>随意游</span>是福建领先的在线分销旅游平台公司。</p>
                        <p>秉承着“让更多人享受旅游的乐趣”的理念，</p>
                        <p>提供快速简便的旅游交易流程，</p>
                        <p>依托其核心网络资源平台以及强大的传统营销渠道，</p>
                        <p>为旅行社提供旅游最核心的库存价格，方便各旅游相关机构的销售。<i>”</i></p>
                    </div>
                </div>
            </div>

        </div>
        <!-- 入住流程 -->
        <div class="how_to_reg" style="background:url('/Public/Page/image/12.jpg');background-size:100% 100%">
            
            
        </div>
        <!-- 10大保障 -->
        <div class="login_img06">
            <div class="promise">
                
            </div>
        </div>
    </div>
    <div class="end">
        <div class="foot">
            <div class="foot_con">
                <p><a style="color:#666" class="a_keepRecodeInfo" href="http://www.miibeian.gov.cn/" target="_blank" title="备案序号：苏ICP备09033604号-30" rel="nofollow">备案序号：闽ICP备17030525号-1</a>
                </p>
            </div>
        </div>
    </div>
    


</body></html>