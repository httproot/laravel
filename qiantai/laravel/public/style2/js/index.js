$(function () {
    $('.aside .item-Menu').click(function () {
        $(this).addClass('active').siblings().removeClass("active");
        $('.view-list').show();
    })

    RegisterShippingSearchEvent();//海运运输搜索事件

    RegisterShippingPortEvent();

    RegisterLogisticsRequirementPopEvent();//物流需求弹窗事件

    RegisterGetMobileValidationCodeEvent();//获取手机验证码事件。

    RegisterSaveEvent();//注册提交事件，弹出窗口

    RegisterSimpleSaveEvent();//注册帮我询盘事件


    $("#txt_capacity,#txt_phone,#Phone,#txt_code,#Capacity").keypress(function (event) {
        var keyCode = event.which;
        if (keyCode >= 48 && keyCode <= 57)
            return true;
        else
            return false;
    });

});

function RegisterShippingSearchEvent() {
    $("#btn_shippingsearch").click(function () {

        var parameter = "";

        var shippingTonSel = $("#sel_shippington")
        var shippingTonKey = shippingTonSel.val();
        if (shippingTonKey != "-1") {
            parameter += "&" + shippingTonSel.data("searchgroupkey") + "=" + shippingTonKey;
        }

        var startdate = $("#txt_startdate").val();
        if ($.trim(startdate) != "") {
            parameter += "&start_date=" + startdate;
        }

        var enddate = $("#txt_enddate").val();
        if ($.trim(enddate) != "") {
            parameter += "&end_date=" + enddate;
        }

        var portName = $("#txt_portname").val();
        if ($.trim(portName) != "") {
            parameter += "&port_name=" + portName;
        }

        if (parameter.length != 0) {
            parameter = "?" + parameter.substr(1, parameter.length - 1);
            window.open("/transportcapacity/search" + parameter);
        }
        else {
            $.j_messager.alert("请输入搜索条件");
        }
    });
}

function RegisterShippingPortEvent() {
    var li = $("li.portname");
    var isFocusInPortNameTextBox = false;
    $("#txt_portname").keyup(function () {
        var value = this.value;
        var hasSelectedItem = false;
        li.each(function () {
            if ($(this).text().indexOf(value) == -1) {
                $(this).hide();
            }
            else {
                $(this).show();
                hasSelectedItem = true;
            }
        });

        if (!hasSelectedItem)//如果没有任何一项选中那么隐藏div
        {
            $("#div_portlist").hide();
        }
        else {
            $("#div_portlist").show();
        }

    }).focus(function () {
        $("#div_portlist").show();
        isFocusInPortNameTextBox = true;
    }).focusout(function () {
        isFocusInPortNameTextBox = false;
    })

    $(".portname").click(function () {
        $("#txt_portname").val($(this).text());
        $("#div_portlist").hide();
    });


    $(document.body).click(function () {
        if (!isFocusInPortNameTextBox) {
            $("#div_portlist").hide();
        }
    });
}

function RegisterLogisticsRequirementPopEvent() {
    //弹出物流需求窗口
    $(".showCoverWin").on("click", function () {
        setCoverWin();//这个方法在/scripts/pop.js 里面。

        var type = $(this).data("transporttype");
        $("#title").text(type == "3" ? "我要找船" : "我要找车");
        $("#TransportType").val(type);
        $(".coverWin").show();
    });

    //关闭物流需求窗口
    $(".closeCoverWin").on("click", function () {
        $(".coverWin").hide();
    });
}

function RegisterGetMobileValidationCodeEvent() {
    $("#btngetvalidationcode").click(function () {
        var phone = $.trim($("#Phone").val());

        if (phone == "") {
            $.j_messager.alert("请输入手机号码", function () { $("#Phone").focus(); });

            return false;
        } else if (phone.length != 11) {
            $.j_messager.alert("手机号码格式不对", function () { $("#Phone").focus(); })
            return false;
        }

        $("#btngetvalidationcode").get(0).setAttribute("disabled", true);

        $.post("/requirement/GetMobileCode", { mobile: phone }, function (d) {
            if (d.success) {
                time($("#btngetvalidationcode").get(0));
            }
            else {
                $.j_messager.alert(d.message)
                $("#btngetvalidationcode").get(0).removeAttribute("disabled");
            }
        });
    });
}

function RegisterSaveEvent() {
    $("#btnsubmit").click(function () {
        var result = ValidateSaveData();
        if (result.message != null) {
            $.j_messager.alert(result.message, function () {
                $("#" + result.focusElementId).focus();
            });
            return;
        }


        $.j_messager.confirm("你确定要提交吗？", function () {
            $.post("/requirement/save", result.data, function (response) {
                $.j_messager.alert(response.message, function () {
                    if (response.success) {
                        $("#popform").get(0).reset();
                        $(".coverWin").hide();
                    }
                });
            });
        });
    });
}

function RegisterSimpleSaveEvent() {
    $("#btnsimplesubmit").click(function () {
        var result = ValidateSimpleSaveData();
        if (result.message != null) {
            $.j_messager.alert(result.message, function () {
                $("#" + result.focusElementId).focus();
            });
            return;
        }

        $.j_messager.confirm("你确定要提交吗？", function () {
            $.post("/requirement/simplesave", result.data, function (response) {
                $.j_messager.alert(response.message, function () {
                    if (response.success) {
                        $("#simpleform").get(0).reset();
                    }
                });
            });
        });
       
    });
}

function ValidateSaveData() {
    var result = { message: null, data: {}, focusElementId: null };

    var phone = $.trim($("#Phone").val());
    if ($.trim($("#Phone").val()) == "") {
        result.message = "请填写手机号码";
        result.focusElementId = "Phone";
        return result;
    }

    if (isNaN(phone) || phone.length != 11) {
        result.message = "请正确填写手机号码";
        result.focusElementId = "Phone";
        return result;
    }

    var code = $.trim($("#txt_code").val());
    if (code == "") {
        result.message = "请填写手机验证码";
        result.focusElementId = "txt_code";
        return result;
    }

    if (isNaN(code)) {
        result.message = "请正确填写手机验证码";
        result.focusElementId = "txt_code";
        return result;
    }

    var startAddress = $.trim($("#StartAddress").val());
    if (startAddress == "") {
        result.message = "请填写起运地";
        result.focusElementId = "StartAddress";
        return result;
    }

    var arrivalAddress = $.trim($("#ArrivalAddress").val());
    if (arrivalAddress == "") {
        result.message = "请填写到达地";
        result.focusElementId = "ArrivalAddress";
        return result;
    }

    var linker = $.trim($("#Linker").val());
    if (linker == "") {
        result.message = "请填写联系人";
        result.focusElementId = "Linker";
        return result;
    }

    var capacity = $.trim($("#Capacity").val());
    if (capacity == "") {
        result.message = "请填写吨位";
        result.focusElementId = "Capacity";
        return result;
    }

    if (isNaN(capacity)) {
        result.message = "请正确填写吨位";
        result.focusElementId = "Capacity";
        return result;
    }

    result.data.Phone = phone;
    result.data.StartAddress = startAddress;
    result.data.ArrivalAddress = arrivalAddress;
    result.data.Linker = linker;
    result.data.Capacity = capacity;
    result.data.CargoName = $.trim($("#CargoName").val());
    result.data.Remark = $.trim($("#Remark").val());
    result.data.Code = code;
    result.data.TransportType = $("#TransportType").val();
    result.data.StartDate = $("#StartDate").val();
    result.data.CompanyName = $.trim($("#CompanyName").val());
    return result;
}

function ValidateSimpleSaveData() {
    var result = { message: null, data: {}, focusElementId: null };

    var phone = $.trim($("#txt_phone").val());
    if (phone == "") {
        result.message = "请填写手机号码";
        result.focusElementId = "txt_phone";
        return result;
    }

    if (isNaN(phone) || phone.length != 11) {
        result.message = "请正确填写手机号码";
        result.focusElementId = "txt_phone";
        return result;
    }


    var capacity = $.trim($("#txt_capacity").val());

    if (capacity != "" && isNaN(capacity)) {
        result.message = "请正确填写吨位";
        result.focusElementId = "txt_capacity";
        return result;
    }



    result.data.Phone = phone;
    result.data.Capacity = capacity;
    result.data.CargoName = $.trim($("#txt_cargoname").val());
    result.data.TransportType = $("#sel_transporttype").val();
    result.data.StartDate = $("#txt_date").val();
    return result;
}

var wait = 90;
function time(o) {
    if (wait == 0) {
        //o.removeAttribute("disabled");
        $(o).removeAttr("disabled");
        $(o).text("获取验证码");
        wait = 90;
    } else {
        //o.setAttribute("disabled", true);
        $(o).attr("disabled", true);
        $(o).text("重新发送(" + wait + ")");
        wait--;
        setTimeout(function () {
            time(o)
        }, 1000)
    }
}