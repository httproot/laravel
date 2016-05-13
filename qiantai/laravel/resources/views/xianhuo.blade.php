
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
		<meta name="_token" content="{{csrf_token()}}">
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>现货资源 煤炭现货-找煤网-中国领先的煤炭全产业链电商平台</title>
    <meta name="description" content="找煤网（zhaomei.com），找煤够简单！为您提供最新最全的全国煤炭现货资源信息，提供动力煤、烟煤、无烟煤、焦煤、焦炭、喷吹煤、块煤、精煤、电煤、化工煤现货资源。">
    <meta name="keywords" content="找煤网,找煤,煤炭现货,动力煤、烟煤、无烟煤、焦煤、焦炭、喷吹煤、块煤、精煤、电煤、化工煤,全国煤炭">
    <link href="{{ asset('style/css/showLoading.css') }}" rel="stylesheet" />
    <link href="{{ asset('style/css/supply.css') }}" rel="stylesheet" />

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
                        <img src="./style/img/wx_a.png" alt="到一扫，下载App" />
                        <div class="wx-line"></div>
                        <img src="./style/img/wx_d.png" alt="到一扫，添加订阅号" />
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
            <a href="/"><img src="./style/img/logo.png" alt="找煤网" /></a>
        </h1>
        <div class="logo-title">
            <img class="title-mg" src="./style/img/logo_title.png" alt="找煤，够简单" />
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
                    <li class="m-item current-page-item">
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

<div class="search-query">

    <div class="collapse">
        <span class="hide">更多筛选<i class="iconfont">&#xf02a9;</i></span>
        <span class="show">收起筛选<i class="iconfont">&#xf02aa;</i></span>
    </div>
</div>
<div class="searchbox">
    <div class="search-list" id="div_coal_cate_type_id" data-searchgroupkey="coal_cate_type_id">
        <strong class="tit">分类</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="False" data-searchgroupkey="coal_cate_type_id">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="1">
            <a class=" ">动力煤</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="2">
            <a class=" ">炼焦煤</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="3">
            <a class=" ">无烟煤</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="5">
            <a class=" ">焦炭/兰炭 </a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="6">
            <a class=" ">生物质燃料</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_chandi_id" data-searchgroupkey="chandi_id">
        <strong class="tit">产地</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="chandi_id">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="20">
            <a class=" ">内蒙古</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="21">
            <a class=" ">山西</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="22">
            <a class=" ">陕西</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="56">
            <a class=" ">河北</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="68">
            <a class=" ">山东</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="74">
            <a class=" ">朝鲜</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="76">
            <a class=" ">安徽</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="77">
            <a class=" ">河南</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="109">
            <a class=" ">俄罗斯</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="110">
            <a class=" ">黑龙江</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="130">
            <a class=" ">吉林</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="148">
            <a class=" ">辽宁</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="192">
            <a class=" ">湖南</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="251">
            <a class=" ">甘肃</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="288">
            <a class=" ">宁夏</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="301">
            <a class=" ">贵州</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="339">
            <a class=" ">四川</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="372">
            <a class=" ">云南</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="471">
            <a class=" ">越南</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="476">
            <a class=" ">南非</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="479">
            <a class=" ">澳大利亚</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="482">
            <a class=" ">印度尼西亚</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="488">
            <a class=" ">美国</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="492">
            <a class=" ">蒙古国</a>
        </li>
        <li class="showmore" data-searchgroupkey="chandi_id">
            <a style="color:#168bb4">更多<i class='iconfont'>+</i></a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list">
        <strong class="tit">交割地</strong>
        <div class="con area-panel">
            <div class="area-panel-nav">
                <ul class="any jgd">
                    <li><a class="clear-add on" data-location-index="0">不限</a></li>
                </ul>
                <ul class="list">
                        <li class=""><a data-searchgroupkey="city_id1">华东<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id2">华北<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id4">西北<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id5">西南<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id6">华中<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id7">东北<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id3">华南<i></i></a></li>
                        <li class=""><a data-searchgroupkey="city_id73">国外地<i></i></a></li>
                </ul>
            </div>
            <div class="area-panel-con">
                    <div id="div_city_id1" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id1">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="1">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="437">
            <a class=" ">镇海港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="436">
            <a class=" ">北仑港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="435">
            <a class=" ">乍浦港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="428">
            <a class=" ">江阴港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="431">
            <a class=" ">扬子江港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="463">
            <a class=" ">九江港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="462">
            <a class=" ">丰城港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="446">
            <a class=" ">泉州港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="445">
            <a class=" ">莆田八方港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="444">
            <a class=" ">漳州港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="443">
            <a class=" ">福州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="442">
            <a class=" ">厦门港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="441">
            <a class=" ">海沧港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="440">
            <a class=" ">温州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="439">
            <a class=" ">玉环港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="438">
            <a class=" ">舟山港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="432">
            <a class=" ">大港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="430">
            <a class=" ">南京港惠宁</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="429">
            <a class=" ">南京港西坝</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="427">
            <a class=" ">如皋港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="426">
            <a class=" ">泰州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="425">
            <a class=" ">南通港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="424">
            <a class=" ">邳州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="423">
            <a class=" ">万寨港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="422">
            <a class=" ">张家港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="421">
            <a class=" ">江都港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="420">
            <a class=" ">扬州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="419">
            <a class=" ">连云港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="418">
            <a class=" ">日照港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="417">
            <a class=" ">青岛港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="416">
            <a class=" ">威海港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="415">
            <a class=" ">蓬莱港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="414">
            <a class=" ">烟台港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="413">
            <a class=" ">龙口港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="412">
            <a class=" ">东营港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="491">
            <a class=" ">常州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="493">
            <a class=" ">靖江码头</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="494">
            <a class=" ">泰富港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="498">
            <a class=" ">泰州民生港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="499">
            <a class=" ">江阴长宏国际码头</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="500">
            <a class=" ">青岛前港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="502">
            <a class=" ">新长江港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="504">
            <a class=" ">博联港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="506">
            <a class=" ">中林如皋港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="507">
            <a class=" ">靖江港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="508">
            <a class=" ">镇江港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="509">
            <a class=" ">台州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="523">
            <a class=" ">徐州港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="524">
            <a class=" ">嘉祥港</a>
        </li>
        <li class="showmore" data-searchgroupkey="city_id1">
            <a style="color:#168bb4">更多<i class='iconfont'>+</i></a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id2" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id2">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="2">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="409">
            <a class=" ">黄骅港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="408">
            <a class=" ">曹妃甸</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="407">
            <a class=" ">秦皇岛港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="505">
            <a class=" ">河北钢铁码头</a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id4" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id4">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="4">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="484">
            <a class=" ">二连浩特口岸</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="485">
            <a class=" ">甘其毛都口岸</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="486">
            <a class=" ">策克口岸</a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id5" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id5">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="5">
            <a class=" ">全部</a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id6" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id6">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="6">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="467">
            <a class=" ">城陵矶</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="466">
            <a class=" ">黄石</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="465">
            <a class=" ">平鄂港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="464">
            <a class=" ">枝城港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="461">
            <a class=" ">芜湖港</a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id7" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id7">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="7">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="406">
            <a class=" ">葫芦岛港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="405">
            <a class=" ">锦州港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="404">
            <a class=" ">鲅鱼圈港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="403">
            <a class=" ">大连港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="402">
            <a class=" ">丹东港</a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id3" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id3">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="3">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="460">
            <a class=" ">防城港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="459">
            <a class=" ">钦州港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="458">
            <a class=" ">铁山港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="457">
            <a class=" ">北海港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="456">
            <a class=" ">茂名港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="455">
            <a class=" ">东莞明盛码头</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="454">
            <a class=" ">汕头港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="453">
            <a class=" ">广州港西基码头</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="452">
            <a class=" ">黄埔新港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="451">
            <a class=" ">黄埔老港</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="450">
            <a class=" ">广州港新沙码头</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="449">
            <a class=" ">珠海港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="448">
            <a class=" ">高栏港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="447">
            <a class=" ">湛江港</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="497">
            <a class=" ">东莞海昌码头</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="503">
            <a class=" ">珠电码头</a>
        </li>
        <li class="searchitem" style="display:none" data-showalways="no" data-searchkey="510">
            <a class=" ">广州港</a>
        </li>
        <li class="showmore" data-searchgroupkey="city_id3">
            <a style="color:#168bb4">更多<i class='iconfont'>+</i></a>
        </li>

                        </ul>
                    </div>
                    <div id="div_city_id73" class="area-panel-item " style="display:none">
                        <ul class="jgdul searchgroup" data-allowmultipleselect="true" data-searchgroupkey="city_id73">
                                    <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="73">
            <a class=" ">全部</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="74">
            <a class=" ">朝鲜</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="109">
            <a class=" ">俄罗斯</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="471">
            <a class=" ">越南</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="476">
            <a class=" ">南非</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="479">
            <a class=" ">澳大利亚</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="482">
            <a class=" ">印度尼西亚</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="488">
            <a class=" ">美国</a>
        </li>

                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <div class="search-list" id="div_company_id">
        <strong class="tit">名企</strong>
        <div class="con">
            <ul class="any company">
                <li><a class="on">不限</a></li>
            </ul>

            <ul class="kfzy searchgroup" data-allowmultipleselect="true" data-searchgroupkey="company_id">
                    <li class="searchitem" data-searchkey="111">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510231914537087.png" alt="中煤能源)" />
                                <div class="cont">中煤能源</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="147">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510231915141172.png" alt="国电燃料)" />
                                <div class="cont">国电燃料</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="12567">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201512231523253269.jpg" alt="华电煤业)" />
                                <div class="cont">华电煤业</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="1303">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510231914334003.png" alt="伊泰集团)" />
                                <div class="cont">伊泰集团</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="10">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510231916304901.png" alt="蒙泰煤电)" />
                                <div class="cont">蒙泰煤电</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="13">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510231915367142.png" alt="世德能源)" />
                                <div class="cont">世德能源</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="34">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510232014333897.png" alt="珠江电力)" />
                                <div class="cont">珠江电力</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="105">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201603111504166845.png" alt="陕煤运销)" />
                                <div class="cont">陕煤运销</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="4425">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201511091518058329.png" alt="冀中能源)" />
                                <div class="cont">冀中能源</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="1664">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510232026598654.png" alt="利港电力)" />
                                <div class="cont">利港电力</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="275">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510270958142998.png" alt="苏龙能源)" />
                                <div class="cont">苏龙能源</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="3403">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201510291410364423.jpg" alt="汉邦能源)" />
                                <div class="cont">汉邦能源</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="32423">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201603181008085804.png" alt="鲁泰控股)" />
                                <div class="cont">鲁泰控股</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="2295">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201511171409531457.jpg" alt="永成锋)" />
                                <div class="cont">永成锋</div>
                            </div>
                        </a>
                    </li>
                    <li class="searchitem" data-searchkey="5878">
                        <a class="">
                            <div class="item">
                                <img src="./style/img/201511241427096917.jpg" alt="辉煌能源)" />
                                <div class="cont">辉煌能源</div>
                            </div>
                        </a>
                    </li>
            </ul>

        </div>
    </div>
    <div class="search-list" id="div_dwfrlar" data-searchgroupkey="dwfrlar">
        <strong class="tit">低位发热量(Qnet)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="dwfrlar">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_0">
            <a class=" ">1500-3500</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_1">
            <a class=" ">3500-4500</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_2">
            <a class=" ">4500-5000</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_3">
            <a class=" ">5000-5500</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_4">
            <a class=" ">5500-6000</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_5">
            <a class=" ">6000-7000</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="dwfrlar_6">
            <a class=" ">7000以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_qlfar" data-searchgroupkey="qlfar">
        <strong class="tit">全硫份(St)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="qlfar">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qlfar_0">
            <a class=" ">0-0.5</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qlfar_1">
            <a class=" ">0.5-0.8</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qlfar_2">
            <a class=" ">0.8-1</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qlfar_3">
            <a class=" ">1以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_hffar" data-searchgroupkey="hffar">
        <strong class="tit">挥发份(V)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="hffar">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hffar_0">
            <a class=" ">0-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hffar_1">
            <a class=" ">10-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hffar_2">
            <a class=" ">20-30</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hffar_3">
            <a class=" ">30以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_qsf" data-searchgroupkey="qsf">
        <strong class="tit">全水份(Mt)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="qsf">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qsf_0">
            <a class=" ">0-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qsf_1">
            <a class=" ">10-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qsf_2">
            <a class=" ">20-30</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="qsf_3">
            <a class=" ">30以上</a>
        </li>

            </ul>
        </div>
    </div>
        <div class="search-more">
    <div class="search-list" id="div_njzs" data-searchgroupkey="njzs">
        <strong class="tit">粘结指数(G)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="njzs">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="njzs_0">
            <a class=" ">0-65</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="njzs_1">
            <a class=" ">65-75</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="njzs_2">
            <a class=" ">75-85</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="njzs_3">
            <a class=" ">85以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_jzchd" data-searchgroupkey="jzchd">
        <strong class="tit">胶质层厚度(Y)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="jzchd">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jzchd_0">
            <a class=" ">0-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jzchd_1">
            <a class=" ">10-15</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jzchd_2">
            <a class=" ">15-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jzchd_3">
            <a class=" ">20以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_ksqdm40" data-searchgroupkey="ksqdm40">
        <strong class="tit">抗碎强度(M40)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="ksqdm40">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm40_0">
            <a class=" ">65-72</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm40_1">
            <a class=" ">72-76</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm40_2">
            <a class=" ">76-80</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm40_3">
            <a class=" ">80以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_ksqdm25" data-searchgroupkey="ksqdm25">
        <strong class="tit">抗碎强度(M25)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="ksqdm25">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm25_0">
            <a class=" ">83以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm25_1">
            <a class=" ">83-88</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm25_2">
            <a class=" ">88-92</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ksqdm25_3">
            <a class=" ">92以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_nmqd" data-searchgroupkey="nmqd">
        <strong class="tit">耐磨强度(M10)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="nmqd">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="nmqd_0">
            <a class=" ">8以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="nmqd_1">
            <a class=" ">8-9</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="nmqd_2">
            <a class=" ">9-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="nmqd_3">
            <a class=" ">10-11</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_hfar" data-searchgroupkey="hfar">
        <strong class="tit">灰份(A)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="hfar">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hfar_0">
            <a class=" ">0-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hfar_1">
            <a class=" ">10-15</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hfar_2">
            <a class=" ">15-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hfar_3">
            <a class=" ">20以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_lidu" data-searchgroupkey="lidu">
        <strong class="tit">粒度(Size)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="lidu">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="lidu_0">
            <a class=" ">0-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="lidu_1">
            <a class=" ">20-50</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="lidu_2">
            <a class=" ">30-80</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="lidu_3">
            <a class=" ">40以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_hrd" data-searchgroupkey="hrd">
        <strong class="tit">灰熔点(ST)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="hrd">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hrd_0">
            <a class=" ">1200以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hrd_1">
            <a class=" ">1200-1250</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hrd_2">
            <a class=" ">1250-1300</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hrd_3">
            <a class=" ">1300以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_ganguo" data-searchgroupkey="ganguo">
        <strong class="tit">坩埚/自由膨胀序数(CSN/FSI)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="ganguo">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ganguo_0">
            <a class=" ">6以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ganguo_1">
            <a class=" ">6-7</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ganguo_2">
            <a class=" ">7-8</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ganguo_3">
            <a class=" ">9以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_gdtar" data-searchgroupkey="gdtar">
        <strong class="tit">固定碳(FC)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="gdtar">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="gdtar_0">
            <a class=" ">0-60</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="gdtar_1">
            <a class=" ">60-80</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="gdtar_2">
            <a class=" ">80-90</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="gdtar_3">
            <a class=" ">90以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_hskmzs" data-searchgroupkey="hskmzs">
        <strong class="tit">哈氏可磨指数(HGI)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="hskmzs">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hskmzs_0">
            <a class=" ">0-40</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hskmzs_1">
            <a class=" ">40-60</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hskmzs_2">
            <a class=" ">60-80</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="hskmzs_3">
            <a class=" ">80以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_jtfyx" data-searchgroupkey="jtfyx">
        <strong class="tit">焦炭反应性(CRI)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="jtfyx">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jtfyx_0">
            <a class=" ">30以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jtfyx_1">
            <a class=" ">30-35</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jtfyx_2">
            <a class=" ">35-50</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jtfyx_3">
            <a class=" ">50以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_fyhqd" data-searchgroupkey="fyhqd">
        <strong class="tit">反应后强度(CSR)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="fyhqd">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="fyhqd_0">
            <a class=" ">50以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="fyhqd_1">
            <a class=" ">50-55</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="fyhqd_2">
            <a class=" ">55以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_jztz" data-searchgroupkey="jztz">
        <strong class="tit">焦渣特征(CRC)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="jztz">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jztz_0">
            <a class=" ">1-2</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jztz_1">
            <a class=" ">2-4</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="jztz_2">
            <a class=" ">4-8</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_midu" data-searchgroupkey="midu">
        <strong class="tit">密度(DE)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="midu">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="md_0">
            <a class=" ">500以上</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="md_1">
            <a class=" ">500-600</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="md_2">
            <a class=" ">600-800</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="md_3">
            <a class=" ">800以上</a>
        </li>

            </ul>
        </div>
    </div>
    <div class="search-list" id="div_ns" data-searchgroupkey="ns">
        <strong class="tit">内水(Mad)</strong>
        <div class="con">
            <ul class="any">
                <li><a class="on">不限</a></li>
            </ul>
            <ul class="list autowidth searchgroup" data-allowmultipleselect="True" data-searchgroupkey="ns">
                        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ns_0">
            <a class=" ">0-10</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ns_1">
            <a class=" ">10-20</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ns_2">
            <a class=" ">20-30</a>
        </li>
        <li class="searchitem" style="display:block" data-showalways="yes" data-searchkey="ns_3">
            <a class=" ">30以上</a>
        </li>

            </ul>
        </div>
    </div>
        </div>


    <span class="more-btn">
        <span class="show">更多<i class="iconfont">&#xf02a9;</i></span>
        <span class="hide">收起<i class="iconfont">&#xf02aa;</i></span>
    </span>
</div>











<div class="searchPanel">
    <div class="order clear lkmE">
        <div class="o-item" id="div_order_default">
            <a>默认</a>
        </div>
        <div class="o-item" id="div_order_price">
            <a>价格</a>
        </div>
        <div class="o-item" id="div_order_weight">
            <a>库存</a>
        </div>
        <div class="o-item" id="div_order_date">
            <a>日期</a>
        </div>
        <div class="o-item-m" style="padding: 0">
            <div class="fPrice">
                <div class="fP-box clear">
                    <b class="fPb-item">
                        <input type="text" id="tb_jgaddress" class="j_FPInput" placeholder="交割地" style="width: 100px; text-align: left;text-indent: 5px;" autocomplete="off">
                    </b>

                </div>
                <div class="fP-expand clear">
                    <a class="ui-btn-o">清空</a>
                    <a class="ui-btn-r" id="a_jgaddresssubmit">确定</a>
                </div>
            </div>
        </div>
        <div class="o-item-m" style="padding: 0">
            <div class="fPrice">
                <div class="fP-box clear">
                    <b class="fPb-item">
                        <input type="text" class="j_FPInput" id="input_min_price" placeholder="最低价" maxlength="8" autocomplete="off">
                    </b>
                    <i class="fPb-split">-</i>
                    <b class="fPb-item">
                        <input type="text" class="j_FPInput" id="input_max_price" maxlength="8" placeholder="最高价" autocomplete="off">
                    </b>
                </div>
                <div class="fP-expand clear">
                    <a class="ui-btn-o">清空</a>
                    <a class="ui-btn-r" id="a_pricesubmit">确定</a>
                </div>
            </div>
        </div>
        <div class="o-item-m" style="padding: 0">

            <select id="sel_valid_day" class="date" style="width: 95px;">
                <option value="-1">有效期</option>
                        <option value="1">5天以内</option>
                        <option value="2">10天以内</option>
                        <option value="3">15天以内</option>
                        <option value="4">15天以上</option>
            </select>
        </div>
        <div class="o-item-p">
            <span>今日挂牌总量：</span>
            <span class="dun">
                20,648,348
            </span>
            <span>
                吨 共找到 866 条商品
            </span>

                <span class="pagenum">1/58</span>
                <a class="page-prev disabled"><i class="iconfont">&#xf016e;</i></a><!--&#xf016e;-->
                <a class="page-next"><i class="iconfont">&#xf016d;</i></a><!--&#xf016d;-->
        </div>
    </div>

    <div class="search-content">
        <div class="searchtable tablew">
            <div class="thead">
                <div class="t-1">分类</div>
                <div class="t-2">品名</div>
                <div class="t-3">供货公司</div>
                <div class="t-4">主指标</div>
                <div class="t-5">库存(吨)</div>
                <div class="t-6">价格(元/吨)</div>
                <div class="t-7">交割地</div>
                <div class="t-8">有效期</div>
                <div class="t-c">操作</div>
            </div>


@foreach($row as $v)
     <div class="tbody" data-type="mhover">
 	   <div class="t-1"><span>{{ $v->postion}}</span></div>
        <div class="t-2"><span>精4块</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>6,400Kcal</span></div>
        <div class="t-5"><span>5,000</span></div>
        <div class="t-6">
            <span>待议</span>
                <div class="Popup price_detail">
        <div class="hd">
            靖江市扬子江港 平仓价
        </div>
        <div class="bd">
            <p>待议</p>
        </div>
    </div>
     </div>
        <div class="t-7" title="江苏省靖江市扬子江港">
                <span>扬子江港</span>
        </div>
        <div class="t-8"><span>2016/05/16</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20485" target="_blank">详情</a>
            </div>
        </div>
    </div>
    
@endforeach
	
	

<div class="w-menuset-pagination">
    <div class="pagination-totalcount">共<span>866</span>条记录</div><ul class="pagination" data-invalidpageerrmsg="" data-outrangeerrmsg="" data-pagecount="58" data-pageparameter="page_no" data-pagerid="Webdiyer.MvcPager" data-urlformat="/supply?page_no=__page_no__"><li class="disabled"><a href="javascript:void(0);">«</a></li><li class="disabled"><a href="javascript:void(0);">‹</a></li><li class="active"><a href="javascript:void(0);">1</a></li><li><a href="/supply?page_no=2">2</a></li><li><a href="/supply?page_no=3">3</a></li><li><a href="/supply?page_no=4">4</a></li><li><a href="/supply?page_no=5">5</a></li><li><a href="/supply?page_no=6">6</a></li><li><a href="/supply?page_no=7">7</a></li><li><a href="/supply?page_no=8">8</a></li><li><a href="/supply?page_no=9">9</a></li><li><a href="/supply?page_no=10">10</a></li><li><a href="/supply?page_no=11">...</a></li><li><a href="/supply?page_no=2">›</a></li><li><a href="/supply?page_no=58">»</a></li></ul>
</div>




</div>

<!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持--><div class="foot yahei">
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
                        <img src="./style/img/wx_app.png" alt="" />
                    </div>
                </div>
                <div class="wx-fw">
                    <div class="tl">找煤网视点 <br />(微信订阅号)</div>
                    <div class="tm">
                        <img src="./style/img/wx_dy.png" alt="" />
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
                <img src="./style/img/safe1.png" alt="" border="0" style="height: 47px;" />
            </a>
            

            <a key="55ffb358efbfb02412481b14" logo_size="124x47" logo_type="business" href="http://www.anquan.org" target="_blank">
                <img src="./style/img/hy_124x47.png" alt="">
            </a>

            <a href="javascript:void(0)" target="_blank">
                <img src="./style/img/safe2.png" alt="360网站安全检测" />
            </a>
            <a href="javascript:void(0)" target="_blank">
                <img src="./style/img/safe3.png" alt="工商网监电子标识" />
            </a>
        </p>
    </div>
</div><div class="tool-b">
    <a class="b4" data-type="mhover">返回顶部</a>
</div>


    <script type="text/javascript" src="./style/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="./style/js/in.js"></script>
    <script src="./style/js/jquery.validate.min.js"></script>
    <script src="./style/js/jquery.unobtrusive-ajax.min.js"></script>
    <script src="./style/js/jquery.validate.unobtrusive.min.js"></script>
    <script src="./style/js/common.js?v=201601311730"></script>
    <script src="./style/js/jquery.iDialog.min.js"></script>
    <script src="./style/js/jquery.showLoading.min.js"></script>
    <script src="./style/js/main.js" type="text/javascript"></script>
    <script src="./style/js/jquery.watermark.js"></script>
    
    <script type="text/javascript" src="./style/js/GoodsSupplyV2.js"></script>



</body>
</html>
