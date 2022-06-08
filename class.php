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
	<a href="accountTeach.php" class="text-white ml-4">Назад</a>
	<h1 class="mb-4 text-white text-center" style="font-size: 50px;">
		<?php 
			$query0 = mysqli_query($con, "SELECT * FROM class WHERE id={$_GET['class_id']}"); 
			$stroka0 = $query0->fetch_assoc();
			echo $stroka0['name'];
		?>
	</h1>
	<div class="mb-5 mt-5">
	<?php 
		$query1 = mysqli_query($con, "SELECT * FROM dz INNER JOIN teach ON dz.pred_id = teach.id_pred INNER JOIN apprentice ON dz.appr_id = apprentice.id WHERE class_id={$_GET['class_id']}");
		for ($i=0; $i < mysqli_num_rows($query1); $i++) { 
			$stroka1 = $query1->fetch_assoc();
	?>
			<div class="col-8 mx-auto d-flex bg-white mt-3" style="border-radius: 25px;">
				<div class="col-4 pt-2 pb-2">
					<img style="width: 100%" src="<?php echo $stroka1['photo'] ?>">
				</div>
				<div class="col-6 d-flex">
					<div>
						<p style="font-weight: bold; font-size: 20px;"><?php echo $stroka1['name'] ?></p>
						<p><?php echo $stroka1['text'] ?></p>
					</div>
					<div style="height: all; width: 2px; background-color: red; margin-left: auto;"></div>
				</div>
				<div class="col-2">
					<?php if ($stroka1['otsenka'] == 0) { ?>
						<form action="otsenka.php?class_id=<?php echo $_GET['class_id'] ?>" method="POST" enctype="multipart/form-data">
							<input type="otsenka" name="otsenka" placeholder="Оценка" class="mt-3 form-control rounded-pill">
							<input type="id" name="id" value="<?php echo $stroka1['id'] ?>" class="mt-3 form-control rounded-pill d-none">
							<input type="text" name="text" value="<?php echo $stroka1['text'] ?>" class="mt-3 form-control rounded-pill d-none">
							<input type="photo" name="photo" value="<?php echo $stroka1['photo'] ?>" class="mt-3 form-control rounded-pill d-none">
							<button class="btn rounded-pill text-white mt-2" style="background: linear-gradient(135deg, #689ef4, #9561e6); font-size: 15px;">Поставить</button>
						</form>
					<?php } else { ?>
						<h1 class="text-center" style="font-size: 100px;"><?php echo $stroka1['otsenka'] ?></h1>
					<?php } ?>
				</div>
			</div>
	<?php
		}
	 ?>
	</div>
</body>
</html>