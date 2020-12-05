<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '38urok');
	$con_table = mysqli_query($con_bd, "SELECT * FROM users WHERE name = '{$_POST['username']}' AND password = '{$_POST['password']}'"); 
	$table_count = mysqli_num_rows($con_table);
	$result = $con_table->fetch_assoc(); 
	if ($table_count == 0) {
		header("Location: index.php?error=wrong pass or username");
	}
	else {
		header("Location: home.php?id={$result['id']}");
	}
 ?>