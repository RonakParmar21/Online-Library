<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <?php 
        include "header.php";
    ?>
    </div>

    <div class="containers s-reg-form">
        <div class="s-reg">
        <form action="" method="POST">
                    <h3>Registration Now
                        <hr class="hr">
                    </h3> <br> <br>
                    <h5>Name : </h5> <br>
                    <input type="text" class="input-box" name="nm" placeholder="Enter User Id" required><br><br>
                    
                    <h5>Email/UserId : </h5> <br>
                    <input type="email" class="input-box" name="em" placeholder="Enter Email" required> <br><br>
                    
                    <h5>Mobile No : </h5><br>
                    <input type="mobile" class="input-box" name="mo" placeholder="Enter Mobile No" required><br><br>
                    
                    <h5>Password : </h5> <br>
                    <input type="password" class="input-box" name="pass" placeholder="Enter Password" required><br><br>
                    
                    <h5>confirm Password : </h5> <br>
                    <input type="password" class="input-box" name="cpass" placeholder="Re-Enter Password" required><br><br>
                    
                    <h5>Address :</h5> <br>
                    <input type="text" class="input-box" name="addres" placeholder="Enter Address" required><br><br>
                    
                    <h5>Refference : </h5> <br>
                    <input type="text" class="input-box" name="reff" placeholder="Enter Refference" required><br>
                    <br>

                    <!-- <h5>Registration date : </h5> <br>
                    <input type="text" class="input-box" name="rdate" placeholder="Enter Registration Date" require><br>
                    <br>
                     -->
                    <!-- <h5>Name : </h5> <br>
                    <input type="text" class="input-box" name="uid" placeholder="Enter User Id"><br>
                    <br> -->
                    <br>
                    <br><br>

                    <a href="index.php" name="s" value="Register"><button class="secondary-button-1 s-reg-button" name="s">Register</button></a>
          
                    <a href="http://localhost/Library%20Management/student_login.php" class="s-allready-reg-button">Allready Registered?</a>
                </form>
        </div>
    </div>
    <div>
    <!-- <div class="sub-footer">
        <div class="containers flex subfooter-container">
            <a href="#" class="hover-link">Privacy Policy</a>
            <a href="#" class="hover-link">Term & Condition</a>
            <a href="#" class="hover-link">Security Information</a>
            <a href="#" class="hover-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="hover-link"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="hover-link"><i class="fa-brands fa-instagram"></i></a>
        </div> -->
    </div>
        <?php 
            include "sub-footer.php";
        ?>
    </div>
</body>
</html>

<?php
    if(isset($_POST['s'])){
        $nm = $_POST['nm'];
        $em = $_POST['em'];
        $mo = $_POST['mo'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $addres = $_POST['addres'];
        $reff = $_POST['reff'];

        $con = mysqli_connect("localhost","root","","library_management");
        if(mysqli_connect_errno()){
					echo "fail to connect";
        }
                
        if($pass == $cpass){
            mysqli_query($con, "INSERT INTO student_registration(nm, em, mo, pass, cpass, addres, reff) VALUES ('$nm','$em','$mo','$pass','$cpass','$addres','$reff')");
        
            echo '<script>alert("Data Added Successfuly..")</script>';
        }
        else{
            echo '<script>alert("Both Password are not match")</script>';
        }
    }

    
?>