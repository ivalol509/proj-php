<!-- регистрация -->
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style="background-color: #2c2537;">
	<h1 class="text-white text-center" style="margin-top: 100px;">Регистрация</h1>
	<div class="col-4 mx-auto d-flex">
		<button class="btn rounded-pill text-white mt-3 pt-1 pb-1 pl-5 pr-5 appr" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Ученик</button>
		<button class="btn rounded-pill text-white mt-3 pt-1 pb-1 pl-5 pr-5 teach ml-auto" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Учитель</button>
	</div>
	<form action="insertAppr.php" method="POST" style="display: none;" class="col-4 mx-auto mt-5 appr1">
		<input class="form-control rounded-pill mt-1" name="name" placeholder="Имя и фамилия">
		<select class="form-control rounded-pill mt-1" name="class" placeholder="Класс">
		  <option>10А</option>
		  <option>10Б</option>
		</select>
		<input class="form-control rounded-pill mt-1" name="login" placeholder="Логин">
		<input class="form-control rounded-pill mt-1" name="password" placeholder="Пароль">
		<div class="text-center">
			<button class="btn rounded-pill text-white mt-3 pt-1 pb-1 pl-5 pr-5" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Вперёд</button>
		</div>
	</form>
	<form action="insertTeach.php" method="POST" style="display: none;" class="col-4 mx-auto mt-5 teach1">
		<input class="form-control rounded-pill mt-1" name="name" placeholder="Имя и фамилия">
		<select class="form-control rounded-pill mt-1" name="pred" placeholder="Предмет">
			<option>Русский язык</option>
			<option>Геометрия</option>
		</select>
		<input class="form-control rounded-pill mt-1" name="login" placeholder="Логин">
		<input class="form-control rounded-pill mt-1" name="password" placeholder="Пароль">
		<div class="text-center">
			<button class="btn rounded-pill text-white mt-3 pt-1 pb-1 pl-5 pr-5" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Вперёд</button>
		</div>
	</form>
	<script type="text/javascript">
		let appr = document.querySelector('.appr');
		let appr1 = document.querySelector('.appr1');
		appr.onclick = function () {
			appr.style.display = 'none';
			teach.style.display = 'none';
			appr1.style.display = 'block';
		}
		let teach = document.querySelector('.teach');
		let teach1 = document.querySelector('.teach1');
		teach.onclick = function () {
			appr.style.display = 'none';
			teach.style.display = 'none';
			teach1.style.display = 'block';
		}
	</script>
</body>
</html>