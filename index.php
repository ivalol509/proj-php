<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');
	$query = mysqli_query($con, "SELECT * FROM apprentice");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Learncon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="col-12" style="background-image: url('https://vsthemes.org/uploads/posts/2019-11/1581997142_4k-minimalistic-phone_vsthemes_ru-18.jpg'); background-size: cover; height: 675px; padding-top: 25px; background-position: center;">
		<p style="font-size: 125px; font-weight: bold" class="text-white text-center mb-0">Learncon</p>
		<p style="font-size: 25px;" class="text-white text-center">Учись легко</p>
	</div>
	<div class="col-12 pb-5" style="background-color: #2c2537;">
		<div class="col-11 mx-auto">
				<div class="col-9">
					<h1 class="text-white" style="font-weight: bold">Learncon - новая онлайн-платформа для удобной отправки и проверки домашнего задания.</h1>
					<p class="text-secondary" style="font-size: 25px;">Здесь Вы можете следить за выполнением работ, просматривать статус проверки и получать комментарии от преподавателей.</p>
				</div>
		</div>
		<div style="height: 100px;"></div>
		<div class="col-11 mx-auto d-flex mb-5">
			<div class="mx-auto" style="width: 330px;">
				<div style="height: 25px; transition: 0.5s;" class="account1 col-1"></div>
				<div class="text1" style="height: 330px; border-radius: 25px; background: linear-gradient(135deg, #f35dc1, #7e61ff); padding-top: 80px;" onclick="window.location.href='accountAppr.php'">
					<h3 class="text-white text-center">Аккаунт ученика</h3>
					<div class="col-12 mx-auto pt-4">
						<h5 class="text-white text-center">Загрузка домашних заданий и просмотр оценок</h5>
					</div>
				</div>
			</div>
			<div class="mx-auto" style="width: 330px;">
				<div style="height: 25px; transition: 0.5s;" class="account2 col-1"></div>
				<div class="text2" style="height: 330px; border-radius: 25px; background: linear-gradient(135deg, #fdd446, #f65788); padding-top: 80px;" onclick="window.location.href='accountTeach.php'">
					<h3 class="text-white text-center">Аккаунт учителя</h3>
					<div class="col-12 mx-auto pt-4">
						<h5 class="text-white text-center">Просмотр работ и проставление оценок</h5>
					</div>
				</div>
			</div>
			<div class="mx-auto" style="width: 330px;">
				<div style="height: 25px; transition: 0.5s;" class="account3 col-1"></div>
				<div class="text3" style="height: 330px; border-radius: 25px; background: linear-gradient(135deg, #68e0e4, #9b66f5); padding-top: 80px;" onclick="window.location.href='registr.php'">
					<h3 class="text-white text-center">Регистрация</h3>
					<div class="col-12 mx-auto pt-4">
						<h5 class="text-white text-center">В первый раз на нашем сайте? Зарегистрируйтесь!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-12 d-flex" style="height: 150px; background-color: #0e0927;">
		<div class="col-3 mx-auto pt-4">
			<h4 class="text-white" style="font-weight: bold;">Learncon</h4>
			<p style="color: #818498;">Платформа для транспортировки домашнего задания</p>
		</div>
		<div class="col-3 mx-auto" style="margin-top: 55px;">
			<a href="" style="color: #818498;">Политика конфиденциальности</a>
			<a href="" style="color: #818498;" class="mt-3">Публичная оферта</a>
		</div>
		<div class="col-3 mx-auto">
			<a href="outTeach.php" class="text-dark">Выйти из акк учителя</a>
			<a href="outAppr.php" class="text-dark">Выйти из акк ученика</a>
		</div>
	</div>
	<script type="text/javascript">
		let account1 = document.querySelector('.account1');
		let text1 = document.querySelector('.text1');
		text1.onmouseover = function() {
			account1.style.height = "0px";
		};
		text1.onmouseout = function() {
			account1.style.height = "25px";
		};

		let account2 = document.querySelector('.account2');
		let text2 = document.querySelector('.text2');
		text2.onmouseover = function() {
			account2.style.height = "0px";
		};
		text2.onmouseout = function() {
			account2.style.height = "25px";
		};

		let account3 = document.querySelector('.account3');
		let text3 = document.querySelector('.text3');
		text3.onmouseover = function() {
			account3.style.height = "0px";
		};
		text3.onmouseout = function() {
			account3.style.height = "25px";
		};
	</script>
</body>
</html>