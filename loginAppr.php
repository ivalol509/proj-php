<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #2c2537;">
	<h1 class="text-white text-center" style="margin-top: 100px;">Авторизация</h1>
	<form action="checkAppr.php" method="POST" class="col-4 mx-auto mt-5 appr1">
		<input class="form-control rounded-pill mt-1" name="login" placeholder="Логин">
		<input class="form-control rounded-pill mt-1" name="password" placeholder="Пароль">
		<div class="text-center">
			<button class="btn rounded-pill text-white mt-3 pt-1 pb-1 pl-5 pr-5" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Вперёд</button>
		</div>
	</form>
	<p class="text-white text-center mt-2"><?php echo $_GET['lol'] ?></p>

</body>
</html>
