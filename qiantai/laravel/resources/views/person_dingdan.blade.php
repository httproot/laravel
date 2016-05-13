@include('header')
    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">我的订单</span></a>
        </div>

        <div class="m-l">
            <div id="member-menu" class="member-menu m-linkA">
                    <div class="member-title ">
                        <a href="javascript:void(0)">我的交易</a>
                    </div>
                    <div class="member-list active">
                        <a href="./我的订单-找煤网-中国领先的煤炭全产业链电商平台(个人中心)_files/我的订单-找煤网-中国领先的煤炭全产业链电商平台(个人中心).htm">我的订单</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/SupplyOrderList">供货信息</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/SupplyOrderEdit">发布供货</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/RequirementList">需求信息</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/CreateRequirement">发布需求</a>
                    </div>
                    <div class="member-title ">
                        <a href="javascript:void(0)">账户中心</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/Info">账户信息</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/Safe">账户安全</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/Pwd">修改密码</a>
                    </div>
            </div>
        </div>
        

<div class="myordernew clear">
    <div class="m-r3">
        <div class="member-caigou">
            <div class="member-caigou-title clear">
                <div class="left">
                    <div class="touxian">
                        <img src="{{url('style/img/menber-tx-1.png')}}" alt="">
                        <a href="https://www.zhaomei.com/Member/Info">修改个人信息</a>
                    </div>
                    <div class="font">
                        <p class="xm"><span> 18304041104</span></p>
                        <p class="lx"></p>
                        <p class="gs"></p>
                    </div>
                </div>
                <div class="right">
                                                        </div>
            </div>
            <h2>我的最近订单</h2>
            <div class="member-caigou-list2">
                <div class="member-caigou-list-head clear">
                    <div class="item">单号</div>
                    <div class="item">品名</div>
                    <div class="item">标单内容</div>
                    <div class="item last">供货商</div>
                    <div class="item min">状态</div>
                    <div class="item pay">操作</div>
                </div>
                <div class="w-menuset-pagination">
                    <ul class="pagination" data-invalidpageerrmsg="" data-outrangeerrmsg="" data-pagecount="0" data-pageparameter="pageIndex" data-pagerid="Webdiyer.MvcPager" data-urlformat="/member?pageIndex=__pageIndex__"></ul>
                </div>
            </div>
        </div>

    </div>
    <div class="m-r2">
        <div class="kefu">
            <div class="tit">您的<span>专属交易员</span></div>
            <p>
                交 易 员 ：<i class="iconfont">󰇇</i> 
            </p>
            <p class="phone">手机：</p>
            <p> 工 作 日 ：8:30-17:30</p>
        </div>
        <div class="scbz">
            <div class="tit"><a href="https://www.zhaomei.com/Help/HowDelgateTrade" target="_blank"><span>帮助说明</span></a></div>
            <div class="con">
                <i class="iconfont">󰃶</i>
                <div class="font">
                    <p class="f14">全程跟踪</p>
                    <p class="f11">上传供货，一对一贴心指导</p>
                </div>
            </div>
        </div>
        <div class="wymm">
            <div class="tit">我要<span>卖煤</span></div>
            <img src="{{url('style/img/member-mm-1.jpg')}}">
        </div>
    </div>
</div>

    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->
   @include('footer')