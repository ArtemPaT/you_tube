<!-- 2 уровень -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.box:hover {
			background-color: lightgray;
		}
	</style>
</head>
<body>

	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', '38urok');
	    $query = mysqli_query($con, "SELECT * FROM videos INNER JOIN users ON videos.users_id = users.id WHERE videos.users_id = {$_GET['id']}"); 
	    $result = $query->fetch_assoc(); 
	    

	?>





	<!-- header -->
	<div class="col-12 py-3" style="">
		<!-- 2 уровень -->
		<div class="row">
			<!-- лого youtube -->
			<div class="col-4">
				<div class="row">
					<div class="col-1">
						<img src="img/1.png" alt="" class="w-75">
					</div>
					<div class="col-3">
						
						<a href="home.php" alt="" class="w-75"></a>
					</div>
				</div>
					
			</div>
			<!-- поиск видео -->
			<div class="col-6">
				<div class="row">
					<div class="col-7 pr-0">
						<input type="text" placeholder="Введите запрос" class="form-control">
					</div>
					<div class="col-1 pl-0">
						<button class="btn btn-light"><img src="img/3.png" class="w-50" alt=""></button>
					</div>
				</div>
			</div>
			<!-- значки создать видео, колокольчик и т.п. -->
			<div class="col-2">
				<div class="row">
					<div class="col-2">
						<img src="img/4.png" alt="" class="w-100">
					</div>
					<div class="col-2">
						<img src="img/5.png" alt="" class="w-75">
					</div>
					<div class="col-2">
						<img src="img/6.png" alt="" class="w-75">
					</div>
					<div class="col-2 px-0">
						<img src="img/7.jpg" alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content -->
	<div class="col-12 px-3" style="">	
		<div class="row">
			<div class="col-2 bg-white">
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/home.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<a href="home.php?id=<?php echo $_GET['id'] ?>"><h5 >Главная</h5></a>
					</div>
				</div>
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/tr.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<h5 >В тренде</h5>
					</div>
				</div>
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/subs.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<h5 >Подписки</h5>
					</div>
				</div>															
			</div>
			<div class="col-10" style="height: 500px">
					
				<div class="col-2 mb-4">
					<img src="img/7.jpg" alt="" class="w-100">
				</div>
				<div class="col-4">
					<form action="upd.php" method="GET">
						<input value="<?php echo $result["id"] ?>" style="display: none;" name="id">				
						<input value="<?php echo $result["name"] ?>" name="name" class="form-control">
						<input value="<?php echo $result["phone"] ?>" name="phone" class="form-control">
						<input value="<?php echo $result["email"] ?>" name="email" class="form-control">
						<button class="form-control btn btn-primary mt-2">Изменить</button>
					</form>	
					<form action="del.php" method="GET">
						<input value="<?php echo $result["id"] ?>" name="del_id" style="display: none;">
						<button class="btn btn-danger mt-5">Удалить аккаунт</button>
					</form>					
				</div>
		
			</div>
		</div>

	</div>
</body>
</html>

