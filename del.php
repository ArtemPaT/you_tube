<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '38urok');
	mysqli_query($con_bd, "DELETE users, videos FROM users INNER JOIN videos ON users.id = videos.users_id WHERE users.id = {$_GET["del_id"]}");
	header("Location: index.php");
 ?>