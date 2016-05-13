
@include('header')
<div class="main">

<div class="search-query">

    <div class="collapse">
        <span class="hide">更多筛选<i class="iconfont">&#xf02a9;</i></span>
        <span class="show">收起筛选<i class="iconfont">&#xf02aa;</i></span>
    </div>
</div>
<div class="searchbox">
   
@include('xianhuo_filter');

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

    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
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
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>精4籽</span>
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
                <a class="all" href="/Supply/detail/20486" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>神洁2</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,500Kcal</span></div>
        <div class="t-5"><span>20,000</span></div>
        <div class="t-6">
            <span>待议</span>
                <div class="Popup price_detail">
        <div class="hd">
            苏州市张家港 平仓价
        </div>
        <div class="bd">
            <p>待议</p>
        </div>
    </div>

        </div>
        <div class="t-7" title="江苏省苏州市张家港">
                <span>张家港</span>
        </div>
        <div class="t-8"><span>2016/05/16</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20484" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>石炭2</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,200Kcal</span></div>
        <div class="t-5"><span>20,000</span></div>
        <div class="t-6">
            <span>待议</span>
                <div class="Popup price_detail">
        <div class="hd">
            苏州市张家港 平仓价
        </div>
        <div class="bd">
            <p>待议</p>
        </div>
    </div>

        </div>
        <div class="t-7" title="江苏省苏州市张家港">
                <span>张家港</span>
        </div>
        <div class="t-8"><span>2016/05/16</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20482" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>活矿特低灰</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>6,000Kcal</span></div>
        <div class="t-5"><span>10,000</span></div>
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
                <a class="all" href="/Supply/detail/20481" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>平9</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>4,759Kcal</span></div>
        <div class="t-5"><span>10,000</span></div>
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
                <a class="all" href="/Supply/detail/20480" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>蒙块煤</span>
        </div>
        <div class="t-3">
            <span>江苏西瑞贸易有限公司</span>
            
        </div>
        <div class="t-4"><span>6,000Kcal</span></div>
        <div class="t-5"><span>2,000</span></div>
        <div class="t-6">
            <span>500</span>
                <div class="Popup price_detail">
        <div class="hd">
            靖江市靖江码头 场地交货价
        </div>
        <div class="bd">
            <p>500元</p>
        </div>
    </div>

        </div>
        <div class="t-7" title="江苏省靖江市靖江码头">
                <span>靖江码头</span>
        </div>
        <div class="t-8"><span>2016/05/18</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20473" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>伊泰9</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,450Kcal</span></div>
        <div class="t-5"><span>15,000</span></div>
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
                <a class="all" href="/Supply/detail/20479" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>俄罗斯煤</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,600Kcal</span></div>
        <div class="t-5"><span>10,000</span></div>
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
                <a class="all" href="/Supply/detail/20478" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>褐煤</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>3,305Kcal</span></div>
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
                <a class="all" href="/Supply/detail/20477" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>精块4</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>6,200Kcal</span></div>
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
                <a class="all" href="/Supply/detail/20476" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>兴优1</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,450Kcal</span></div>
        <div class="t-5"><span>15,000</span></div>
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
                <a class="all" href="/Supply/detail/20475" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>平6</span>
        </div>
        <div class="t-3">
            <span>台州市彤升电力燃料有限公司</span>
            
        </div>
        <div class="t-4"><span>5,200Kcal</span></div>
        <div class="t-5"><span>30,000</span></div>
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
                <a class="all" href="/Supply/detail/20474" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>洗精煤</span>
        </div>
        <div class="t-3">
            <span>朔州庙梁洗煤厂</span>
            
        </div>
        <div class="t-4"><span>5,700Kcal</span></div>
        <div class="t-5"><span>173</span></div>
        <div class="t-6">
            <span>173</span>
                <div class="Popup price_detail">
        <div class="hd">
            朔州市朔州 坑口价
        </div>
        <div class="bd">
            <p>173元</p>
        </div>
    </div>

        </div>
        <div class="t-7" title="山西省朔州市朔州">
                <span>朔州</span>
        </div>
        <div class="t-8"><span>2016/06/03</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20472" target="_blank">详情</a>
            </div>
        </div>
    </div>
    <div class="tbody" data-type="mhover">
        <div class="t-1"><span>动力煤</span></div>
        <div class="t-2"><span>中煤</span>
        </div>
        <div class="t-3">
            <span>朔州庙梁洗煤厂</span>
            
        </div>
        <div class="t-4"><span>2,200Kcal</span></div>
        <div class="t-5"><span>10,000</span></div>
        <div class="t-6">
            <span>15</span>
                <div class="Popup price_detail">
        <div class="hd">
            朔州市平朔路 出厂价
        </div>
        <div class="bd">
            <p>15元</p>
        </div>
    </div>

        </div>
        <div class="t-7" title="山西省朔州市平朔路">
                <span>平朔路</span>
        </div>
        <div class="t-8"><span>2016/06/03</span></div>
        <div class="t-c">
            <div class="tools">
                <a class="all" href="/Supply/detail/20471" target="_blank">详情</a>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<div class="w-menuset-pagination">
    <div class="pagination-totalcount">共<span>866</span>条记录</div><ul class="pagination" data-invalidpageerrmsg="" data-outrangeerrmsg="" data-pagecount="58" data-pageparameter="page_no" data-pagerid="Webdiyer.MvcPager" data-urlformat="/supply?page_no=__page_no__"><li class="disabled"><a href="javascript:void(0);">«</a></li><li class="disabled"><a href="javascript:void(0);">‹</a></li><li class="active"><a href="javascript:void(0);">1</a></li><li><a href="/supply?page_no=2">2</a></li><li><a href="/supply?page_no=3">3</a></li><li><a href="/supply?page_no=4">4</a></li><li><a href="/supply?page_no=5">5</a></li><li><a href="/supply?page_no=6">6</a></li><li><a href="/supply?page_no=7">7</a></li><li><a href="/supply?page_no=8">8</a></li><li><a href="/supply?page_no=9">9</a></li><li><a href="/supply?page_no=10">10</a></li><li><a href="/supply?page_no=11">...</a></li><li><a href="/supply?page_no=2">›</a></li><li><a href="/supply?page_no=58">»</a></li></ul>
</div>




</div>

<!--<script type="text/javascript">$("img").on("error", function () { var img = $(this); var imgUrl = img.attr("src"); setTimeout(function () { $.ajax({ url: "/api/Distribution/UpdateFile", type: "Post", data: { imgUrl: imgUrl }, dataType: "json", timeout: 8000, cache: false, success: function (data) { if (data.ResultCode == "1") { img.attr("src", data.Url); } }, complete: function (xhr, ts) { img.unbind("error") } }) }, 2000) });</script>--><!--不要移到js文件，否则IE不支持-->

    @include('footer')