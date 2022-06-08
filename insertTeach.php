<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');

	$query = mysqli_query($con, "SELECT * FROM teach WHERE login='{$_POST['login']}'");
	$stroka = $query->fetch_assoc();
	$query0 = mysqli_query($con, "SELECT * FROM pred WHERE name='{$_POST['pred']}'");
	$stroka0 = $query0->fetch_assoc();
	$class0 = $stroka0['id'];

	$ins = "INSERT INTO teach (name, login, password, id_pred) VALUES ('{$_POST['name']}', '{$_POST['login']}', '{$_POST['password']}', '{$class0}')";
	$q = mysqli_query($con, $ins);

	if ($q == true) {
		header("Location: predAccountTeach.php");
	}
?>