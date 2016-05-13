
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>会员登陆-找煤网-中国领先的煤炭全产业链电商平台</title>
    <meta name="description" content="找煤网,找煤,找煤炭网,找煤,买煤，团购煤炭，采购煤炭，动力煤,烟煤,无烟煤,焦煤，焦炭,化工煤，连焦炭，兰炭，块煤，喷吹煤，煤炭市场,买煤">
    <meta name="keywords" content="找煤网(zhaomei.com),找煤够简单!400-065-6868专线客服团购煤炭,团购低价动力煤,烟煤,无烟煤,焦煤,焦炭,化工煤,连焦炭,兰炭,块煤,喷吹煤">
    <link href="{{ asset('style/css/showLoading.css') }}" rel="stylesheet" />
    <link href="{{ asset('style/css/common.css') }}" rel="stylesheet" />
    <link href="{{ asset('style/css/style.css') }}" rel="stylesheet"/>
    
    <link rel="stylesheet" href="{{ asset('style/css/login.css') }}"/>
    <style type="text/css">
        .item { position: relative; }
        .error-msg {color: red;}
    </style>

    <!--CurrentSiteInfo:Center-120.26.200.169-->
</head>
<body>
    <div class="chrometips chromeTip" style="display:none;">
        <a href="javascript:void(0);" class="btntips-close" id="chromeTipCloseBtn">×</a>
        <div class="inner-chrometips">
            <p class="chrm-word2">
                您使用 Internet Explorer 版本过低，在本页面的显示效果可能有差异。建议您升级到
                <a href="http://www.microsoft.com/china/windows/internet-explorer/" target="_blank" rel="nofollow">Internet Explorer 8</a>以上或者以下浏览器：
                <a href="http://www.mozillaonline.com/" rel="nofollow">Firefox</a> /
                <a href="http://www.google.com/chrome/?hl=zh-CN" rel="nofollow">Chrome</a> /
                <a href="http://www.apple.com.cn/safari/" rel="nofollow">Safari</a> /
                <a href="http://www.operachina.com/" rel="nofollow">Opera</a>
            </p>
        </div>
    </div>
   






<div class="top-bar">
    <div class="top-Bd grid-1200 clear">
        <ul class="t-BdL t-menu">
            <li class="t-m t-m-home lkm">
                <a href="/"><i class="t-ico iconfont">&#x3435;</i>首页</a>
            </li>
                <li class="t-m t-m-register lkmA">
                    <div class="t-m-hd">
                        <a href="/Account/Register" target="_blank">免费注册</a>
                    </div>
                </li>
                <li class="t-m t-m-register lkmB">
                    <div class="t-m-hd">
                        <a href="/Account/Login" target="_blank">立即登录</a>
                    </div>
                </li>
        </ul>
        <ul class="t-BdR t-menu">
            <li class="t-m lkm t-m-app ui-deg180" data-type="mhover">
                <div class="t-m-hd">
                    <i class="t-ico iconfont">&#xf00a2;</i>掌上找煤
                    <i class="m-i iconfont  ui-deg-icon">
                        &#xf02a9;
                    </i>
                </div>
                <div class="t-m-bg"></div>
                <div class="t-m-bd  menu-list">
                    <div class="wx-box">
                        <img src="/style/img/wx_a.png" alt="到一扫，下载App" />
                        <div class="wx-line"></div>
                        <img src="/style/img/wx_d.png" alt="到一扫，添加订阅号" />
                    </div>
                </div>
            </li>
            <li class="t-m lkm t-m-center ui-deg180" data-type="mhover">
                <div class="t-m-hd">
                    <a href="#">
                        帮助中心
                    </a>
                    <i class="m-i iconfont  ui-deg-icon">
                        &#xf02a9;
                    </i>
                </div>
                <div class="t-m-bd  menu-list">
                    <ul class="t-m-panel">
                        <li><a href="/Intro/AboutUs" target="_blank">关于我们</a></li>
                        <li><a href="/Help/HowDelgateTrade" target="_blank">帮助中心</a></li>
                    </ul>
                </div>
            </li>
            <li class="t-m lkm t-m-phone">
                <div class="t-m-hd">
                    <i class="t-ico iconfont">&#xf01ef;</i>客服热线：<em>400-065-6868</em>
                </div>
            </li>
        </ul>
    </div>
</div><div class="head">
    <div class="headNav grid-1200 clear">
        <h1 class="logo">
            <a href="/"><img src="/style/img/logo.png" alt="找煤网" /></a>
        </h1>
        <div class="logo-title">
            <img class="title-mg" src="/style/img/logo_title.png" alt="找煤，够简单" />
        </div>
        <div class="ui-t-search">
            <div class="am-form">
                <div class="s-form">
                    <div class="s-tab" data-type="mhover">
                        <a href="javascript:void(0)" class="searchSelected" search-type="supply">现货</a>
                        <div class="con">
                            <a href="javascript:void(0)" search-type="caigou">采购</a>
                        </div>
                        <i class="iconfont"></i>
                    </div>
                    <div class="s-input">
                        <input type="text" id="tbSearchKey" class="zm-input" placeholder="搜索商城现货，输入如品种、牌号、厂家等" />

                    </div>
                </div>
                <div class="s-btn">
                    <button type="button" id="btnSearch" class="am-btn am-btn-primary">搜索</button>
                </div>
                <div class="ac-results" style="display: none;">
                    <div class="ac-cookie">
                        <div class="ac-tilte-hd">

                        </div>
                    </div>
                    <div class="ac-hotwords">
                        <div class="ac-tilte-hd">
                            <h3>热门搜索</h3>
                        </div>
                        <ul class="ac-hot-list"></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="t-menu lkm">

            <ul class="m-item-list" id="show-tips-items">
                    <li class="m-item ">
                        <a href="/" target="_self">首页</a>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="/selfmall" target="_self">找煤商城</a>
                            <div class="hotbox">
                                <i class="hot"></i>
                            </div>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="/supply" target="_self">现货资源</a>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="/caigou" target="_self">采购信息</a>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="http://56.zhaomei.com" target="_blank">找煤物流</a>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="/financial" target="_self">找煤金融</a>
                        <i class="m-b"></i>                        
                    </li>
                    <li class="m-item ">
                        <a href="/news" target="_self">现货行情</a>
                                                
                    </li>
            </ul>
        </div>
    </div>
</div>


<div class="main">
    <div class="content">
        <div class="loginbox">

            <h2>会员登录 <span><a href="/Account/Register" class="t2">免费注册</a></span></h2>
<form action=""  method="post"><input id="Src" name="Src" type="hidden" value="" /><input id="ReturnUrl" name="ReturnUrl" type="hidden" value="" />                <div class="loginform">
                    {!! csrf_field() !!}
                    {{ print_r($errors) }}
                    <div class="item input-login">
                        <label>手机</label>
                        <input class="username" data-val="true" data-val-required="请输入帐号" id="Account" name="mobile" type="text" value="" />
                    </div>
                    <div class="error-msg"><span class="field-validation-valid" data-valmsg-for="Account" data-valmsg-replace="true"></span></div>
                    <div class="item input-login">
                        <label>密码</label>
                        <input class="password" data-val="true" data-val-required="请输入密码" id="Password" name="password" type="password" />
                    </div>
                    <div class="error-msg"><span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
                    <div class="item clear">
                        <input class="auto_login" data-val="true" data-val-required="RemeberMeTwoWeek 字段是必需的。" id="RemeberMeTwoWeek" name="RemeberMeTwoWeek" type="checkbox" value="true" /><input name="RemeberMeTwoWeek" type="hidden" value="false" />
                        <span class="t3">两周内自动登录</span>
                        <a class="t4" href="/Account/FogetPassword">忘记密码?</a>
                    </div>
                    <div class="item m0">
                        <button class="btn am-btn am-btn-primary" type="submit">立即登录</button>
                    </div>
                </div>
</form>        </div>
    </div>
</div><!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持--><div class="foot yahei">
    <div class="foot-nav lkmC clear">
        <div class="mod-ft">
            <div class="hd">
                <div class="icon-mod"><i class="iconfont">&#xf01ae;</i></div>
                <h3>友情链接</h3>
            </div>
            <div class="bd">
                <a href="http://www.945156.com/" rel="nofollow" target="_blank">船货网</a>
                <a href="http://www.sspp.co/" rel="nofollow" target="_blank">超级船东</a>
            </div>
        </div>
        <div class="mod-ft">
            <div class="hd">
                <div class="icon-mod"><i class="iconfont">&#xf0148;</i></div>
                <h3>我要买煤炭</h3>
            </div>
            <div class="bd">
                <a href="/Help/HowDelgateTrade" target="_blank">如何委托交易</a>
                <a href="/Help/HowSelfFind" target="_blank">如何自己找货</a>
                <a href="/Help/HowLookOrderStatue" target="_blank">如何查看采购单状态</a>
            </div>
        </div>
        <div class="mod-ft">
            <div class="hd">
                <div class="icon-mod"><i class="iconfont">&#xf0134;</i></div>
                <h3>我要卖煤炭</h3>
            </div>
            <div class="bd">
                <a href="/Help/HowPublicSupply" target="_blank">如何发布供货单</a>
                <a href="/Help/HowLookSupply" target="_blank">如何查看我的供货单</a>
                <a href="/Help/HowCaiToSupply" target="_blank">如何为采购信息供货</a>
            </div>
        </div>
        <div class="mod-ft">
            <div class="hd">
                <div class="icon-mod f20"><i class="iconfont en-ft">?</i></div>
                <h3>帮助中心</h3>
            </div>
            <div class="bd">
                <a href="/Help/RegisterFlow" target="_blank">注册流程</a>
                <a href="/Help/ForgetPwd" target="_blank">无法登录/忘记密码</a>
                <a href="/Help/EditAccount" target="_blank">修改账户信息</a>
            </div>
        </div>
        <div class="mod-ft wx-zm">
            <div class="hd">
                <div class="icon-mod"><i class="iconfont">&#xf014d;</i></div>
                <h3>关注我们</h3>
            </div>
            <div class="bd clear">
                <div class="wx-dy">
                    <div class="tl">找煤网APP <br />(下载客户端)</div>
                    <div class="tm">
                        <img src="/style/img/wx_app.png" alt="" />
                    </div>
                </div>
                <div class="wx-fw">
                    <div class="tl">找煤网视点 <br />(微信订阅号)</div>
                    <div class="tm">
                        <img src="/style/img/wx_dy.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foot-m">
    <div class="foot-snav clear">
        <p class="f-us lkmD">
            <a href="/Intro/AboutUs" target="_blank">关于我们</a>
            <a href="/Intro/FeedBack" target="_blank">意见反馈</a>
            <a href="/Intro/Law" target="_blank">法律声明</a>
            <a href="/Intro/JoinUs" target="_blank">诚聘英才</a>
            <a href="/Intro/ContactUs" target="_blank">联系我们</a>
            <a href="/Intro/CEOMail" target="_blank">CEO邮箱</a>
            <a href="/Intro/FrendLink" class="last-child" target="_blank">友情链接</a>
        </p>
        <p class="f-copy">
            COPYRIGHT © 找煤网 www.zhaomei.com 浙ICP备15016939号
        </p>
        <p class="f-bar">
            <a href="https://credit.szfw.org/CX20150723010836300388.html" rel="nofollow" target="_blank">
                <img src="/style/img/safe1.png" alt="" border="0" style="height: 47px;" />
            </a>
            

            <a key="55ffb358efbfb02412481b14" logo_size="124x47" logo_type="business" href="http://www.anquan.org" target="_blank">
            <script src="https://static.anquan.org/static/outer/js/aq_auth.js"></script></a>

            <a href="javascript:void(0)" target="_blank">
                <img src="/style/img/safe2.png" alt="360网站安全检测" />
            </a>
            <a href="javascript:void(0)" target="_blank">
                <img src="/style/img/safe3.png" alt="工商网监电子标识" />
            </a>
        </p>
    </div>
</div><div class="tool-b">
    <a class="b4" data-type="mhover">返回顶部</a>
</div>

     
    <script type="text/javascript" src="/style/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/style/js/in.js"></script>
    <script src="/style/js/jquery.validate.min.js"></script>
    <script src="/style/js/jquery.unobtrusive-ajax.min.js"></script>
    <script src="/style/js/jquery.validate.unobtrusive.min.js"></script>
    <script src="/style/js/common.js?v=201601311730"></script>
    <script src="/style/js/jquery.iDialog.min.js"></script>
    <script src="/style/js/jquery.showLoading.min.js"></script>
    <script src="/style/js/swiper.js" type="text/javascript"></script>
    <script src="/style/js/main.js" type="text/javascript"></script>
    <script src="/style/js/superslide.2.1.js"></script>
    <script src="/style/js/jquery.watermark.js"></script>
    
</body>
</html>
