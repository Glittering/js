<?php
header("content-type:text/html;charset=utf-8");
// 连接数据库
$con = @mysql_connect("localhost","root","") or die('mysql连接失败');
mysql_select_db('ww',$con);
mysql_query('set names utf8');
// 获取提交过来的内容
$user = $_POST['user'];
$pass = md5($_POST['pass']);
// 判断哪个ajax提交的
if(isset($_POST['checkuser'])){
	// 拼接sql比个执行sql
	$sql = "SELECT * FROM `xm_admin` WHERE `username` = '$user'";
	$result = mysql_query($sql);
	// 结果条数
	$rows = mysql_num_rows($result);
	// 如果查询到结果则返回0(用户名存在)
	if($rows){
		echo 0;
		die;
	}else{
		echo 1;
		die;
	}
}elseif(isset($_POST['checksub'])){
	$sql = "INSERT INTO `xm_admin`(`username`,`password`) VALUES('$user','$pass')";
	$result = mysql_query($sql);
	if($result && mysql_affected_rows() > 0){
		echo 1;
		die;
	}else{
		echo 0;
		die;
	}
}
