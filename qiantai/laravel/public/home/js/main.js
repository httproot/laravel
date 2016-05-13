 //自定义通用隐藏显示
!function ($) {
    "use strict"; // jshint ;_;
    var data_type = '[data-type="mhover"]';
    var Mhover = function (el, options) {
        this.options = $.extend({}, $.fn.mhover.defaults, options);
        $(el).on('mouseover', data_type, this.show);
        $(el).on('mouseout', data_type, this.hide);
    }

    Mhover.prototype.show = function (e) {
        var $this = $(this);
        $this.addClass('mhover');
        var selector = $this.attr('data-targ');
        e && e.preventDefault()      //阻止元素默认行为
        if (!selector) { return false; }
        $(selector).show();
    }

    Mhover.prototype.hide = function (e) {
        var $this = $(this);
        $this.removeClass('mhover');
        var selector = $this.attr('data-targ');
        e && e.preventDefault()      //阻止元素默认行为
        if (!selector) { return false; }
        $(selector).hide();
    }
    /* Hover CLASS DEFINITION
     * ====================== */
    $.fn.mhover = function (option) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('mhover')
                , options = typeof option == 'object' && option;
            if (!data) $this.data('mhover', (data = new Mhover(this, options)));
            if (typeof option == 'string') data[option].call($this);
        })
    }
    $.fn.mhover.Constructor = Mhover;
    //参数
    $.fn.mhover.defaults = {
        ajaxShow: false
    }
    // mhover Data Api
    $(function () {
        $('body').on('mouseenter.mhover.data-api', data_type, Mhover.prototype.show);
        $('body').on('mouseleave.mhover.data-api', data_type, Mhover.prototype.hide);
    })
}(window.jQuery);

//首页动画hover
$(function () {
    var $el, leftPos, newWidth;
    var $mainNav = $("#show-tips-items");
    if ($("#show-tips-items").length > 0) {
        /*
         多态按钮
         */
        $mainNav.append("<li id='magic-line'></li>");

        var $magicLine = $("#magic-line");

        if ($(".current-page-item a").position() != undefined) {
            $magicLine
                .width($(".current-page-item").width())
                .css("left", $(".current-page-item a").position().left)
                .data("origLeft", $magicLine.position().left)
                .data("origWidth", $magicLine.width());
        }

        $("#show-tips-items li").find("a").hover(function () {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.parent().width();

            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        }, function () {
            $magicLine.stop().animate({
                left: $(".current-page-item a").position() != undefined ? $(".current-page-item a").position().left : 0,
                width: $magicLine.data("origWidth")
            });
        });
    }
});

$(function () {
    //首页title js动画 支持ie8
    $(".title-mg").animate({ left: "0px" }, 1000);
    //首页左侧动态栏
    $('.item-Menu').mhover({
        ajaxShow: true
    });
});

//返回顶部
$(function () {
    $(window).scroll(function () {
        /*监听滚动设置悬浮导航位置*/
        if ($(window).scrollTop() > 300) {
            $(".tool-b .b4").css({ display: 'block' });
        } else {
            $(".tool-b .b4").css({ display: 'none' });
        }
    });
    $(".tool-b .b4").click(function () {
        $('body,html').animate({ scrollTop: 0 }, 1000);
    })
});

//首页弹窗
$(function () {
    //采购需求弹出层提示
    $('<div id="tip_box"></div>').appendTo(document.body);
    $(".b-list li").each(function (i) {
        $(this).mousemove(function (ev) {
            var str = "";
            $.each($(this).find('span'), function (index, item) {
                str += $(item).html() + " ";
            });
            var box = $('#tip_box');
            box.show();
            box.html(str);
            var t = $(window).scrollTop();
            var x = ev.clientX - box.width() - 40;
            var y = ev.clientY + t - 15;
            box.css({ left: x, top: y });
        });
        $(this).mouseout(function () {
            $("#tip_box").hide();
        });
    });
    //专区煤表格中弹出层提示
    TipShow();
})

//首页供货提示层
function TipShow() {
    $('<div id="tip_box2"></div>').appendTo(document.body);
    $(".floor-table .t-2,.floor-table .t-6,.description .t1").each(function (i) {
        $(this).mousemove(function (ev) {
            var str = $(this).data("ori");
            /*$.each($(this).find('span'), function(index, item) {
             str += $(item).html() + " ";
             });*/
            var box = $('#tip_box2');
            box.show();
            box.html(str);
            var t = $(window).scrollTop();
            var x = ev.clientX - box.width() - 40;
            var y = ev.clientY + t - 15;
            box.css({ left: x, top: y });
        });
        $(this).mouseout(function () {
            $("#tip_box2").hide();
        });
    });
}


//头部热门搜索代码
var isFocus = false;
var dataIsLoaded = false;

$(function () {

    $('.s-form input').focus(function () {
        if (dataIsLoaded == false) {
            dataIsLoaded = true;
            getHotSearchResults();
        }
        else {
            $('.ac-results').css('display', 'block');
        }

        isFocus = true;
    })

    $(document.body).click(function () {
        if (!isFocus) {
            $('.ac-results').css('display', 'none');
        }

        isFocus = false;
    });

    $("#btnSearch").click(function () {
        var searchtType = $("#tbSearchKey").parent().parent().find(".searchSelected").attr("search-type");
        searchGoods($.trim($("#tbSearchKey").val()), searchtType);
    });
    $('#tbSearchKey').bind('keyup', function (event) {
        var theEvent = event || window.event;
        var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
        if (code == "13") {
            //alert(1);
            //回车执行查询
            var searchtType = $("#tbSearchKey").parent().parent().find(".searchSelected").attr("search-type");
            searchGoods($.trim($("#tbSearchKey").val()), searchtType);
            return false;
        }
    });

    //$("#tbSearchKey").keyup(function (e) {
    //    if (e.keyCode == 13) {
    //        var searchtType = $("#tbSearchKey").parent().parent().find(".searchSelected").attr("search-type");
    //        searchGoods($.trim($("#tbSearchKey").val()), searchtType);
    //        return false;
    //    }
    //});
});

function searchGoods(searchKey, searchType) {
    var url = "/supply";


    if (searchType == "caigou") { url = "/caigou"; } 
    if (searchKey != "") {
        url += "?search_key=" + encodeURI(searchKey);

        //  window.open(url + "?search_key=" + encodeURI(searchKey));
    }
    if (window.location.pathname == "/supply" || window.location.pathname == "/caigou") {
        window.location.href = url.replace("#", "");
        
    } else {
        window.open(url);
    }
}

function getHotSearchResults() {
    $.get("/homev2/hotsearch", function (data) {
        if (data.success && data.attr.length != 0) {
            var resultsHtml = "";
            for (var i = 0; i < data.attr.length; i++) {
                resultsHtml += "<li><a href='###' class='search'><label>" + data.attr[i].name + "</label><span>约" + data.attr[i].count + "个结果</span></a></li>";
            }

            $(".ac-hot-list").html(resultsHtml);
            $(".search").click(function () {
                var searchtType = $("#tbSearchKey").parent().parent().find(".searchSelected").attr("search-type");
                searchGoods($(this).children().eq(0).text(), searchtType);
            });
            $('.ac-results').css('display', 'block');
        }
    });
}



//帮助中心
$(function () {
    $(".h-title").on("click", function () {
        if ($(this).hasClass("show")) {
            $(this).find(".iconfont").html("&#xf02a9;");
            $(this).siblings(".h-item").hide();
            $(this).removeClass("show");
            $(this).parents("li").removeClass("hover");
        } else {
            $(this).find(".iconfont").html("&#xf02aa;");
            $(this).siblings(".h-item").show();
            $(this).addClass("show");
            $(this).parents("li").addClass("hover");
        }
    });

})

////布局页面上的搜索功能
$(function () {

    var placeHolder = "搜索商城现货，输入如品种、牌号、厂家等";
    var topA1 = $(".s-tab .con a").parent().parent().find("a").eq(0);
    var topA2 = $(".s-tab .con a").parent().parent().find("a").eq(1);
    var currPath = window.location.pathname;

    if (currPath.indexOf("caigou") > 0) {
        $(topA1).attr("search-type", "caigou");
        $(topA1).html("采购");
        $(topA2).attr("search-type", "supply");
        $(topA2).html("现货");
        if ($(topA1).attr("search-type") == "caigou") {
            placeHolder = "搜索采购";
        }
        $("#tbSearchKey").attr("placeholder", placeHolder);

    }

    $(".s-tab .con a").click(function () {
        InitSearch();

    });



});


function InitSearch() {
    var placeHolder = "搜索商城现货，输入如品种、牌号、厂家等";
    var topA1 = $(".s-tab .con a").parent().parent().find("a").eq(0);
    var topA2 = $(".s-tab .con a").parent().parent().find("a").eq(1);

    var tempSearchType = $(topA2).attr("search-type");
    var tempSearchName = $(topA2).html();
    $(topA2).attr("search-type", $(topA1).attr("search-type"));
    $(topA2).html($(topA1).html());
    $(topA1).attr("search-type", tempSearchType);
    $(topA1).html(tempSearchName);

    if ($(topA1).attr("search-type") == "caigou") {
        placeHolder = "搜索采购";
    }
    $("#tbSearchKey").attr("placeholder", placeHolder);

}