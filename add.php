<!DOCTYPE html>
<html>
<head>
	<title>add</title>
	<meta charset="utf-8">
</head>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<body>
	<div class="container">
		<h1 class="page-header">
			<a href="index.php" class="btn btn-warning">查看用户</a>
			<a href="" class="btn btn-primary">添加用户</a>
		</h1>
		<form action="act.php?act=insert" method="post">
			<div class="form-group">
				<label>用户名:</label>
				<input type="text" class="form-control" name="Name">
			</div>
			<div class="form-group">
				<label>密码:</label>
				<input type="text" class="form-control" name="Pwd">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
				<input type="reset" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>
</html>

