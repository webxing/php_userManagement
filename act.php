<?php 
	include 'config.inc.php';

	$act = $_GET["act"];

	if($act == 'delete'){
		$Id = $_GET["Id"];
		$sql = "delete from t1 where Id=?";
		$smt = $pdo->prepare($sql);
		$smt->bindValue(1,$Id);
		if($smt->execute()){
			echo "<script>location='index.php'</script>";
		}
	}
	
	if($act == 'insert'){
		$Name = $_POST["Name"];
		$Pwd = $_POST["Pwd"];
		$sql = "insert into t1(Name,Pwd) values('{$Name}','{$Pwd}')";
		$smt = $pdo->prepare($sql);
		if($smt->execute()){
			echo "<script>location='index.php'</script>";
		}
	}

	if($act == 'update'){
		$Id = $_GET["Id"];
		$Name = $_POST["Name"];
		$Pwd = $_POST["Pwd"];
		$sql = "update t1 set Name='{$Name}',Pwd='{$Pwd}' where Id={$Id}";
		$smt = $pdo->prepare($sql);
		if($smt->execute()){
			echo "<script>location='index.php'</script>";
		}
	}

	
 ?>
