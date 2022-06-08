<?php 
	session_start();
	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');
	$query = mysqli_query($con, "SELECT * FROM apprentice");
	for ($i=0; $i < mysqli_num_rows($query); $i++) { 
		$stroka = $query->fetch_assoc();
	}
	$_SESSION['student_id'] = $stroka['id'];

	header("Location: accountAppr.php");
?>