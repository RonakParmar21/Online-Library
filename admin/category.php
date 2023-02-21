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





    <div class="containers s-reg-form">
        <div class="s-reg">
            <form action="" method="POST">
                <h3>Registration Now
                    <hr class="hr">
                </h3> <br> <br>
                <h5>Book Name: </h5> <br>
                <input type="text" class="input-box" name="bnm" placeholder="Enter Book Name" required><br><br>

                <h5>Book Type: </h5> <br>
                <input type="text" class="input-box" name="btype" placeholder="Enter Book Type" required> <br><br>

                <h5>Book Image : </h5><br>
                <input type="file" class="input-box" name="bimg" placeholder="Enter Book Image" required><br><br>

                <h5>Book : </h5> <br>
                <input type="file" class="input-box" name="book" placeholder="Select Book" required> <br><br>


                <a href="index.php" name="s" value="Register"><button class="secondary-button-1 s-reg-button" name="s">Add Category</button></a>
                <br><br>
            </form>
        </div>
    </div>
    <?php
    include "../sub-footer.php";
    ?>
</body>

</html>

<?php
if (isset($_POST['s'])) {
    $bnm = $_POST['bnm'];
    $btype = $_POST['btype'];
    $bimg = $_POST['bimg'];
    // $bimg = "img/".$_FILES['bimg']['name'];
    // move_uploaded_file($FILES['bimg']['tmp_name'], $bimg);
    $book = $_POST['book'];
    // $book = "pdf/".$_FILES['book']['name'];
    // move_uploaded_file($FILES['book']['tmp_name'], $book);

    $con = mysqli_connect("localhost", "root", "", "library_management");
    if (mysqli_connect_errno()) {
        echo "fail to connect";
    }

    if ($con) {

        mysqli_query($con, "INSERT INTO category(bnm, btype, bimg, book) VALUES ('$bnm','$btype','$bimg','$book')") or die(mysqli_error($con));

        echo '<script>alert("Category Added Successfuly..")</script>';
    }
    //  }
    else {
        echo '<script>alert("Category Cann\'t be add")</script>';
    }
}
?>

