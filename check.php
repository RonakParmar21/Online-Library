<?php session_start();
	$em = $_POST['em'];
    $pass = $_POST['pass'];

    $con = mysqli_connect("localhost", "root", "", "library_management");

    // if (mysqli_connect_errno())
        // echo "fail to connect";
  
    $a = mysqli_query($con, "SELECT * FROM student_registration WHERE em='$em' AND pass='$pass'");

    if ($ronak = mysqli_fetch_array($a)) {
		$_SESSION['s'] = $em;
        echo "<script>alert('Login Successfully...')</script>";
        header('location:category.php');
        // header('location:index.php');
    } else {
        echo "<script>alert('Not Success')</script>";
        //header("location:student_login.php");
    }


	/*
	$em = $_POST['em'];
	$pass = $_POST['pass'];

	// if($em && $pass) {
		if($em = $_POST['em'] &&
		$pass = $_POST['pass']) {
		$_SESSION['em']=$em;
        $_SESSION['pass'] = $pass;
		header("location:session.php");
	}  else {
		header("location:index.php");
	}
*/

?>