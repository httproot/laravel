@include('header')
    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">账户信息</span></a>
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
                    <div class="member-list active">
                        <a href="./找煤网-找煤够简单-中国领先的煤炭全产业链电商平台(账户中心)_files/找煤网-找煤够简单-中国领先的煤炭全产业链电商平台(账户中心).htm">账户信息</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/Safe">账户安全</a>
                    </div>
                    <div class="member-list ">
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
<form action=""  method="post" novalidate="novalidate">
<div class="cnt1 clear">
                            {!! csrf_field()!!}
                        <div class="cnt-l">
                            <div class="item m-linkE">
                                <label>移动电话：</label>
                                <span class="tel">18304041104</span>
                                <a class="tel-set" style="display: none;" href="https://www.zhaomei.com/Member/Info###">设置号码私密</a>
                            </div>
                            <div class="item">
                                <label>公司名称：</label>
                                <input data-val="true" data-val-length="客户所填公司过长" data-val-length-max="50" id="PurposeCompany" name="PurposeCompany" style="height: 30px;line-height: 20px;" type="text" value="啊啊">
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="PurposeCompany" data-valmsg-replace="true"></span></span>
                            </div>
                            <div class="item">
                                <label>公司类型：</label>
                                <select data-val="true" data-val-length="意向企业类型过长" data-val-length-max="25" id="PurposeCompanyType" name="PurposeCompanyType" style="font-size: 14px;height: 30px;width: 215px;"><option value="">请选择</option>
<option value="终端用户">终端用户</option>
<option value="贸易商">贸易商</option>
<option value="矿方">矿方</option>
<option value="港口企业">港口企业</option>
<option value="物流商">物流商</option>
<option value="金融机构">金融机构</option>
<option value="保险机构">保险机构</option>
<option value="质检机构">质检机构</option>
<option value="同行企业">同行企业</option>
<option value="其他">其他</option>
</select>
                                
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="PurposeCompanyType" data-valmsg-replace="true"></span></span>
                            </div>
                            <div class="item">
                                <label>姓名：</label>
                                <input data-val="true" data-val-length="真实姓名过长" data-val-length-max="10" id="TrueName" name="TrueName" style="height: 30px;line-height: 20px;" type="text" value="">
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="TrueName" data-valmsg-replace="true"></span></span>
                            </div>
                            
                            <div class="item">
                                <label>邮箱：</label>
                                <input data-val="true" data-val-length="邮箱过长" data-val-length-max="30" data-val-regex="邮箱格式不正确" data-val-regex-pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" id="Email" name="Email" placeholder="zhaomeiwang@XX.com" style="height: 30px;line-height: 20px;" type="text" value="sss@qq.com">
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></span>
                            </div>
                            <div class="item">
                                <label>QQ：</label>
                                <input data-val="true" data-val-length="QQ过长" data-val-length-max="12" id="QQ" name="QQ" style="height: 30px;line-height: 20px;" type="text" value="89222">
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="QQ" data-valmsg-replace="true"></span></span>
                            </div>

                            <div class="item last">
                                   @include('zhanghu_index')
                             
                               <input data-val="true" data-val-comparefields="手机号码必须和账户名一致" data-val-comparefields-additionalfield="Mobile,Account" data-val-comparefields-datatype="Mobile" data-val-comparefields-operation="Equal" data-val-length="手机过长" data-val-length-max="11" data-val-regex="手机格式不正确" data-val-regex-pattern="^1[3|4|5|7|8]\d{1}(\*{4}|\d{4})\d{4}$" data-val-required="请填写手机" id="Mobile" name="Mobile" type="hidden" value="18304041104">
                                <span style="color: red;"><span class="field-validation-valid" data-valmsg-for="CompanyAddress" data-valmsg-replace="true"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-btn clear" style="float: left; padding-left: 156px; margin-top: 20px;">
                        <button class="btn" type="submit">提交</button>
                    </div>
<input data-val="true" data-val-number="字段 Id 必须是一个数字。" data-val-required="Id 字段是必需的。" id="Id" name="Id" type="hidden" value="17101"><input data-val="true" data-val-length="帐户过长" data-val-length-max="11" data-val-regex="帐户必须是手机号码" data-val-regex-pattern="^1[3|4|5|7|8]\d{1}(\*{4}|\d{4})\d{4}$" data-val-remote="帐户已存在!" data-val-remote-additionalfields="*.Account,*.Account,*.Id" data-val-remote-url="/Member/CheckAccountUnque" data-val-required="请填写帐户" id="Account" name="Account" type="hidden" value="18304041104"></form>            </div>
        </div>
    </div>
</div>

    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->
   @include('footer')