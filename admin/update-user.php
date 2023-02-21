<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<?php 
    include "admin-header.php";
?>
<div class="containers">
        <div class="s-reg">
            <form action="" method="POST">
                <h3>Update User Now<hr class="s-log-hr"></h3> <br> <br>

                <h5>Id : </h5> <br>
                <input type="text" class="input-box" name="id" placeholder="Enter Student Id" require /> <br>
                <br>

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

                <a href="#" name="s"><button name="s" class="secondary-button-1 s-reg-button">Update</button></a><br>
            </form>
            <br>
        </div>
    </div>


<?php 
    include "../sub-footer.php";
?>
    
</body>
</html>

<?php 
    if(isset($_POST['s'])){
        $id = $_POST['id'];
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
            mysqli_query($con, "UPDATE `student_registration` SET `id`='$id',`nm`='$nm',`em`='$em',`mo`='$mo',`pass`='$pass',`cpass`='$cpass',`addres`='$addres',`reff`='$reff' WHERE `id`='$id';");
            echo '<script>alert("Data UPDATE Successfuly..")</script>';
        }
        else{
            echo '<script>alert("Both Password are not match")</script>';
        }
    }
?>