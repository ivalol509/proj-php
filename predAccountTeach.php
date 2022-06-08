<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');
	$query = mysqli_query($con, "SELECT * FROM teach");
	for ($i=0; $i < mysqli_num_rows($query); $i++) { 
		$stroka = $query->fetch_assoc();
	}
	$_SESSION['teach_id'] = $stroka['id'];

	header("Location: accountTeach.php");
?>