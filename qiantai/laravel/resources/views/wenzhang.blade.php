<html>
	<head>
		<title></title>	
	</head>
	<body>
		<form action="" method="post">
			{!!csrf_field()!!}
			<!-- 犯过的错误  option里面不需要name属性 -->
			<select name="cat_id">
					@foreach($cat as $c)
					<option value="{{$c->cat_id}}">{{$c->title}}</option>
					@endforeach
			</select>
			<p>文章先后等级<input name="sort_id" type="text" value="" ></p>
			<p>文章标题<input name="title" type="text" value="" ></p>
			<p>文章内容<input name="content" type="text" value="" ></p>
			<p>点击次数<input name="click" type="text" value="" ></p>
			<p>文章关键字<input name="keys" type="text" value="" ></p>
			<p>文章描述<input name="desction" type="text" value="" ></p>
			<p>打开类型<input name="opentype" type="text" value="" ></p>
			<p>打开地址<input name="link" type="text" value="" ></p>
			<!-- <p>添加时间<input name="addtime" type="text" value="" ></p> -->
			<input type="submit" value="提交">
		</form>
	</body>
</html>