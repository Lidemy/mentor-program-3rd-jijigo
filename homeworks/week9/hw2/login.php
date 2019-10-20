<?php
require_once('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Forums</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
		<h1>留言板</h1>

		<a href="./register.php">前往註冊</a>
		<h2>登入</h2>
		<form action="./handleLogin.php" method="POST">
			<div>
				帳號
				<input type="text" name="username">
			</div>
			<div>
				密碼
				<input type="password" name="password">
			</div>
			<input type="submit" value="送出">
		</form>
	</div>
</body>
</html>