@include('header')
    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">账户安全</span></a>
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
                    <div class="member-list active">
                        <a href="./账户安全 账户安全-中国领先的煤炭全产业链电商平台(个人中心)_files/账户安全 账户安全-中国领先的煤炭全产业链电商平台(个人中心).htm">账户安全</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/Pwd">修改密码</a>
                    </div>
            </div>
        </div>
        
<div class="usersafe clear">
    <div class="m-r">
	
        <div class="member-caigou">
                <div class="top-notic clear">
				  <div class="notic-l">
				 @foreach($com as $v)
                 
				  <?php 
				  
				if (($v->is_hot) ==2){
                  echo  "审核通过!";
				} else {
				
				  echo "审核暂时未通过!";
				}
				  
				  ?>
                     	 
				@endforeach()
				      </div>
                </div>
        </div>

    </div>
</div>


    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->
   

@include('footer')