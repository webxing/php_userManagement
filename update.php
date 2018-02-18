<?php	
	include 'config.inc.php';
	$Id = $_GET["Id"];

	$sql = "select * from t1 where Id=?";
	$smt = $pdo->prepare($sql);
	$smt->bindValue(1,$Id);
	$smt->execute();

	$row = $smt->fetch();

?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<meta charset="utf-8">
</head>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<body>
	<div class="container">
		<h1 class="page-header">
			<a href="index.php" class="btn btn-warning">查看用户</a>
			<a href="" class="btn btn-primary">修改用户</a>
		</h1>
		<form action="act.php?act=update&Id=<?php echo $Id;?>" method="post">
			<div class="form-group">
				<label>新用户名:</label>
				<input type="text" class="form-control" name="Name" value=<?php echo "{$row['Name']}"; ?> 
				>
			</div>
			<div class="form-group">
				<label>新密码:</label>
				<input type="text" class="form-control" name="Pwd" value=
				<?php echo "{$row['Pwd']}"; ?>
				>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
				<input type="reset" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>
</html>

