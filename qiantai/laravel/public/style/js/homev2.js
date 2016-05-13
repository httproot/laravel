//首页轮播动画
$(function () {
    //banner
    /*var swiper = new Swiper('.cat-show', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        speed:800,
        loop: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });
    $('.show-next').on('click', function(e){
        e.preventDefault()
        swiper.swipeNext()
    })
    $('.show-prev').on('click', function(e){
        e.preventDefault()
        swiper.swipePrev()
    })
    $('.cat-show').on('mouseover', function(){
        swiper.stopAutoplay();
    })
    $('.cat-show').on('mouseout', function(){
        swiper.startAutoplay();
    })*/
    $(".fullSlide").hover(function () {
        $(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
    },
        function () {
            $(this).find(".prev,.next").fadeOut()
        });
    $(".fullSlide").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        effect: "fade",
        autoPlay: true,
        autoPage: true,
        trigger: "click",
        interTime: 5000,
        delayTime: 1200,
        startFun: function (i) {
            var curLi = jQuery(".fullSlide .bd li").eq(i);
            if (!!curLi.attr("_src")) {
                curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
            }
        }
    });
    //现货行情
    var swiperadbd = new Swiper('.ad-bd', {
        loop: true,
        slidesPerView: 3,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });
    $('.ad-hd-next').on('click', function (e) {
        e.preventDefault()
        swiperadbd.swipeNext()
    })
    $('.ad-hd-prev').on('click', function (e) {
        e.preventDefault()
        swiperadbd.swipePrev()
    })
    $('.ad-bd').on('mouseover', function () {
        swiperadbd.stopAutoplay();
    })
    $('.ad-bd').on('mouseout', function () {
        swiperadbd.startAutoplay();
    })
    //热门资讯
    var swiperzmmarket = new Swiper('.zmmbox', {
        mode: 'vertical',
        loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    $('.zmmbox-next').on('click', function (e) {
        e.preventDefault()
        swiperzmmarket.swipePrev()
    })
    $('.zmmbox-prev').on('click', function (e) {
        e.preventDefault()
        swiperzmmarket.swipeNext()
    })
    $('.zmmbox').on('mouseover', function () {
        swiperzmmarket.stopAutoplay();
    })
    $('.zmmbox').on('mouseout', function () {
        swiperzmmarket.startAutoplay();
    })
    //交易订单
    var swiperalllist = new Swiper('.alllistbox', {
        mode: 'vertical',
        loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    $('.all-list-next').on('click', function (e) {
        e.preventDefault()
        swiperalllist.swipePrev()
    })
    $('.all-list-prev').on('click', function (e) {
        e.preventDefault()
        swiperalllist.swipeNext()
    })
    $('.alllistbox').on('mouseover', function () {
        swiperalllist.stopAutoplay();
    })
    $('.alllistbox').on('mouseout', function () {
        swiperalllist.startAutoplay();
    })

    var bigV = new Swiper('.prot', {
        loop: true,
        //autoplay: 2500,
        //autoplayDisableOnInteraction: false,
        slidesPerView: 5
    })
    $('.prot-next').on('click', function (e) {
        e.preventDefault();
        bigV.swipeNext();

    })
    $('.prot-prev').on('click', function (e) {
        e.preventDefault()
        bigV.swipePrev()
    })
    $('.prot').on('mouseover', function () {
        bigV.stopAutoplay();
    })
    $('.prot').on('mouseout', function () {
        bigV.startAutoplay();
    })

    //大户资源
    var swiperhotwrapper = new Swiper('.hot-box2', {
        loop: true,
        speed: 800,
        loopAdditionalSlides: 1
    });
    $('.hot-next').on('click', function (e) {
        e.preventDefault()
        swiperhotwrapper.swipeNext()
    })
    $('.hot-prev').on('click', function (e) {
        e.preventDefault()
        swiperhotwrapper.swipePrev()
    })

    //大户
    var vip = new Swiper('.vip', {
        loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
        slidesPerView: 8
    })
    $('.vip-next').on('click', function (e) {
        e.preventDefault()
        vip.swipeNext()
    })
    $('.vip-prev').on('click', function (e) {
        e.preventDefault()
        vip.swipePrev()
    })
    $('.vip').on('mouseover', function () {
        vip.stopAutoplay();
    })
    $('.vip').on('mouseout', function () {
        vip.startAutoplay();
    })



    //资讯动态－电厂库存
    var swipernns = new Swiper('.n-ns', {
        loop: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false
    });
    $('.n-ns-next').on('click', function (e) {
        e.preventDefault()
        swipernns.swipeNext()
    })
    $('.n-ns-prev').on('click', function (e) {
        e.preventDefault()
        swipernns.swipePrev()
    })
    $('.n-ns').on('mouseover', function () {
        swipernns.stopAutoplay();
    })
    $('.n-ns').on('mouseout', function () {
        swipernns.startAutoplay();
    })
    //资讯动态－船期
    var swipernns2 = new Swiper('.n-ns22', {
        loop: true,
        mode: 'vertical',
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });
    $('.n-ns2-next').on('click', function (e) {
        e.preventDefault()
        swipernns2.swipeNext()
    })
    $('.n-ns2-prev').on('click', function (e) {
        e.preventDefault()
        swipernns2.swipePrev()
    })
    $('.n-ns22').on('mouseover', function () {
        swipernns2.stopAutoplay();
    })
    $('.n-ns22').on('mouseout', function () {
        swipernns2.startAutoplay();
    })
})

//首页供货采购
$(function () {
    $(".ui-floor .menu-item").click(function () {
        var region = $(this).attr('data-region');
        var floor = $(this).attr('data-floor');
        var selector = "#floor" + floor;
        $(selector + " a").removeClass("active-menu-item");
        $(this).addClass("active-menu-item");
        $(selector + " .floor-right [data-region]").addClass('hide');
        $(selector + " .floor-right [data-region=" + region + "]").removeClass('hide');

        $(selector + " .floor-table [data-region]").removeClass().addClass('hide');
        $(selector + " .floor-table [data-region=" + region + "]").removeClass().addClass('show000');
    });
    initSupplyDialog();
});

//首页供货数据刷新
var loadimg = '<div class="zm-loading">&nbsp;</div>';
var url = "/api/home/getgoodssupplyrefreshdata";
var listUrl = '/supply';
var detailUrl = '/supply/detail';
$(".floor-box .ico-load").click(function () {
    var thisTbody = $(this).parents(".floor-box").first().find("tbody.show000");
    var cocalID = $(this).parents(".floor-box").first().attr("id");
    var areaID = thisTbody.attr("data-region");
    thisTbody.append(loadimg);
    setTimeout(function () {
        $.ajax({
            //global: false,
            url: url,
            dataType: "json",
            data: { r: Math.random(), cocalID: cocalID, areaID: areaID },
            type: "get",
            cache: false,
            success: function (data) {
                try {
                    if (data.Success) {
                        if (data.Data != null) {
                            var supplyJson = $.parseJSON(data.Data);
                            var html = '';
                            $.each(supplyJson, function (index, item) {
                                html += '<tr data-type="mhover">'
                                        + '<td class="t-1">'
                                        + '<span><a href="' + listUrl + '?coal_cate_type_id =' + item.PinmingId + '" target="_blank">' + item.PinmingOne + '</a></span>'
                                        + '</td>'
                                        + '<td class="t-2" data-ori="产地：' + item.Chandi + '"><span>' + item.CargoName + '</span>';
                                if (item.IsSale) {
                                    html += '<i class="icon-sale"></i>';
                                }
                                html += '</td>'
                                    + '<td class="t-3"><span>' + item.ZhiBiao1 + '</span></td>'
                                    + '<td class="t-4"><span>' + item.ZhiBiao2 + '</span></td>'
                                    + '<td class="t-5"><span>' + item.JgWeight + '</span></td>'
                                    + '<td class="t-6" data-ori="' + item.Jgd + '"><span>' + item.JgdShort + '</span></td>'
                                    + '<td class="t-7"><span class="Cred en-ft">' + item.Price + '</span></td>'
                                    + '<td class="t-8"><a href="' + detailUrl + '/' + item.Id + '" target="_blank" class="btn_detail">详细</a></td>'
                                + '</tr>';
                            });
                            if (html != "") {
                                thisTbody.empty().append(html);
                                TipShow();//main.js ->TipShow()
                            }
                        }
                    }
                }
                catch (e) {
                }
                finally {
                }
            },
            complete: function (XMLHttpRequest, textStatus) {
                thisTbody.find(".zm-loading").remove();
            }
        });
    }, 500);

});

//发送app下载短信
function sendMsg() {
    var btn = $(".send-message-btn");
    var input = $(".send-message-input");
    btn.attr("disabled", "disabled");
    try {
        var mobile = input.val();
        var pattern = /^1\d{10}$/;
        if (mobile == "") {
            throw new Error("请输入手机号码");
        }
        else if (!pattern.test(mobile)) {
            throw new Error("手机号码错误");
        }

        $.post("/Common/SendMsgByAppDownload", { mobile: mobile }, function (data) {
            if (!data.success) {
                //throw new Error(data.message);
                $.j_messager.alertTip(data.message, function () {
                    btn.removeAttr("disabled");
                });
                return;
            }
            $.j_messager.alertOk(data.message, function () {
                input.val("").attr("placeholder", "请输入正确的手机号码").css({ "background-color": "#fff" });
                timingEnable(btn);
                setAppShowInterval();
            });
        });
    } catch (e) {
        input.val("").attr("placeholder", e.message).css({ "background-color": "#FFF29D" }).focus();
        btn.removeAttr("disabled");
    }
}
//按钮倒计时
function timingEnable(btn) {
    var btnTxt = btn.text();
    btn.attr("disabled", "disabled").addClass("disabled");
    var t = 60;
    var timingInterval = setInterval(function () {
        if (t <= 0) {
            clearInterval(timingInterval);
            btn.text(btnTxt).removeAttr("disabled").removeClass("disabled");
            return;
        }

        btn.text(t + " 秒");
        t--;
    }, 1000);
}

var appShowInterval = null;
function appDownloadShow() {
    $(".fl-open-wrap").animate({
        "left": "-420px"
    },
    500,
    function () {
        $(".fl-ass-wrap").css({
            "display": "block"
        }).animate({
            "left": "0"
        }, 1000);
    });
    clearAppShowInterval();
}
function appDownloadClose() {
    $(".fl-ass-wrap").animate({
        "left": "-100%"
    },
    1000,
    function () {
        $(".fl-open-wrap").animate({
            "left": "0px"
        }, 500);
    });
    clearAppShowInterval();
}

function initShowAppDownload() {
    var cookieKey = 'zhaomei.com.appdownload';
    var appDownloadStatus = getCookie(cookieKey);
    setTimeout(function () {
        if (appDownloadStatus == "") {
            appDownloadShow();
            setAppShowInterval();
            setCookie(cookieKey, "zhaomei.com", 7);
        }
    }, 1000);//根据cookie 值判断 是否1s 后显示app 下载界面

    $(".fl-ass-wrap").on("focusin mousemove", clearAppShowInterval);
    $(".fl-ass-wrap").on("blur mouseleave", setAppShowInterval);
}

function clearAppShowInterval() {
    clearTimeout(appShowInterval);
}
function setAppShowInterval() {
    appShowInterval = setTimeout(function () {
        appDownloadClose();
    }, 5000);
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1
            c_end = document.cookie.indexOf(";", c_start)
            if (c_end == -1) c_end = document.cookie.length
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return ""
}

function setCookie(c_name, value, expiredays) {
    var exdate = new Date()
    exdate.setDate(exdate.getDate() + expiredays)
    document.cookie = c_name + "=" + escape(value) +
    ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString())
}

$(function () {
    //反馈代码
    $("#btnFeedback").click(function () {
        var content = $.trim($("#feedback").val());
        var mobile = $.trim($("#feedbackmobile").val());
        var reg = "/^1[3|4|5|7|8]\d{1}(\*{4}|\d{4})\d{4}$/";
        if (content == "") {
            $("#feedbackmobile").focus();
        } else if (!(/^1[3|4|5|7|8]\d{1}(\*{4}|\d{4})\d{4}$/.test(mobile)))
        {
              $.j_messager.alertWait("请输入有效的手机号");
       
              $("#feedbackmobile").focus(); $("#mobile").attr("placeholder", "请输入有效的手机号");
        }
        else {
            $.post("/homev2/feedback", { content: content, mobile: mobile }, function (data) {
                $.j_messager.alertWait(data.message);
                if (data.success) {
                    $("#feedback").val("");
                  
                }

            });
        }
    });

    //app下载
    $(".fl-open-wrap").click(appDownloadShow);
    $(".fl-ass-close").click(appDownloadClose);

    //短信接收app下载地址
    $('.send-message-btn').on("click", sendMsg);

    initShowAppDownload();
});

