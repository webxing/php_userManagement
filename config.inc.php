<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=data','root','root');
	$pdo->exec('set names utf8');
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); #设置默认结果集模式为关联数组
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);#修改报错模式

 ?>