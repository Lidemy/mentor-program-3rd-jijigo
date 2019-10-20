<?php
	require('conn.php');

  $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT id from dbj_users where username = '$username' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		$user_id = $result->fetch_assoc()['id'];

		// 設定一個 24 小時之後會過期的 Cookie
		setcookie("user_id", $user_id, time()+3600*24);

		header('Location: index.php');
	} else {
		echo 'username 或 password 輸入錯誤';
	}
?>