<?php 
	session_start();

	$con = mysqli_connect('mysql.09-15-pn.myjino.ru', '09-15-pn', 'IT.TIMUR123$', '09-15-pn_alina-ivanova');

	$query1 = mysqli_query($con, "UPDATE dz SET otsenka='{$_POST['otsenka']}' WHERE appr_id='{$_POST['id']}' AND text='{$_POST['text']}' AND photo='{$_POST['photo']}'");
	header("Location: class.php?class_id={$_GET['class_id']}");
?>