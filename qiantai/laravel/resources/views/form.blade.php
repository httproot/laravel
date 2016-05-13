<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<script src="{{url('style/js/jquery-1.8.2.min.js')}}"></script>
<body>
<form action="{{url('ajax')}}" method="POST">
{!! csrf_field() !!}
<input type="text" name="text1" value="1" />
<input type="submit" value="提交"/>
</form>
</body>
<script>

window.onload=function(){
      $.ajax({
   type: "POST",
   async: true,
   url: "http://www.zm.com/ajax",
   data:{Name:"sanmao",Password:"sanmaoword"},
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
   
   success: function(data){
    console.log('done');
   }
});

};

</script>
</html>