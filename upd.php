<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '38urok');
	mysqli_query($con_bd, "UPDATE users SET name = '{$_GET['name']}', phone = '{$_GET['phone']}', email = '{$_GET['email']}'
		WHERE id = '{$_GET['id']}'");
	header("Location: home.php?id={$_GET['id']}");
 ?>