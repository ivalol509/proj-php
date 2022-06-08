<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');
	$query = mysqli_query($con, "SELECT * FROM teach WHERE id={$_SESSION['teach_id']}");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Профиль учителя</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #2c2537">
	<?php if ($_SESSION['teach_id'] == null) { 
		header("Location: loginTeach.php");
	} 
	else { $stroka = $query->fetch_assoc(); ?>
	<div class="col-12 d-flex" style="height: 50px;">
		<div class="col-1"><a href="index.php" class="text-white" style="font-size: 30px; font-weight: bold">Learncon</a></div>
		<div class="col-9"></div>
		<div class="col-2" style="margin-top: 12px; text-align: right;"><a href="outAppr.php" class="text-white">Выйти из аккаунта</a></div>
	</div>
	<div class="col-12 pt-5">
		<h1 class="text-white text-center">Классы</h1>
		<?php 
			$query1 = mysqli_query($con, "SELECT * FROM class");
			for ($i=0; $i < mysqli_num_rows($query1); $i++) { 
				$stroka1 = $query1->fetch_assoc();
		?>	
				<div class="col-9 bg-light mt-3 pt-4 pb-4 mx-auto rounded-pill d-flex">
					<h2 style="margin-top: 2px;" class="ml-4"><?php echo $stroka1['name'] ?></h2>
					<a href="class.php?class_id=<?php echo $stroka1['id'] ?>" class="ml-auto mt-1"><button class="btn rounded-pill text-white pt-2 pb-2 pl-5 pr-5" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Вперёд</button></a>
				</div>
		<?php	
			}
		?>
	</div>
	<?php } ?>
</body>
</html>