<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add</title>
</head>
<body>
	<div>
		<form action="" method="post">
			{!!csrf_field()!!}
			<p>供货单号:<input type="text" name="number"></p>
			<p>发布时间:<input type="text" name="pubtime"></p>
			<p>产品描述:<input type="text" name="describe"></p>
			<p>交货地点:<input type="text" name="place"></p>
			<p>跟踪专员:<input type="text" name="sid"></p>
			<p><input type="submit" value="open the door!"></p>
		</form>
	</div>
</body>
</html>