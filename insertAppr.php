<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');

	$query = mysqli_query($con, "SELECT * FROM apprentice WHERE login='{$_POST['login']}'");
	$stroka = $query->fetch_assoc();
	$query0 = mysqli_query($con, "SELECT * FROM class WHERE name='{$_POST['class']}'");
	$stroka0 = $query0->fetch_assoc();
	$class0 = $stroka0['id'];

	$ins = "INSERT INTO apprentice (name, class, login, password) VALUES ('{$_POST['name']}', '{$class0}', '{$_POST['login']}', '{$_POST['password']}')";
	$q = mysqli_query($con, $ins);

	if ($q == true) {
		header("Location: predAccountAppr.php"); 
	}
?>