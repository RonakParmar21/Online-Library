<?php 
    session_start();
?>

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
    <?php include "header.php";    ?>
    <div class="containers">
        <div class="s-reg">
            <form action="check.php" method="POST">
                <h3>Login Now
                    <hr class="s-log-hr">
                </h3> <br> <br>
                <h5>Name : </h5> <br>
                <input type="email" class="input-box" name="em" placeholder="Enter User Email" require><br>
                <br>

                <!-- <h5>Email/UserId : </h5> <br>
                <input type="email" class="input-box" name="em" placeholder="Enter Email" require> <br> <br> -->

                <h5>Password : </h5> <br>
                <input type="password" class="input-box" name="pass" placeholder="Enter Password" require><br>
                <br>

                <button name="s" class="secondary-button-1 s-reg-button">Login</button><br>


                <!-- <a href="index.php" name="s" value="Register"><button class="secondary-button-1 s-reg-button" name="s">Register</button></a> -->


                <a href="http://localhost/Library%20Management/student_registration.php" class="s-not-login-button">Not Registered?</a>
            </form>
        </div>
    </div>
    <div>
        <?php
        include "sub-footer.php";
        ?>
    </div>
</body>

</html>
<?php
if (isset($_POST['s'])) {
  }
?>