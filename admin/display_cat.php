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
    <div class="add_c">
        <button class="primary-button hover-link">
            <a href="category.php" style="color: white;">Add Category</a>
        </button>
    </div>
    <div>
        <table class="tbl-full">
            <tr>
                <th>Id</th>
                <th>book Name</th>
                <th>Book Type</th>
                <th>Image</th>
                <th>Read Now</th>
                <th>Delete</th>
            </tr>
        </table>
    </div>
    <?php
    $con = mysqli_connect("localhost", "root", "", "library_management");
    if (mysqli_connect_errno())
        echo "fail to connect";
    $m = mysqli_query($con, "SELECT * FROM `category`");
    ?>
    <div>
        <table class="tbl-fully">
            <?php
            while ($r = mysqli_fetch_array($m)) {
            ?>
                <div>
                    <tr>
                        <td class="td1"><?php echo $r['id'] ?></td>
                        <!-- <td class="td2"> -->
                        <!-- <a href="<?php //echo "../Image/" . $r['book']; 
                                        ?>" class="category"><?php //echo $r['book'] 
                                                                                                    ?></a> -->
                        <!-- </td> -->
                        <td class="td2">
                            <?php echo $r['bnm'] ?>
                        </td>
                        <td class="td3"><?php echo $r['btype'] ?></td>
                        <td class="td4"><a href="<?php echo "../Image/" . $r['bimg']; ?>" class="category"><?php echo $r['bnm']; ?></a></td>
                        <td class="td5">
                            <button class="btn hover-link">
                                <a href="<?php echo "../Image/" . $r['book']; ?>" style="color: white;" target="_blank"><?php echo $r['bnm']; ?></a>
                            </button>
                        </td>
                        <td class="td6">
                            <button class="btn1 hover-link">DELETE</button>
                        </td>
                    </tr>
                </div>
            <?php
            }
            ?>
        </table>
        <!-- </form> -->
    </div>
    <!-- </div> -->
</body>

</html>