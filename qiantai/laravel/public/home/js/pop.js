/*设置弹窗*/
function setCoverWin(){
    var bodyW = $("body").width();
    var bodyH = $("body").height();
    var fixedTop = $(window).height()/5 - $(".fixed-top").height()/5 + $(window).scrollTop();
    $(".coverWin").css({"width":bodyW,"height":bodyH});
    $(".fixed-top").css({"top":fixedTop});
}
setCoverWin();
$(window).on('resize',function(){
    setCoverWin();
});