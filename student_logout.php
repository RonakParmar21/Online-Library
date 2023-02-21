<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- <?php    //include "header.php";    ?> -->

<!-- Log out  -->
<div class="top-banner">
        <div class="containers">
            <div class="small-bold-text banner-text">My library, my lifeline. Open your world. Opening the door to knowledge. Preserving the past, opening the future.</div>
        </div>
    </div>


<nav>
        <div class="containers main-nav flex">
            <a href="#" class="logo">
                <img src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg?auto=compress&cs=tinysrgb&w=600" alt="logo" class="logo1">
                <!-- <img src="https://images.pexels.com/photos/4466381/pexels-photo-4466381.jpeg?auto=compress&cs=tinysrgb&w=600" alt="logo" class="logo1"> -->
            </a>
            <!-- <span> -->
            <h2 class="main-header">Online Library <br> Management</h2>
            <!-- </span> </span> -->


            <div class="nav-links">
                <ul class="flex">
                    <li><a href="http://localhost/Library%20Management/" class="hover-link">Home</a></li>
                    <li><a href="about.php" class="hover-link">About Us</a></li>
                    <li><a href="http://localhost/Library%20Management/category.php" class="hover-link">Books</a></li>
                    <!-- <li><a href="#" class="hover-links">Images</a></li> -->
                    <li><a href="http://localhost/Library%20Management/student_registration.php" class="hover-link secondary-button">User SignUp</a></li>
                    <li><a href="http://localhost/Library%20Management/student_login.php" class="hover-link primary-button">User LogOut</a></li>
                    <li><a href="http://localhost/Library%20Management/admin_login.php" class="hover-link primary-button">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>





<!-- log out end -->



<!--

    <div class="containers">
        <div class="s-reg">
            <form action="check.php" method="POST">
                <h3>Login Now<hr class="s-log-hr"></h3> <br> <br>
                <h5>Name : </h5> <br>
                <input type="text" class="input-box" name="nm" placeholder="Enter User Id" require><br>
                <br>
-->
                <!-- <h5>Email/UserId : </h5> <br>
                <input type="email" class="input-box" name="em" placeholder="Enter Email" require> <br> <br> -->
<!--
                <h5>Password : </h5> <br>
                <input type="password" class="input-box" name="pass" placeholder="Enter Password" require><br>
                <br>

                <a href="#" name="s"><button name="s" class="secondary-button-1 s-reg-button">Login</button></a><br>
-->

                <!-- <a href="index.php" name="s" value="Register"><button class="secondary-button-1 s-reg-button" name="s">Register</button></a> -->

<!--
                <a href="http://localhost/Library%20Management/student_registration.php" class="s-not-login-button">Not Registered?</a>
            </form>
        </div>
    </div>
    <div>-->
        <?php 
            // include "sub-footer.php";
        ?>
    <!-- </div> -->
</body>

</html>


<?php 
  /*
  if (isset($_POST['s'])) {
        $nm = $_POST['nm'];
    $pass = $_POST['pass'];
    $con = mysqli_connect("localhost", "root", "", "library_management");     
    if (mysqli_connect_errno())
    echo "fail to connect";
        $a=mysqli_query($con, "SELECT * FROM student_registration WHERE nm='$nm' AND pass='$pass'");

        if ($r = mysqli_fetch_array($a)) {
            echo "<script>alert('Login Successfully...')</script>";
            // header("Location: index.php");
        }
        else{
            echo "<script>alert('Not Success')</script>";
        }        
        // if(!$r) {
            // header("location: student_login.php");
        // } else {
            // header("location: index.php");
        // }
    }*/
?>