@include('header')


    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">修改密码</span></a>
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
                    <div class="member-list active">
                        <a href="https://www.zhaomei.com/Member/Pwd">修改密码</a>
                    </div>
            </div>
        </div>
        
<div class="userinformation clear">
    <div class="m-r">
        <div class="member-caigou">
            <div class="member-caigou-title clear">
                <span>账户信息</span>
            </div>
            <div class="member-caigou-list">
    <form  action="{{url('person/pwdforget')}}" method="post"> 
	{!! csrf_field() !!}
	<div class="cnt1 clear">
                        <div class="cnt-l">
                            <div class="item">
                                <label>原密码：</label>
                                <input  name="oldPwd" value="" type="password">
                                <span style="color: red;"></span>
                            </div>
                            <div class="item">
                                <label>新密码：</label>
                                <input id="newpwd1"  name="newPwd" value="" type="password">
                                <span style="color: red;"></span>
                            </div>
                            <div class="item last">
                                <label>确认密码：</label>
                                <input id="newpwd2"  name="anewPwd" value="" type="password">
                                <span style="color: red;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-btn clear" style="float: left; padding-left: 156px; margin-top: 20px;">
                        <button class="btn" type="submit">提交</button>
                    </div>
</form>            </div>
        </div>
    </div>
</div>

    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->


 @include('footer')