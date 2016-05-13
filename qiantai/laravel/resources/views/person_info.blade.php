@include('header')


    <div class="main yahei clear">
        <div class="tip_index">
            <i class="iconfont">󰅊</i><!--&#xf014a;-->
            您当前位置： <a href="https://www.zhaomei.com/">首页</a> - <a href="https://www.zhaomei.com/Member">会员中心</a> - <a href="javascript:void(0)"><span id="flowdetail">供货信息</span></a>
        </div>

        <div class="m-l">
            <div id="member-menu" class="member-menu m-linkA">
                    <div class="member-title ">
                        <a href="javascript:void(0)">我的交易</a>
                    </div>
                    <div class="member-list ">
                        <a href="https://www.zhaomei.com/Member/MyOrders">我的订单</a>
                    </div>
                    <div class="member-list active">
                        <a href="#">供货信息</a>
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
        

<div class="myordernew clear" id="myordernew">
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
                    <a href="javascript:void(0);" onclick="pop(this, &#39;上传现货资源&#39;, &#39;excelupload&#39;, 290, &#39;.excelupload&#39;, -10)" class="sc"><i class="iconfont">󰀤</i>上传现货资源</a>
                    <a href="https://www.zhaomei.com/TemplateFile/%E6%89%BE%E7%85%A4%E7%BD%91%E7%8E%B0%E8%B4%A7%E4%B8%8A%E4%BC%A0%E6%A8%A1%E6%9D%BF.xls" class="xz" target="_blank"><i class="iconfont">󰅣</i>下载资源模板</a>
                </div>
            </div>
            <div class="member-caigou-list">
                <div class="member-caigou-list-top clear">
                    <div class="item min"><input type="checkbox" id="chk_all" name="chk_all"></div>
                    <div class="item max">
                        <a href="javascript:void(0);" onclick="pop(this, &#39;批量挂牌&#39;, &#39;batchonline&#39;, 300, &#39;.btnonline&#39;, 0)">批量挂牌</a>
                        <a href="javascript:void(0);" onclick="pop(this, &#39;批量摘牌&#39;, &#39;batchoffline&#39;, 300, &#39;.btnoffline&#39;,0)">批量摘牌</a>
                        <a href="javascript:void(0);" onclick="batchremove(&#39;/Member/GoodsSupplyDelete&#39;)">批量删除</a>
                        
                        <a href="javascript:void(0);" onclick="location.reload()">批量刷新</a>
                    </div>
                    
                </div>
                <div class="member-caigou-list-head clear">
                    <div class="item min">&nbsp;</div>
                    <div class="item min">&nbsp;</div>
                    <div class="item width1">分类</div>
                    <div class="item width1">品名</div>
                    <div class="item">生产厂家</div>
                    <div class="item last">库存(吨)</div>
                    <div class="item last">价格(元)</div>
                    <div class="item">产地</div>
                    <div class="item width1">交割地</div>
                    <div class="item last">有效日期</div>
                    <div class="item last">供货状态</div>
                    <div class="item" style="width:60px;">挂牌状态</div>
                    <div class="item max">选择</div>
                    <div class="item min">&nbsp;</div>
                </div>
                <div class="memberlisbox">
                    <div class="memberlistmain">

                    </div>
                </div>
                <div class="memberlisbox add">
                    <div class="c">
                        <a href="javascript:void(0);" onclick="checkState();" class="add_list"><i class="iconfont">󰅔</i>我要添加</a>
                    </div>
                </div>
                <!--份页-->
                <div class="w-menuset-pagination">
                    <ul class="pagination" data-invalidpageerrmsg="" data-outrangeerrmsg="" data-pagecount="0" data-pageparameter="pageIndex" data-pagerid="Webdiyer.MvcPager" data-urlformat="/Member/SupplyOrderList?pageIndex=__pageIndex__"></ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!--改价-->
<div class="add_ftype_pop pop_padd" id="batchprice" style="display: none; height:150px;">
    <div style="padding:10px;">
        <table border="0" class="fromtab1">
            <tbody>
                <tr>
                    <td width="100px;" style="text-align:right;height:40px;">调价方式&nbsp;&nbsp;</td>
                    <td>
                        <input type="radio" name="pricetype" value="0" checked=""><span>普通</span> &nbsp;&nbsp;
                        <input type="radio" name="pricetype" value="10"><span>百分比(%)</span>
                    </td>
                </tr>
                <tr>
                    <td width="100px;" style="text-align:right;">价格幅度&nbsp;&nbsp;</td>
                    <td>
                        <input type="button" value="-" style="width:18px;height:18px;line-height:18px;" class="price-minus">
                        <input type="text" id="pricevalue" class="price_input" style="width:70px; font-size:16px;font-weight:bold;line-height: 22px;" value="5">
                        <input type="button" value="+" style="width:18px;height:18px;line-height:18px;" class="price-add">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="sinput" style="padding-left: 80px;padding-top:20px;">
                            <input type="button" class="btn btn-warning btnprice" value="确定">&nbsp;&nbsp;
                            <input class="btn close" type="button" value="取消">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!--批量摘牌-->
<div class="add_ftype_pop pop_padd" id="batchoffline" style="display: none; height:140px;">
    <div style="padding:0px 10px;">
        <table border="0" class="fromtab1">
            <tbody>
                <tr>
                    <td width="65px;" valign="top" style="text-align:right;">摘牌说明<span style="color:red;">*&nbsp;</span>&nbsp;&nbsp;</td>
                    <td valign="top">
                        <select class="price_input" id="OfflineReason000" name="OfflineReason000" style="width:120px;height:22px;"><option value="">-请选择-</option>
<option value="1">已售完</option>
<option value="2">价格过期</option>
<option value="4">其他</option>
</select>
                        <textarea class="price_input" cols="20" id="OfflineReason111" maxlength="200" name="OfflineReason111" placeholder="请输入原因" rows="2" style="width:160px;height:40px;display:none;margin-top:5px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="sinput" style="padding-left: 66px;padding-top:20px;">
                            <input type="button" class="btn btn-warning btnoffline" value="确定">&nbsp;&nbsp;
                            <input class="btn close" type="button" value="取消">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!--批量挂牌-->
<div class="add_ftype_pop pop_padd" id="batchonline" style="display: none; height:120px;">
    <div style="padding:0px 10px;">
        <table border="0" class="fromtab1">
            <tbody>
                <tr>
                    <td width="65px;" height="45px" style="text-align:right;">挂牌说明&nbsp;&nbsp;</td>
                    <td>
                        <textarea class="price_input" cols="20" id="OnlineAppRemark" maxlength="100" name="OnlineAppRemark" rows="2" style="width:160px;height:40px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="sinput" style="padding-left: 75px;padding-top:20px;">
                            <input type="button" class="btn btn-warning btnonline" value="确定">&nbsp;&nbsp;
                            <input class="btn close" type="button" value="取消">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!--excel上传-->
<div class="add_ftype_pop pop_padd" id="excelupload" style="display: none; height:140px;">
    <div style="padding:10px 10px;">
        <table border="0" class="fromtab1">
            <tbody>
                <tr>
                    <td width="70px" align="right" valign="top"><div>选择文件&nbsp;&nbsp;</div></td>
                    <td valign="top">
                        <div class="excelfilename-container" style="display:block;"><input type="text" id="excelfilename" class="price_input" style="width:150px;font-size:11px;line-height:26px;height:26px;" readonly="readonly"></div>
                        <div style="position: relative;"><a id="pickfiles" class="uploadify-button" href="javascript:;" style="position: relative; z-index: 1;">选择文件</a><div id="html5_1ai899sithajrmp12fdp0lb6b3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1ai899sithajrmp12fdp0lb6b3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="application/vnd.ms-excel,.xls,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xlsx"></div></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="sinput" style="padding-left: 70px;padding-top:15px;">
                            <input type="button" class="btn btn-warning excelupload" value="确定">&nbsp;&nbsp;
                            <input class="btn close" type="button" value="取消">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<input id="optionid" name="optionid" type="hidden" value="">

    </div>
    <!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->

@include('footer')