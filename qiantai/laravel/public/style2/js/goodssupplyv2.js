var searchGroups = [];
var arrowUp = "<i class=\"iconfont\">&#xf0113;</i>";
var arrowDown = "<i class=\"iconfont\">&#xf0111;</i>";
var pageCount = 0;
var pageNo = 1;
var sortKey = getUrlParam("sort_key");
var sortType = getUrlParam("sort_type");
var selectedJgAddressIsRegion = false;

In.ready(function () {
    $(function () {

        /*---以下是查询条件里面的事件--*/

        registerSelectedSearchEvent();

        registerShowOrHideSearchEvent();

        registerSearchItemSelectEvent();

        registerShowMoreButtonEvent();

        registerJgAddressSearchEvent();

        registerMoreOrLessEvent();

        /*---以下是结果集里面的事件--*/

        registerSortingEvent();

        registerPriceSearchEvent();

        registerGoodsValidDayCountEvent();

        registerResultEvent();

        registerPagingEvent();

        $('.fPrice').mouseleave(function () {
            $(this).removeClass('k-active');
        });

        initStyleAndVariables();
    })
});

/*------------------------------------事件注册------------------------------------------*/

function registerSelectedSearchEvent() {
    $("#a_allCondition").click(function () {

        $(".searchitem>a").removeClass("on");
        $(".selected-query").remove();

        //给不限添加选中样式
        $("ul.any>li>a").each(function () {
            if (!$(this).hasClass("on")) {
                $(this).addClass("on");
            }
        });

        search(false, false);
    });

    //点击筛选条件x的事件
    $(".closecondition").click(function () {
        var groupKey = $(this).data("searchgroupkey");

        $("#div_" + groupKey).find(".searchitem").each(function () {
            $(this).find("a").removeClass("on")
        });

        $(this).parent().remove();

        search(false, false);
    });
}

function registerShowOrHideSearchEvent() {
    //收起筛选
    $(".collapse .show").on("click", function () {
        $(".searchbox").hide();
        $(this).hide()
        $(".collapse .hide").show()
    })
    $(".collapse .hide").on("click", function () {
        $(".searchbox").show();
        $(this).hide()
        $(".collapse .show").show()
    })
}

function registerShowMoreButtonEvent() {
    $(".showmore").click(function () {
        var showMore = false;
        $(this).prevAll().each(function () {
            if ($(this).data("showalways") == "no") {
                if (this.style.display == "none") {
                    this.style.display = "block";
                    showMore = true;
                } else {
                    this.style.display = "none";
                }
            }
        });
        if (showMore) {
            $(this).html("<a style=\"color:#168bb4\">收起<i class='iconfont'>-</i></a>");
        } else {
            $(this).html("<a style=\"color:#168bb4\">更多<i class='iconfont'>+</i></a>");
        }
    });
}

function registerSearchItemSelectEvent() {
    $(".searchitem").click(function () {
        var parent = $(this).parent();
        var isJgd = parent.hasClass("jgdul");
        if (isJgd)//如果是交割地
        {
            parent.parent().siblings().find("a.on").removeClass("on");
            var aItem = $(this).find("a")
            if (aItem.text() == "全部" && !aItem.hasClass("on")) {
                aItem.parent().siblings().find("a.on").removeClass("on");
            }
            else if (aItem.text() != "全部") {
                parent.children().eq(0).find("a.on").removeClass("on");
            }
        }

        if (parent.data("allowmultipleselect").toString().toLowerCase() == "true") {
            if ($(this).children().hasClass("on")) {
                $(this).children().removeClass("on");
            }
            else {
                $(this).children().addClass("on")
            }
        }
        else {
            if ($(this).children().hasClass("on")) {
                $(this).children().removeClass("on");
            }
            else {
                $(this).siblings().children().removeClass("on");
                $(this).children().addClass("on");
            }
        }

        var selectedItems = $(this).parent().find("a.on");
        if (selectedItems.length != 0) {
            if (isJgd) {
                $(this).parent().parent().parent().prev().children().eq(0).find("li>a").removeClass("on");
            }
            else {
                $(this).parent().prev().find("a").removeClass("on");
            }
        }

        search(false, false);
    });

    $("ul.any").click(function () {

        var aElement = $(this).find("li>a")
        if (!aElement.hasClass("on")) {
            aElement.addClass("on");
        }

        var selectedItems = null;
        if ($(this).hasClass("jgd"))//交割地
        {
            selectedItems = $(".jgdul").find("a.on");
        }
        else {
            selectedItems = $(this).next().find("a.on");
        }

        if (selectedItems.length != 0) {
            selectedItems.removeClass("on");
            search(true);
        }
    });
}
      
function registerPriceSearchEvent() {
    $("#a_pricesubmit").click(function () {

        var min_price = $.trim($("#input_min_price").val());
        var max_price = $.trim($("#input_max_price").val());

        if (min_price != "") {
            if (isNaN(parseFloat(min_price))) {
                alert("请输入正确的金额.")
                $("#input_min_price").focus();
                return;
            }
        }

        if (max_price != "") {
            if (isNaN(parseFloat(max_price))) {
                alert("请输入正确的金额.")
                $("#input_max_price").focus();
                return;
            }
        }

        search(true);
    });

    $("#input_min_price,#input_max_price").keypress(function (e) {
        if (e.keyCode == 13) {
            search(true);
        }
    });

    $('.fPb-item .j_FPInput').click(function () {
        $(this).closest('.fPrice').addClass('k-active');
    });
    //价格清空
    $('.fP-expand .ui-btn-o').click(function () {
        $(this).closest('.fP-expand').prev().find('.j_FPInput').each(function () {
            $(this).val("");
        });
    });
}

function registerJgAddressSearchEvent() {
    //交割地　选项卡
    $('.area-panel-nav .list li').click(function () {
        $(this).addClass("area-selected").siblings().removeClass("area-selected");
        $(this).parents().siblings(".area-panel-con").find(".area-panel-item").eq($(this).index()).show().siblings().hide();
    });
    //交割地，点击不限隐藏详细地区层
    $(".clear-add").click(function () {
        $(".area-panel-con .area-panel-item").hide();
        $('.area-panel-nav .list li').removeClass("area-selected");
    })

    $("#tb_jgaddress").keyup(function (e) {
        if (e.keyCode == 13) {
            search(true);
        }
    });

    $("#a_jgaddresssubmit").click(function () {
        search(true);
    })
}

function registerMoreOrLessEvent() {
    //更多
    $(".more-btn .show").on("click", function () {
        $(".search-more").fadeIn();
        $(this).hide()
        $(".more-btn .hide").css("display", "block")
    })
    $(".more-btn .hide").on("click", function () {
        $(".search-more").fadeOut();
        $(this).hide()
        $(".more-btn .show").show()
    })
}

function registerGoodsValidDayCountEvent() {
    $("#sel_valid_day").change(function () {
        search(true, false);
    });
}

function registerResultEvent() {
    $('.tbody .t-3,.tbody .t-6').mousemove(function () {
        $(this).children(".Popup").show()
    }).mouseout(function () { $(this).children(".Popup").hide() });
}

function registerSortingEvent() {
    $("div.o-item>a").click(function () {
        $("div.o-item").each(function () { $(this).removeClass("active") });
        $(this).parent().addClass("active");
        var currentSortKey = $(this).parent().attr("id").replace("div_order_", "");

        if (this.id != "div_order_default") {
            if (sortType == "" || sortType == "desc" || sortKey != currentSortKey) {
                sortType = "asc";
            } else {
                sortType = "desc";
            }
        }

        sortKey = currentSortKey;

        search(true);
    });
}

function registerPagingEvent() {
    //前一页
    $("a.page-prev").click(function () {
        if ($(this).hasClass("disabled")) {
            return;
        }

        pageNo -= 1;
        search(true, true);
    });

    //下一页
    $("a.page-next").click(function () {
        if ($(this).hasClass("disabled")) {
            return;
        }

        pageNo += 1;
        search(true, true);
    });
}




/*------------------------------------查询逻辑------------------------------------------*/

function search(isSearchInResults, isPaging) {
    var searchParameters = generateSearchParametersString(isSearchInResults, isPaging);

    var url = window.location.href;
    if (url.indexOf("?") != -1) {
        url = url.substr(0, url.indexOf("?"));
    }
    window.location.href = url + "?" + searchParameters.substr(1, searchParameters.length - 1);
}

function generateSearchParametersString(isSearchinResults, isPaging) {
    var searchParameters = "&"

    $("ul.searchgroup").each(function () {
	
        if ($(this).hasClass("jgdul"))//交割地
        {
            var selectedItems = $(this).find("a.on");
			
            if (selectedItems.length != 0 && selectedItems.text() == "全部") {
                selectedJgAddressIsRegion = true;
            }

            if (selectedItems.length > 0) {

                var groupKey = $(this).data("searchgroupkey");
				
                var selectedKeys = "";
                selectedItems.each(function () {
                    selectedKeys += "," + $(this).parent().data("searchkey");
					console.log(selectedKeys);
                });
                selectedKeys = selectedKeys.substr(1, selectedKeys.length - 1);
                searchParameters += groupKey + "=" + selectedKeys + "&";
            }
        }
        else {
            var selectedItems = $(this).find("a.on")
            if (selectedItems.length > 0) {
                var groupKey = $(this).data("searchgroupkey");
                var selectedKeys = "";
                selectedItems.each(function () {
                    selectedKeys += "," + $(this).parent().data("searchkey");
                });
                selectedKeys = selectedKeys.substr(1, selectedKeys.length - 1);
                searchParameters += groupKey + "=" + selectedKeys + "&";
            }
        }
    });

    if (searchParameters[searchParameters.length - 1] == '&') {
        searchParameters = searchParameters.substr(0, searchParameters.length - 1);
    }

    if (isSearchinResults) {
        if (sortKey != "default" && sortKey != "") {
            searchParameters += "&sort_key=" + sortKey;
            searchParameters += "&sort_type=" + sortType;
        }

        var minPrice = $.trim($("#input_min_price").val());
        var maxPrice = $.trim($("#input_max_price").val());
        if (minPrice != "") {
            searchParameters += "&min_price=" + minPrice;
        }
        if (maxPrice != "") {
            searchParameters += "&max_price=" + maxPrice;
        }

        var jgAddress = $.trim($("#tb_jgaddress").val());
        if (jgAddress != "") {
            searchParameters += "&jg_address=" + jgAddress;
        }

        var validDayCount = $("#sel_valid_day").val();
        if (validDayCount != -1) {
            searchParameters += "&goods_valid_day_count=" + validDayCount;
        }

        var searchKey = $.trim($("#tbSearchKey").val());
        if (searchKey != "") {
            searchParameters += "&search_key=" + searchKey;
        }
    }

    if (isPaging == undefined || isPaging == false) {
        pageNo = 1
    }

    searchParameters += "&selected_jg_is_region=" + (selectedJgAddressIsRegion ? "1" : "0") + "&page_no=" + pageNo;

    // searchParameters += "&showsearch=" + ($(".searchbox").get(0).style.display == "none" ? "0" : "1");


    return searchParameters;
}

function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}

function initStyleAndVariables() {
    if ($.trim(sortKey) == "" || sortKey == "default") {
        $("#div_order_default").addClass("active");
    } else {
        $("#div_order_" + sortKey).addClass("active");
        if (sortType == "asc") {
            $("#div_order_" + sortKey).find("a").html($("#div_order_" + sortKey).find("a").text() + arrowUp);
        } else {
            $("#div_order_" + sortKey).find("a").html($("#div_order_" + sortKey).find("a").text() + arrowDown);
        }
    }

    /*--------------paging相关变量初始化---------------------*/
    if ($(".pagenum").length != 0) {
        var pagingInfo = $(".pagenum").text().split("/");
        pageNo = parseInt(pagingInfo[0]);
        pageCount = parseInt(pagingInfo[1]);
    }

    if (pageNo == 1) {
        $("a.page-prev").addClass("disabled");
    }
    else {
        $("a.page-prev").removeClass("disabled");
    }

    if (pageNo == pageCount) {
        $("a.page-next").addClass("disabled");
    } else {
        $("a.page-next").removeClass("disabled");
    }

    /*------------------------交割地是否区域变量初始化-------------------------------------*/
    selectedJgAddressIsRegion = getUrlParam("selected_jg_is_region") == "1" ? true : false;
}