<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="containers">
        <div class="s-reg">
            <form action="" method="POST">
                <h3>Login Now
                    <hr class="s-log-hr">
                </h3> <br> <br>

                <h5>Name : </h5> <br>
                <input type="text" class="input-box" name="adminid" placeholder="Enter User Id" require><br>
                <br>

                <!-- <h5>Email/UserId : </h5> <br>
                <input type="email" class="input-box" name="em" placeholder="Enter Email" require> <br> <br> -->

                <h5>Password : </h5> <br>
                <input type="password" class="input-box" name="pass" placeholder="Enter Password" require><br>
                <br>

                <a href="#" name="s"><button name="s" class="secondary-button-1 s-reg-button">Login</button></a><br>


                <!-- <a href="index.php" name="s" value="Register"><button class="secondary-button-1 s-reg-button" name="s">Register</button></a> -->


                <a href="#" class="s-not-login-button"></a>
            </form>
        </div>
    </div>
</body>

</html>


<?php
if (isset($_POST['s'])) {
    $adminid = $_POST['adminid'];
    $pass = $_POST['pass'];

    $con = mysqli_connect("localhost", "root", "", "library_management");


    if (mysqli_connect_errno())
        echo "fail to connect";

    $a = mysqli_query($con, "SELECT * FROM admin_login WHERE adminid='$adminid' AND pass='$pass'");

    if ($ronak = mysqli_fetch_array($a)) {
        echo "<script>alert('Login Successfully...')</script>";
        header('location:admin/index.php');
    } else {
        echo "<script>alert('Not Success')</script>";
    }
}
?>