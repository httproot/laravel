<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提交栏目</title>
</head>
<body>
	<form action="" method="post">
		{!!csrf_field()!!}
		<input type="text" name="title" value="">
		<input type="submit" value="栏目提交">
	</form>
</body>
</html>