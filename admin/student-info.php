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
    <?php
    include "admin-header.php";
    ?>
<div style="display: flex;">
    <div class="add_c">
        <button class="primary-button hover-link">
            <a href="#" style="color: white;">Add User</a>
        </button>
    </div>

    <!-- <div class="add_c">
        <button class="primary-button hover-link">
            <a href="update-user.php" style="color: white;">Update User</a>
        </button>
    </div> -->
    </div>
    <div>
        <table class="tbl-full-1">
            <tr>
                <th class="td1-1">Id</th>
                <th class="td2-1">Name</th>
                <th class="td3-1">Email</th>
                <th class="td4-1">Mobile</th>
                <th class="td5-1">Password</th>
                <th class="td6-1">Address</th>
                <th class="td7-1">Reference</th>
                <th class="td8-1">Registration Date</th>
                <th>Update</th>
            </tr>
        </table>
    </div>

    <?php
    $con = mysqli_connect("localhost", "root", "", "library_management");
    if (mysqli_connect_errno())
        echo "fail to connect";
    $m = mysqli_query($con, "SELECT * FROM `student_registration`");
    ?>

    <div>
        <table class="tbl-fully-1">
            <?php
            while ($r = mysqli_fetch_array($m)) {
            ?>
                <div>
                    <tr>
                        <td class="td1-1" name="id"><?php echo $r['id'] ?></td>

                        <td class="td2-1"><?php echo $r['nm'] ?></td>

                        <td class="td3-1"><?php echo $r['em'] ?></td>

                        <td class="td4-1"><?php echo $r['mo'] ?></td>

                        <td class="td5-1"><?php echo $r['pass'] ?></td>

                        <td class="td6-1"><?php echo $r['addres'] ?></td>

                        <td class="td7-1"><?php echo $r['reff'] ?></td>

                        <td class="td8-1"><?php echo $r['reg_date'] ?></td>
                        
                        <td class="td6">
                            <!-- <button class="btn1 hover-link" name="delete">DELETE</button> -->
                            <button class="btn1 hover-link"><a href="update-user.php" style="color: white;">Update</a></button>
                        </td>
                    </tr>
                </div>
            <?php
            }
            ?>
        </table>
        <!-- </form> -->
    </div>


<br>
    <?php
    include "../sub-footer.php";
    ?>
</body>

</html>

<?php 
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $con = mysqli_connect("localhost","root","","library_management");
        if(mysqli_connect_errno()){
					echo "fail to connect";
        }

        mysqli_query($con, "DELETE FROM `student_registration` WHERE `id`='$id';");
            echo '<script>alert("Data DELETED Successfuly..")</script>';
    }
?>