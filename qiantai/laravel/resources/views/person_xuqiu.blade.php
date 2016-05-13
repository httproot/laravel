@include('header')

    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">需求信息</span></a>
        </div>

        <div class="m-l">
            <div id="member-menu" class="member-menu m-linkA">
                    <div class="member-title ">
                        <a href="javascript:void(0)">我的交易</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/MyOrders">我的订单</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/SupplyOrderList">供货信息</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/SupplyOrderEdit">发布供货</a>
                    </div>
                    <div class="member-list active">
                        <a href="./需求信息-找煤网-中国领先的煤炭全产业链电商平台(个人中心)_files/需求信息-找煤网-中国领先的煤炭全产业链电商平台(个人中心).htm">需求信息</a>
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
    <div class="m-r">
        <div class="member-caigou">
            <div class="member-caigou-title clear">
                <div class="left">
                    <img src="{{url('style/img/menber-tx-1.png')}}" alt="">
                    <div class="font">
                        <p class="xm"></p>
                        <p class="lx"></p>
                        <p class="gs"></p>
                    </div>
                </div>
                <div class="right">
                    
                </div>
            </div>
            <div class="member-caigou-list">
                <div class="member-caigou-list-top clear">
                    <div class="item min">
                        <input type="checkbox" id="chk_all">
                    </div>
                    <div class="item max">
                        
                        <a href="javascript:void(0);" onclick="removeBatch()">批量删除</a>
                        
                        <a href="javascript:void(0);" onclick="location.href = location.href;">批量刷新</a>
                    </div>
                </div>
                <div class="member-caigou-list-head clear">
                  
					<div class="item min">&nbsp;</div>
                    <div class="item min">&nbsp;</div>
                    <div class="item">品名</div>
                    <div class="item maxx" style="width: 248px;">详细指标</div>
                    <div class="item">数量（吨）</div>
                    <div class="item">价格(元)</div>
                    <div class="item">交割地</div>
                    <div class="item">有效期</div>
                    <div class="item">状态</div>
                    <div class="item max" style="width: 80px;">选择</div>
                    
				</div>
				   @foreach($need as $v)
                <div class="memberlisbox">
				 <ul>
				 <li>{{$v->xq_title}}</li>
				 <li>{{$v->ucontent}}</li>
				 <li>{{$v->xq_account}}吨</li>
				 <li>{{$v->xq_money}}元</li>
				 <li>{{$v->xq_place}}</li>
				 <li>{{$v->endtime}}天</li>
				 @if($v->status > 0)
				 <li>已经审核</li>
				 @else
				  <li>还未审核</li>
				  @endif
				 </ul>
				 @endforeach
                <div class="memberlisbox add">	
                    <div class="c">

                        @include('person_form')
                 
                    </div>
                    <div class="more add-base" style="display: none">
                    </div>
                </div>
                <div class="w-menuset-pagination">
                    <ul class="pagination" data-invalidpageerrmsg="" data-outrangeerrmsg="" data-pagecount="0" data-pageparameter="pageIndex" data-pagerid="Webdiyer.MvcPager" data-urlformat="/Member/RequirementList?pageIndex=__pageIndex__"></ul>
                </div>
            </div>
        </div>
    </div>
    
</div>

    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->

@include('footer')