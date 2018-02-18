<?php 
	include 'config.inc.php';

	$len = 3; //每页三条
	$page = $_GET["page"] ? $_GET["page"] : 1;//当前页

	$sqlTotal = "select count(Id) from t1";
	$smtTotal = $pdo->prepare($sqlTotal);
	$smtTotal->execute();
	$tot = $smtTotal->fetchColumn();	//总记录数
	$pages = ceil($tot/$len);	//总页数

	$prev = $page==1 ? 1 : $page-1; //上一页
	$next = $page==$pages ? $pages : $page+1;	//下一页

	$offset = ($page-1)*$len;	//limit起点

	$sql = "select * from t1 order by Id desc limit {$offset},{$len}";

	$smt = $pdo->prepare($sql);
	$smt->execute();
	$rows =  $smt->fetchAll();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>pdo</title>
	<meta charset="utf-8">
</head>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<body>
	<div class="container">
		<h1 class="page-header">
			<a href="" class="btn btn-warning">查看用户</a>
			<a href="add.php" class="btn btn-primary">添加用户</a>
		</h1>
		<table class="table table-striped table-bordered">
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
				<th>修改</th>
				<th>删除</th>
			</tr>

			<?php 
				foreach ($rows as $key => $value) {
					echo '<tr>';
					echo "<td>{$value['Id']}</td>";
					echo "<td>{$value['Name']}</td>";
					echo "<td>{$value['Pwd']}</td>";
					echo "<td><a href='update.php?Id={$value['Id']}' class='btn btn-success'>修改</a></td>";
					echo "<td><a href='act.php?act=delete&Id={$value['Id']}' class='btn btn-danger delete'>删除</a></td>";
					echo '</tr>';
				}
			?>
		</table>

		<nav>
		  <ul class="pager">
		    <?php 
		    	if($page==1){
		    		echo "<li class='previous disabled'><a href='javascript:;'><span >&larr;</span> 上一页</a></li>";
		    	}else{
		    		echo "<li class='previous'><a href='index.php?{$prev}'><span >&larr;</span> 上一页</a></li>";
		    	}

		    	if($page==$pages){
		    		echo "<li class='next disabled'><a href='javascript:;'>下一页 <span>&rarr;</span></a></li>";
		    	}else{
		    		echo "<li class='next'><a href='index.php?page={$next}'>下一页 <span>&rarr;</span></a></li>";
		    	}
		     ?>
		    
		  </ul>
		</nav>
	</div>
</body>
<script type="text/javascript">
	$('.delete').click(function(){
		cf = confirm('您确认删除么？');
		if(!cf){
			return false;
		}
	})
</script>
</html>
