<!-- <a href="logout.php">Logout</a> -->

<?php 
	session_start();

	if($_SESSION['s']) {
		include "nav.php";
		include "category.php"; 	
		// header("location:category.php");
		// header("location:category1.php");
	} else {
			header("location:student_login.php");
	}
?>