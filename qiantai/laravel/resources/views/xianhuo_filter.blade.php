<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
     $(function(){
       <?php
          if($_GET){
            echo  'var obj='.json_encode($_GET).';';
		    
          }
       ?>
      if(typeof(obj)!='undefined'){
          for(k in obj){
            $("#"+k).val(obj[k]);
            $("a["+k+"="+obj[k]+"]").parent().addClass("in").siblings().removeClass("in");
          }
      }
     })
    </script>

	<script>
  
	</script>
    <script>
        function Filter(a,b){
          var $ = function(e){return document.getElementById(e);}
          var ipts = $('filterForm').getElementsByTagName('input'),result=[];
          for(var i=0,l=ipts.length;i<l;i++){
          if(ipts[i].getAttribute('to')=='filter'){
          result.push(ipts[i]);
          }
          }
          if($(a)){
          $(a).value = b;
          for(var j=0,len=result.length;j<len;j++){
          
            if(result[j].value=='' || result[j].value=='0'){
            result[j].parentNode.removeChild(result[j]);
            }
          }
            document.forms['filterForm'].submit();
          }
          return false;
          } 
    </script>
  </head>
  <style>


   .mtp30{margin-top: 80px;}
   .warning{background: #2497e8;}
   .img30{width: 30px;height:30px;}
   .img20{width: 20px;height:20px;}
   .listsearch{border:1px solid #2497e8;border-top: 2px solid #2497e8;height:200px;}
   .border-color{border-color: #2497e8;}
   .red{color: #2497e8;font-family: '"Times New Roman", Times, serif';font-weight: 24px;}
   .searchbody{line-height: 35px;margin-left: 15px;}
   .row a{color: #444;text-decoration: none;}
   .row a:hover{color: #2497e8}
   .row li{padding-right: 5px;padding-left: 10px;}
   .in,.in a{background: #2497e8;color: #fff;border-radius: 4px;}
   .in a:hover{color: #fff}
  </style>
  <body>

<div class="container mtp30">
   <form id="filterForm" name="form1" method="get" action="{{url('xianhuo')}}">
      <input id="product" type="hidden" value="" name="product" to="filter">
      <input id="postion" type="hidden" value="" name="postion" to="filter">
      <input id="price" type="hidden" value="" name="price" to="filter">
      <input id="ishost" type="hidden" value="" name="ishost" to="filter">
      <input id="place" type="hidden" value="" name="place" to="filter">
   <ul class="list-group">
     <li class="list-group-item border-color top-color">
     <div class="row">
     <div class="col-md-3">
       <h4 class='red'><span class="glyphicon glyphicon-map-marker  text-danger"></span> 分类</h4>
     </div>
     <div class="col-md-9">
        <ul class="nav  nav-pills nav-justified pull-left">
           <div class="row">
            <li class='col-xs-4 col-md-1 in'><a product="0" href="javascript:Filter('product','0');">不限</a></li>
            <li class='col-xs-4 col-md-1'><a product="1" href="javascript:Filter('product','1');">动力煤</a></li>
            <li class='col-xs-4 col-md-1'><a product="2" href="javascript:Filter('product','2');">炼焦煤</a></li>
            <li class='col-xs-4 col-md-1'><a product="3" href="javascript:Filter('product','3');">无烟煤</a></li>
            <li class='col-xs-4 col-md-1'><a product="4" href="javascript:Filter('product','4');">兰炭</a></li>
            <li class='col-xs-4 col-md-1'><a product="5" href="javascript:Filter('product','5');">生物燃料</a></li>
            </div>         
          </ul>
     </div>
     </div>
     </li>
     <li class="list-group-item border-color">
       <div class="row">
     <div class="col-md-3">
       <h4 class='red'><span class="glyphicon glyphicon-picture  text-primary"></span> 产地</h4>
     </div>
     <div class="col-md-9">
        <ul class="nav  nav-pills nav-justified pull-left">
           <div class="row">
            <li class='col-xs-4 col-md-1 in'><a href="javascript:Filter('postion','0');">不限</a></li>
            <li class='col-xs-4 col-md-1'><a postion='1' href="javascript:Filter('postion','1');"> 内蒙古</a></li>
            <li class='col-xs-4 col-md-1'><a postion='2' href="javascript:Filter('postion','2');">山西</a></li>
            <li class='col-xs-4 col-md-1'><a postion='3' href="javascript:Filter('postion','3');">陕西</a></li>
            <li class='col-xs-4 col-md-1'><a postion='4' href="javascript:Filter('postion','4');">河北</a></li>
            <li class='col-xs-4 col-md-1'><a postion='5' href="javascript:Filter('postion','5');">山东</a></li>
            <li class='col-xs-4 col-md-1'><a postion='6' href="javascript:Filter('postion','6');">朝鲜</a></li>
            <li class='col-xs-4 col-md-1'><a postion='7' href="javascript:Filter('postion','7');">安徽</a></li>
            <li class='col-xs-4 col-md-1'><a postion='8' href="javascript:Filter('postion','8');">河南</a></li>
            <li class='col-xs-4 col-md-1'><a postion='9' href="javascript:Filter('postion','9');">俄罗斯</a></li>
			<li class='col-xs-4 col-md-1'><a postion='10'href="javascript:Filter('postion','8');">黑龙江</a></li>
            <li class='col-xs-4 col-md-1'><a postion='11' href="javascript:Filter('postion','9');">吉林</a></li>
            </div>
           
          </ul>
     </div>
       
     </div>
     </li>
   
     <li class="list-group-item border-color">
       <div class="row">
        <div class="col-md-3">
         <h4 class='red'><span class="glyphicon glyphicon-dashboard  text-success"></span> 名企</h4>
        </div>
        <div class="col-md-9">
          <ul class="nav  nav-pills nav-justified pull-left">
             <div class="row">
              <li class='col-xs-4 col-md-1 in'><a ishost="0" href="javascript:Filter('ishost','0');">不限</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="1" href="javascript:Filter('ishost','1');">1日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="2" href="javascript:Filter('ishost','2');">2日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="3" href="javascript:Filter('ishost','3');">3日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="4" href="javascript:Filter('ishost','4');">4日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="5" href="javascript:Filter('ishost','5');">5日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="6" href="javascript:Filter('ishost','6');">6日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="7" href="javascript:Filter('ishost','7');">7日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="8" href="javascript:Filter('ishost','8');">8日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="9" href="javascript:Filter('ishost','8');">9日游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="10" href="javascript:Filter('ishost','10');">半月游</a></li>
              <li class='col-xs-4 col-md-1'><a ishost="11" href="javascript:Filter('ishost','11');">其他</a></li>
              </div>
            </ul>
        </div>
     </div>
     </li>
     <li class="list-group-item border-color">
       <div class="row">
        <div class="col-md-3">
         <h4 class='red'><span class="glyphicon glyphicon-calendar  text-warning"></span> 交割地</h4>
        </div>
        <div class="col-md-9">
          <ul class="nav  nav-pills nav-justified pull-left">
             <div class="row">
              <li class='col-xs-4 col-md-1 in'><a place="0" href="javascript:Filter('place','0');">不限</a></li>
              <li class='col-xs-4 col-md-1'><a place="1" href="javascript:Filter('place','1');">华东</a></li>
              <li class='col-xs-4 col-md-1'><a place="2" href="javascript:Filter('place','2');">华北</a></li>
              <li class='col-xs-4 col-md-1'><a place="3" href="javascript:Filter('place','3');">西北</a></li>
              <li class='col-xs-4 col-md-1'><a place="4"href="javascript:Filter('place','4');">西南</a></li>
              <li class='col-xs-4 col-md-1'><a place="5" href="javascript:Filter('place','5');">华中</a></li>
			   <li class='col-xs-4 col-md-1'><a place="6"href="javascript:Filter('place','6');">东北</a></li>
              <li class='col-xs-4 col-md-1'><a place="7" href="javascript:Filter('place','7');">华南</a></li>
			   <li class='col-xs-4 col-md-1'><a place="8"href="javascript:Filter('place','8');">国外</a></li>
              </div>
            </ul>
        </div>
     </div>
     </li>
   </ul>
   </form>
</div>

  </body>
  </html>

