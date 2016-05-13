$.global = {
    mobileValidateConfig: {
        interval: null,
        isEnable: true,
        maxSeconds: 90
    },
    registerTip: "感谢您注册找煤网，我们将在24小时内与您联系！找煤网服务热线：400-065-6868",
    entrustCaiGouTip: "您发布的信息我们将在24小时内与您联系并进行审核。再次感谢您的信任！找煤网服务热线：400-065-6868",
    notLoginTip: "请您登录后进行操作"

};

//弹出框插件
//by Jiangxp
//@2015.7.6
(function ($) {

    $.j_messager = {
        defaults: {
            waitsecond: 0,
            failure: "/Content/themes/images/dialog_failure.png",
            remind: "/Content/themes/images/icon_remind.png",
            success: "/Content/themes/images/dialog_success.png"
        },
        openMask: function () {
            //$.dialog({
            //    title: false,
            //    lock: true,
            //    content: "<img src=\"/Content/images/loading.gif\">"
            //});
        },
        closeMask: function () {
            //if ($(".i-dialog:has('.message-dlg')").length == 0) {
            //    $.j_messager.waitCloseMask();
            //}
        },
        waitCloseMask: function () {
            if ($.j_messager.defaults.waitsecond == 0) {
                $.j_messager.realCloseMask();
            } else {
                var timer = setTimeout("$.j_messager.realCloseMask()", $.j_messager.defaults.waitsecond);
            }
            $.j_messager.defaults.waitsecond = 0;
        },
        realCloseMask: function () {
            //$(".i-dialog-lock").remove();
            //$(".i-dialog").remove();
            $(".i-dialog-lock").hide();
            $(".i-dialog").hide();
        },
        alertWait: function (message, callback) {
            //$.extend($.j_messager.defaults, options);
            if ($.j_messager.defaults.waitsecond == 0) $.j_messager.defaults.waitsecond = 1000; //i - close
            var dialog = $.dialog({
                fixed: true,
                lock: true,
                title: false,
                time: $.j_messager.defaults.waitsecond,
                hide: function () {
                    $.j_messager.waitCloseMask();
                    if (callback && callback instanceof Function) {
                        callback();
                    }
                },
                content: "<div showMsg class=\"dialog1\"><span>" + message + "</span></div>"
            });
        },
        error: function (message, func) {
            var dialog = $.dialog({
                title: "错误提示",
                width: 350,
                height: 300,
                fixed: true,
                lock: true,
                content: "<div class=\"dialog1 message-dlg\" style=\" text-align:left;\"><span style=\"font-family:微软雅黑;font-size:12px;\"><img src=\"" + $.j_messager.defaults.failure + "\">" + message + "</span></div>",
                btn: {
                    canle: {
                        val: "确定",
                        type: "orange",
                        click: function () {
                            if (func && func instanceof Function) {
                                func();
                            }
                            this.hide();
                            $.j_messager.waitCloseMask();
                        }
                    }
                }
            });
        },
        alert: function (message, func) {
            var dialog = $.dialog({
                title: "提示",
                width: 360,
                fixed: true,
                lock: true,
                content: "<div class=\"dialog1 message-dlg\" style=\"padding:0px!important; text-align:left;\"><span style=\"font-family:微软雅黑; font-size:12px;\">" + message + "</span></div>",
                btn: {                      //可以任意定义按钮个数
                    canle: {                     //按钮的key值，下次可用个btn方法从新设置
                        val: '确定',            //按钮显示的文本
                        type: 'orange',         //样式可选参数green, blue, red, yellow .默认白色。
                        //disabled: true,       //是否可操作
                        click: function (btn) {
                            btn.className = 'blue';
                            if (func && func instanceof Function) {
                                func();
                            }
                            return true;         //阻止默认的关闭行为
                        }
                    }
                },
                hide:func//关闭时回调
            });
        },
        tip: function (message, func) {
            var dialog = $.dialog({
                title: "提示",
                width: 350,
                height: 300,
                fixed: true,
                lock: true,
                content: "<div class=\"dialog1 message-dlg\"><span style=\"font-family:微软雅黑;\"><img src=\"" + $.j_messager.defaults.remind + "\">" + message + "</span></div>",
                btn: {
                    canle: {
                        val: "确定",
                        type: "orange",
                        click: function () {
                            if (func && func instanceof Function) {
                                func();
                            }
                            this.hide();
                            $.j_messager.waitCloseMask();
                        }
                    }
                }
            });
        },
        tipCustom: function (message,width, height, func) {
            var dialog = $.dialog({
                title: "提示",
                width: width,
                height: height,
                fixed: true,
                lock: true,
                content: "<div class=\"dialog1 message-dlg\" style=\"padding:20px 20px 0px 20px !important; text-align:left;\"><span style=\"font-family:微软雅黑; font-size:12px;\"><img src=\"" + $.j_messager.defaults.success + "\">" + message + "</span></div>",
                btn: {
                    canle: {
                        val: "确定",
                        type: "orange",
                        click: function () {
                            if (func && func instanceof Function) {
                                func();
                            }
                            this.hide();
                            $.j_messager.waitCloseMask();
                        }
                    }
                }
            });
        },
        ok: function (message, func) {
            var dialog = $.dialog({
                title: "提示",
                width: 350,
                height: 260,
                fixed: true,
                lock: true,
                content: "<div class=\"dialog1 message-dlg\"><span style=\"font-family:微软雅黑;\"><img src=\"" + $.j_messager.defaults.success + "\">" + message + "</span></div>",
                btn: {
                    canle: {
                        val: "确定",
                        type: "orange",
                        click: function () {
                            if (func && func instanceof Function) {
                                func();
                            }
                            this.hide();
                            $.j_messager.waitCloseMask();
                        }
                    }
                }
            });
        },
        confirm: function (message, func) {
            var dialog = $.dialog({
                title: "提示",
                //width: 350,
                //height: 260,
                fixed: true,
                lock: true,
                content: "<div showMsg class=\"dialog1\"><span style=\"font-family:微软雅黑;\"><img src=\"" + $.j_messager.defaults.success + "\">" + message + "</span></div>",
                btn: {
                    ok: {
                        val: "确定",
                        type: "orange",
                        click: function () {
                            if (func && func instanceof Function) {
                                func();
                                this.hide();
                                $.j_messager.waitCloseMask();
                            }
                        }
                    },
                    canle: {
                        val: "取消",
                        //type: "orange",
                        click: function () {
                            this.hide();
                            $.j_messager.waitCloseMask();
                        }
                    }
                }
            });
        },
        alertOk: function (message, callback) {
            if ($.j_messager.defaults.waitsecond == 0) $.j_messager.defaults.waitsecond = 2000;
            var dialog = $.dialog({
                fixed: true,
                lock: true,
                title: false,
                time: $.j_messager.defaults.waitsecond,
                hide: function () {
                    $.j_messager.waitCloseMask();
                    if (callback && callback instanceof Function) {
                        callback();
                    }
                },
                content: "<div showMsg class=\"dialog1\" style=\"max-width:400px;\"><span><img src=\"" + $.j_messager.defaults.success + "\">" + message + "</span></div>"
            });
        },
        alertError: function (message, callback) {
            if ($.j_messager.defaults.waitsecond == 0) $.j_messager.defaults.waitsecond = 2000;
            var dialog = $.dialog({
                fixed: true,
                lock: true,
                title: false,
                time: $.j_messager.defaults.waitsecond,
                hide: function () {
                    //$.j_messager.waitCloseMask();
                    if (callback && callback instanceof Function) {
                        callback();
                    }
                },
                content: "<div showMsg class=\"dialog1\"><span><img src=\"" + $.j_messager.defaults.failure + "\">" + message + "</span></div>"
            });
        },
        alertTip: function (message, callback) {
            if ($.j_messager.defaults.waitsecond == 0) $.j_messager.defaults.waitsecond = 2000;
            var dialog = $.dialog({
                fixed: true,
                lock: true,
                title: false,
                time: $.j_messager.defaults.waitsecond,
                hide: function () {
                    //$.j_messager.waitCloseMask();
                    if (callback && callback instanceof Function) {
                        callback();
                    }
                },
                content: "<div showMsg class=\"dialog1\"><span><img src=\"" + $.j_messager.defaults.remind + "\">" + message + "</span></div>"
            });
        }
    }

})(jQuery);

//多级联动插件
//by Jiangxp
//@2015.7.7
; (function ($) {
    var isInit = false;

    function bindOptions(e, list) {
        var template = "<option value=\"{0}\" mark=\"{3}\" {2}>{1}</option>";
        var html = "";
        $.each(list, function (index, item) {
            html += template.replace("{0}", item.Value).replace("{1}", item.Text).replace("{3}", item.Mark);
            var selectedVal = e.attr("chain-val");
            if (isInit && selectedVal == item.Value) {
                html = html.replace("{2}", "selected=\"selected\"");
            } else {
                html = html.replace("{2}", "");
            }
        });
        e.find("option:gt(0)").each(function () { $(this).remove() });
        e.append(html);
    }

    function loadData(e, exposeVal) {
        var url = e.attr("chain-url");
        var pid = (exposeVal != undefined && exposeVal != "") ? exposeVal : e.attr("chain-pid");
        var link = url + (url.indexOf("?") > -1 ? "" : "?") + "&pid=" + pid;
        $.getJSON(link, {}, function (data) {
            bindOptions(e, data);
        });
    }

    function reloadNext(e) {
        isInit = false;
        if (e.val() == "") {
            var $temp = e;
            while (true) {
                var $temp = $temp.next("select");
                if ($temp.length == 0) break;
                $temp.find("option:gt(0)").each(function () { $(this).remove() });
            }
        } else {
            var eNext = e.next("select");
            if (eNext.length != 0)
                loadData(eNext, e.val());
        }
    }

    $.chain = {
        init: function (group) {
            isInit = true;
            $("[chain-group=\"" + group + "\"]").change(function () { reloadNext($(this)); });
            var i = 1;
            $("[chain-group=\"" + group + "\"]").each(function () {
                if (!(i > 1 && ($(this).attr("chain-pid") == undefined || $(this).attr("chain-pid") == "")))
                    loadData($(this));
                i++;
            });
        }
    };

})(jQuery);

//多级联动2
//by Jiangxp
//@2015.7.7
; (function ($) {

    function bindOptions(e, list, firstload, callback) {
        var template = "<option value=\"{0}\" mark=\"{3}\" {2}>{1}</option>";
        var html = "";
        $.each(list, function (index, item) {
            html += template.replace("{0}", item.Value).replace("{1}", item.Text).replace("{3}", item.Mark);
            var selectedVal = e.attr("chain-val");
            if (firstload == true && selectedVal == item.Value) {
                html = html.replace("{2}", "selected=\"selected\"");
            } else {
                html = html.replace("{2}", "");
            }
        });
        e.find("option:gt(0)").each(function () { $(this).remove() });
        e.append(html);
        if (callback != undefined)
            callback();
    }

    function loadData(e, exposeVal, firstload, callback) {
        var url = e.attr("chain-url");
        var pid = (exposeVal != undefined && exposeVal != "") ? exposeVal : e.attr("chain-pid");
        var link = url + (url.indexOf("?") > -1 ? "" : "?") + "&pid=" + pid;
        $.getJSON(link, {}, function (data) {
            bindOptions(e, data, firstload, callback);
        });
    }

    function reloadNext(e, func2) {
        if (func2 != undefined) func2();
        if (e.val() == "") {
            var $temp = e;
            while (true) {
                var $temp = $temp.next("select");
                if ($temp.length == 0) break;
                $temp.find("option:gt(0)").each(function () { $(this).remove() });
            }
        } else {
            var eNext = e.next("select");
            if (eNext.length != 0)
                loadData(eNext, e.val(), false, undefined);
        }
    }

    $.fn.extend({
        chain: function (func,func2) {
            var group = $(this).selector;
            $("[chain-group=\"" + group + "\"]").change(function () { reloadNext($(this), func2); });
            var i = 1;
            $("[chain-group=\"" + group + "\"]").each(function () {
                if (!(i > 1 && ($(this).attr("chain-pid") == undefined || $(this).attr("chain-pid") == "")))
                    loadData($(this), "", true, func);
                i++;
            });
        }
    });

})(jQuery);

; (function ($) {
    $.common = {
        //ajax：postUrl 提交地址,backUrl 成功返回地址
        saveData: function (postUrl, backUrl,btn) {
            var result = true;
            //参数校验必填项 must='True'(注意True首字母大写)
            $("[must='True']").each(function () {
                var vthis = $(this);
                if (vthis.val().trim() == "") {
                    $(this).focus();
                    return result = false;
                }
            });
            if (!result) {
                return false;
            }

            var vparams = [];
            $(".submitkey").each(function () {
                if ($(this).attr("type") == "checkbox") {
                    var ids = [];
                    $("[name='" + $(this).attr("name") + "']:checked").each(function () { ids.push($(this).val()); });
                    vparams.push('"' + $(this).attr("name") + '"' + ':' + '"' + ids + '"');
                }
                else {
                    vparams.push('"' + $(this).attr("name") + '"' + ':' + '"' + $(this).val().trim() + '"');
                }
            });
            
            //转换json
            var params = $.parseJSON("{" + vparams.toString() + "}");
            var url = postUrl;
            var dataType = "json";
            $.ajax({
                data: params,
                dataType: dataType,
                url: url,
                type: "post",
                async:false,
                success: function (data) {
                    if (data.success) {
                        $.j_messager.alert(data.message, function () {
                            if (backUrl == "")
                                window.location.reload();
                            else
                                window.location.href = backUrl;
                        });
                    }
                    else {
                        $.j_messager.alertError(data.message);
                        $("#" + btn).show();
                        $("#" + btn + "2").hide();
                    }
                },
                beforeSend: function (XHR) {
                    $("#" + btn).hide();
                    $("#" + btn + "2").show();
                },
                complete: function (XHR, TS) {
                    //$("#" + btn).show();
                    //$("#" + btn + "2").hide();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#" + btn).show();
                    $("#" + btn + "2").hide();
                }
            });
        }
    }    

})(jQuery);

/**
 * 生成错误信息
 * @param 错误信息: [{PropertyName:"",ErrorMessage:""}] 
 */
function GenerateErrorMessage(errors) {
    $.each(errors, function (index, item) {
        $("[data-valmsg-for=\"" + item.PropertyName + "\"]").html(item.ErrorMessage);
    });
}

/**
 * 异步提交表单处理成功时，触发事件
 * @param {} 服务器返回的JSON信息
 */
function OnFormSuccess(data) {
    if (data.success) {
        location.href = data.attr.url;
    } else {
        GenerateErrorMessage(data.attr);
    }
}

//初始化select联动 By Yaolp @2015-06-29
function InitChainedSelect() {
    $("select").find("option[value!='']").each(function () {
        var txt = $(this).html();
        var arr = txt.split('|#|');
        if (arr.length == 2) {
            $(this).html(arr[0]);
            $(this).addClass(arr[1]);
        }
    });

    $("select[chained]").each(function () {
        var parentId = $(this).attr("chained");
        $(this).chained("#" + parentId);
    });
}

/**
 * 
 *异步提交表单处理成功时，触发事件
 * @returns {success,message,url} 服务器返回的JSON信息
 */
function OnSuccess(date) {
    if (date.success)
        if (date.url == "")
            $.j_messager.alertOk(date.message, function () {
                location.reload();
            });
        else
            $.j_messager.alertOk(date.message, function () {
                location.href = date.url;
            });
    else
        $.j_messager.alertError(date.message);

}

/**
 * 初始化手机验证码获取事件
 */
function initMobileValidateCodeEvent(url) {
    $("#btn-getmodilecode").click(function() {
        // 检验手机号码是否正确
        var mobile = $("#Mobile").val();
        if (mobile == "") {
            GenerateErrorMessage([{ ErrorMessage: "请输入手机号码", PropertyName: "Mobile" }]);
            return;
        }
        // 检验验证码是否正确
        var validateCode = $("#ValidateCode").val();
        if (validateCode == "") {
            GenerateErrorMessage([{ ErrorMessage: "请先输入验证码", PropertyName: "ValidateCode" }]);
            return;
        }
        var config = $.global.mobileValidateConfig;
        var element = $(this);
        if (config.isEnable) {
            $.post(url, { Mobile: $("#Mobile").val(), validateCode: $("#ValidateCode").val() }, function(data) {
                if (data != "") {
                    GenerateErrorMessage([{ ErrorMessage: data.ErrorMessage, PropertyName: data.PropertyName }]);
                    $(".imgcode").click();
                } else {
                    element.addClass("get-fos");
                    $(".send-msg").removeClass("hide");
                    config.interval = setInterval(generateMobileValidateWaitSeconds, 1000);
                    config.isEnable = false;
                }
            });
        }
    });
}

/**
 * 生成验证码读秒时间
 */
function generateMobileValidateWaitSeconds() {
    $.global.mobileValidateConfig.maxSeconds--;
    //$("#btn-getmodilecode").html($.global.mobileValidateConfig.maxSeconds + "秒后可重新获取");    
    $("#btn-getmodilecode").html("免费获取验证码(<em>" + $.global.mobileValidateConfig.maxSeconds + "</em>秒)");
    if ($.global.mobileValidateConfig.maxSeconds == 0) {
        clearInterval($.global.mobileValidateConfig.interval);
        $.global.mobileValidateConfig.maxSeconds = 90;
        $.global.mobileValidateConfig.isEnable = true;
        $("#btn-getmodilecode").removeClass("get-fos");
        $("#btn-getmodilecode").html("免费获取验证码");
    }
}

/*
    结束验证码读秒效果
*/
function stopMobileValidateWaitSeconds() {
    clearInterval($.global.mobileValidateConfig.interval);
    $.global.mobileValidateConfig.maxSeconds = 90;
    $.global.mobileValidateConfig.isEnable = true;
    $("#btn-getmodilecode").removeClass("get-fos");
    $("#btn-getmodilecode").html("免费获取验证码");
}

/**
 * 初始化验证码事件
 * @param {} selector :选择器，例如: #imgcode, .imgcode
 * @returns {} 
 */
function initValidateCodeEvent(selector, type) {
    $(selector).click(function () {
        this.src = "/Common/GetValidateCode?type=" + type + "&time=" + (new Date()).getTime();
    });
}

//异步表单开始处理
function OnBegin() {
    //  $.j_messager.openMask();
    $("body").showLoading();
}

//异步表单结束处理
function OnComplete() {
    //    $.j_messager.closeMask();
    $("body").hideLoading();
}

//Ajax，全局注册
function ajaxGlobalRegister() {
    $.ajaxSetup({
        cache: false,
        traditional: true,
        beforeSend: function (jqXHR) {
            $.j_messager.openMask();
        },
        complete: function (jqXHR, textStatus) {
            $.j_messager.closeMask();
        }
    });
}

//是否已登录
function isLogined() {
    var state = $.ajax({
        url: '/Common/IsLogined',
        async: false,
        cache: false,
        dataType: 'json'
    }).responseText;
    return $.parseJSON(state).success;
}

// 委托发布，表单成功回调方法
function SaveEntrustInfoSuccess(data) {
    if (data.success) {
        $("#EntrustContent").val("");
        $.j_messager.tipCustom($.global.entrustCaiGouTip, 400, 270);
    } else {
        if (data.attr != null && data.attr.url != undefined) {
            $.j_messager.alert(data.message, function () { location.href = data.attr.url; });
        } else {
            $.j_messager.alert(data.message);
        }
    }
}

var fixedTop = $(window).height() / 3 - $(".fixed-top").height() / 3 + $(window).scrollTop();

// 供货弹出框显示
function showSupplyDialog() {
    var bodyW = $("body").width();
    var bodyH = $("body").height();
    var fixedTop = $(window).height() / 3 - $(".fixed-top").height() / 3 + $(window).scrollTop();
    $(".coverWin").css({ "width": bodyW, "height": bodyH });
    $(".fixed-top").css({ "top": fixedTop });
}

// 供货回调函数
function SaveSuppyInfoSuccess(data) {
    if (data.success) {
        $.j_messager.tipCustom($.global.entrustCaiGouTip, 400, 270);
        $("#content").val("");
        $(".coverWin").hide();
    } else {
        if (data.attr != null && data.attr.url != undefined) {
            $.j_messager.alert(data.message, function() { location.href = data.attr.url; });
        } else {
            $.j_messager.alert(data.message);
        }
    }
}

// 供货弹出框初始化
function initSupplyDialog() {
    /*监听滚动*/
    $(window).scroll(function () {
        /*监听滚动设置弹窗位置*/
        var fixedTop = $(window).height() / 3 - $(".fixed-top").height() / 3 + $(window).scrollTop();
        $(".fixed-top").css({ "top": fixedTop });
    });
    $(window).on("resize", function () {
        showSupplyDialog();
    });
    /*点击弹窗*/
    $(".showCoverWin").on("click", function () {
        if (isLogined() == false) {
            $.j_messager.alert("请您登录后进行操作", function() { location.href = "/account/login"; });
        } else {
            var caigouId = $(this).attr("caigouid");
            $.ajax({
                url: "/GoodsCaiGou/GetCustomerSupplyDialogInfo?id=" + caigouId,
                success: function(data) {

                    $(".to-baojia .tit").html("");
                    $(".to-baojia .cont").html("");
                    $(".to-baojia #dlg-supply-caigouId").val("");
                    $(".to-baojia #dlg-supply-content").val("");
                    if (data.attr.company != undefined && data.attr.company != "")
                        $(".to-baojia .com").html("<i class=\"iconfont\">&#xf0043;</i>" + "采购方：" + data.attr.company).show();
                    else
                        $(".to-baojia .com").hide();

                    if (data.attr.name != undefined && data.attr.name != "")
                        $(".to-baojia .name").html("<i class=\"iconfont\">&#xf012d;</i>" + data.attr.name).show();
                    else
                        $(".to-baojia .name").hide();

                    if (data.attr.mobile != undefined && data.attr.mobile != "")
                        $(".to-baojia .phone").html("<i class=\"iconfont\">&#xf00a2;</i>" + data.attr.mobile).show();
                    else
                        $(".to-baojia .phone").hide();

                    if (data.attr.ton != undefined && data.attr.ton != "")
                        $(".to-baojia .dunshu").html("<i class=\"iconfont\">&#xf0178;</i>" + data.attr.ton + "吨").show();
                    else
                        $(".to-baojia .dunshu").hide();

                    if (data.attr.validTime != undefined && data.attr.validTime != "")
                        $(".to-baojia .jttime").html("<i class=\"iconfont\">&#xf006a;</i>" + data.attr.validTime).show();
                    else
                        $(".to-baojia .jttime").hide();

                    $(".to-baojia .momey").html("<i class=\"iconfont\">&#xf0280;</i><span class=\"prize\">" + (data.attr.momey == 0 ? "待议" : data.attr.momey + "元/吨") + "</span>");
                    $(".to-baojia .linght").html(data.attr.jgd);
                    if (data.attr.zhibiao != null) {
                        $.each(data.attr.zhibiao.fields, function(index, item) {
                            $(".to-baojia .tit").append("<span style=\"width:" + data.attr.zhibiao.widths[index] + "px\">" + item + "</span>");
                        });
                        $.each(data.attr.zhibiao.values, function(index, item) {
                            $(".to-baojia .cont").append("<span style=\"width:" + data.attr.zhibiao.widths[index] + "px\">" + item + "</span>");
                        });
                    }
                    showSupplyDialog();
                    $(".to-baojia #dlg-supply-caigouId").val(caigouId);
                    $(".coverWin").show();
                }
            });
        }
    });
    /*关闭弹窗*/
    $(".closeCoverWin").on("click", function () {
        $(".coverWin").hide();
    });    
}

//最近成交滚动列表
var latestSaleScrollPlugin = (function ($) {

    function showTitle(obj) {
        $('<div id="tip_box2"></div>').appendTo(document.body);
        $(obj).mousemove(function (ev) {
            var str = $(obj).children(".info").attr("data-title");
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
    }

    function init() {
        $.ajax({
            url: "/GoodsCaiGou/GetTop60FinishedList",
            type: "get",
            dataType: 'html',
            cache: false,
            success: function (data) {
                $(".m-r").append(data);
                $(".caigouxinxi-wrap").kxbdMarquee({ direction: "up", loop: -1, isEqual: true, scrollAmount: 1, scrollDelay: 20 });
                $(".caigouxinxi-wrap .caigouxinxi-ul li").each(function() {
                    $(this).hover(function() {
                        showTitle(this);
                    });
                });
            }
        });
    }

    return {
        init: init
    };
})(jQuery);

$(function () {
    var isIE = !!window.ActiveXObject;
    var isIE6 = isIE && !window.XMLHttpRequest;
    var isIE8 = isIE && !!document.documentMode;
    var isIE7 = isIE && !isIE6 && !isIE8;
    if (isIE) {
        if (isIE6) {
            $('.chromeTip').show();
        } else if (isIE8) {
            $('.chromeTip').show();
        } else if (isIE7) {
            $('.chromeTip').show();
        }
    }
    $('#chromeTipCloseBtn').click(function () {
        $('.chromeTip').hide();
    });
    //10s后自动关闭
    setTimeout(function () {
        $('.chromeTip').hide();
    }, 10000);
    InitChainedSelect();
});

//自定义下拉菜单
//by Heyc @20151230
; (function ($) {
    $.dropdown = {
        //文本框ID，数据
        show: function (menuInput, data) {
            var input = $(menuInput);
            var menuClass = input.attr("menuClass");
            var menu = "." + menuClass;

            var position = input.offset();
            var width = input.outerWidth();
            var top = position.top + input.outerHeight();
            var left = position.left;

            var htmlParent = '<div class="' + menuClass + '" style="top:' + top + 'px;left:' + left + 'px;width:' + width + 'px;">{0}</div>';
            var html = '';
            if (data != null && data.length > 0) {
                html = '<ul>';
                for (var i = 0; i < data.length; i++) {
                    html += '<li>' + data[i].Name + '</li>';
                }
                html += '</ul>';
            }
            if ($(menu) == undefined || $(menu).length == 0) {
                $("body").append($.common.format(htmlParent, html));
                $(menu).slideDown();
            } else {
                $(menu).empty().html(html).slideDown();
            }

            $(menu).on("mouseleave", function () {
                $("body").bind("click", function () {
                    //var current = $(menu).find("li.current");
                    //if (current != null && current.text().trim() != "")
                    //    $(input).val(current.text());
                    $(menu).hide();
                    $("body").unbind("click");
                });
            });
            $(menu + " li").live({
                click: function () {
                    $(input).val($(this).text());
                    $(menu).hide();
                },
                mousemove: function () {
                    $(this).removeClass().addClass("current");
                },
                mouseout: function () {
                    $(this).removeClass();
                }
            });
        },
    };
    $.common = {
        format: function (source, params) {
            if (arguments.length == 1)
                return function () {
                    var args = $.makeArray(arguments);
                    args.unshift(source);
                    return $.format.apply(this, args);
                };
            if (arguments.length > 2 && params.constructor != Array) {
                params = $.makeArray(arguments).slice(1);
            }
            if (params.constructor != Array) {
                params = [params];
            }
            $.each(params, function (i, n) {
                source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
            });
            return source;
        }
    };
})(jQuery);

