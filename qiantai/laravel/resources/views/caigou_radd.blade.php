<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>增加专员信息</title>
</head>
<body>
	<div>
		<form action="" method="post">
			{!!csrf_field()!!}
			<p>专员姓名:<input type="text" name="name"></p>
			<p>专员电话:<input type="text" name="mobile"></p>
			<p>QQ:<input type="text" name="qq"></p>
			<p>rank:<input type="text" name="rank"></p>
			<p><input type="submit" value="open the door!"></p>
		</form>
	</div>
</body>
</html>