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

		<?php
			require_once('conn.php');

			if(!isset($_COOKIE["user_id"])) {
				echo "尚未登入";
				?>
				<a href="./login.php">前往登入</a>
				<a href="./register.php">前往註冊</a>
				<?php
			} else {
				$user_id = $_COOKIE["user_id"];
				$sql = "SELECT * from dbj_users where id = $user_id";
				$result = $conn->query($sql);
				$user = $result->fetch_assoc();
				echo 'Welcome, ' . $user['nickname'];
				echo "<a href='./handleLogout.php'>登出</a>";
				?>
			<div class="create">
				<h2>我要留言</h2>
				<form action="./handleCreate.php" method="POST">
					<p><?php echo $user['nickname'] ?></p>
					<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
					<textarea name="content" id="" cols="30" rows="10"></textarea>
					<input type="submit" value="送出">
				</form>
			</div>
			<?php
			}
		?>

		<ul class="list">
			<?php
			$sql = "SELECT *
			 from dbj_comments LEFT JOIN dbj_users
			 on dbj_comments.user_id = dbj_users.id
			 order by created_at desc limit 50";

			$result = $conn->query($sql);

			if ($result) {
				while($comment = $result->fetch_assoc()) {
					?>
				<li class="message">
					<h3 class="message__name"><?php echo $comment['nickname'] ?></h3>
					<small class="message__createdat"><?php echo $comment['created_at'] ?></small>
					<div class="message__content">
						<?php echo $comment['content'] ?>
					</div>
				</li>
			<?php
				}
			}
			else {
				echo '目前沒有人留言';
			}
			?>
		</ul>
	</div>

</body>
</html>