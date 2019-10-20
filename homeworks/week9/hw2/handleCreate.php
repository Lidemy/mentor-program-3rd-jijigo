<?php

require_once('conn.php');

$user_id = $_POST['user_id'];
$content = $_POST['content'];

if (empty($user_id) || empty($content)) {
	die('請確認欄位都有填寫');
}

$sql = "INSERT INTO dbj_comments(user_id, content)
	values('$user_id', '$content')";

	echo $sql;

if($conn->query($sql)) {
	echo '新增成功!';
	header('Location: index.php');
} else {
	echo $conn->error;
}
?>