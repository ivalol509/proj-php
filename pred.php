<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #2c2537;">
	<div class="col-12 d-flex" style="height: 50px;">
		<div class="col-1"><a href="index.php" class="text-white" style="font-size: 30px; font-weight: bold">Learncon</a></div>
		<div class="col-9"></div>
		<div class="col-2" style="margin-top: 12px; text-align: right;"><a href="outAppr.php" class="text-white">Выйти из аккаунта</a></div>
	</div>
	<a href="accountAppr.php" class="text-white ml-4">Назад</a>
	<h1 class="mb-4 text-white text-center" style="font-size: 50px;">
	<?php 
		$query0 = mysqli_query($con, "SELECT * FROM pred WHERE id={$_GET['pred_id']}"); 
		$stroka0 = $query0->fetch_assoc();
		echo $stroka0['name'];
		$query9 = mysqli_query($con, "SELECT * FROM apprentice WHERE id={$_SESSION['student_id']}");
		$stroka9 = $query9->fetch_assoc();
	?>
	</h1>
	<h2 class="text-center text-white">Добавить работу</h2>
	<div class="col-6 mx-auto">
		<div class="col-12 bg-white pt-3 pb-3 pl-3 pr-3" style="border-radius: 25px;">
			<form action="addWork.php" method="POST" enctype="multipart/form-data">
				<input class="mt-3 form-control rounded-pill" type="" placeholder="Описание" name="desc">
				<input class="d-none" type="" value="<?php echo $_GET['pred_id'] ?>" name="pred_id">
				<input placeholder="Выбрать файл" class="mt-3" type="file" name="file">
				<input class="d-none" type="" value="<?php echo $stroka9['class'] ?>" name="class_id">
				<button class="btn rounded-pill text-white pt-2 pb-2 pl-5 pr-5" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 20px;">Загрузить</button>
			</form>
		</div>
	</div>
	<div class="mb-5 mt-5">
	<?php 
		$query1 = mysqli_query($con, "SELECT * FROM dz WHERE appr_id={$_SESSION['student_id']} AND pred_id={$_GET['pred_id']}");
		for ($i=0; $i < mysqli_num_rows($query1); $i++) { 
			$stroka1 = $query1->fetch_assoc();
	?>
			<div class="col-8 mx-auto d-flex bg-white mt-3" style="border-radius: 25px;">
				<div class="col-4 pt-2 pb-2">
					<img style="width: 100%" src="<?php echo $stroka1['photo'] ?>">
				</div>
				<div class="col-6 d-flex">
					<p><?php echo $stroka1['text'] ?></p>
					<div style="height: all; width: 2px; background-color: red; margin-left: auto;"></div>
				</div>
				<div class="col-2">
					<h1 class="text-center" style="font-size: 100px;"><?php echo $stroka1['otsenka'] ?></h1>
				</div>
			</div>
	<?php
		}
	 ?>
	 </div>
</body>
</html>