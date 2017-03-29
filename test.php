<?php 
	header("Content-type:text/html;charset=utf-8");

	if ($con = mysqli_connect('localhost','root','')) {
		# code...
		echo "连接成功\n";
	} else {
		# code...
		echo "连接失败";
	}
	if (function_exists('mysql_connect')) {
		# code...
		echo "Mysql扩展已经安装\n";
	} else {
		# code...
		echo "安装失败";
	}
	
	$link = mysql_connect('localhost','root','')or die("数据库连接失败");
	mysql_select_db('dm');
	mysql_query("set names 'utf8");
	$result=mysql_query('select*from zzz 0,30');
	print $result
 ?>