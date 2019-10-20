<?php
	require_once('conn.php');

	$nickname = $_POST['nickname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO dbj_users(`id`, `nickname`, `username`, `password`)
		values(NULL, '$ni｀ckname', '$username', '$password')";

	echo $sql;

	if($conn->query($sql)) {
		header('Location: login.php');
		echo '註冊成功!';
	} else {
		echo '註冊失敗!';
	}
?>