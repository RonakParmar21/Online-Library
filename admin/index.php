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
    <div class="flex">
        <div class="containers add_cat s-reg">
            <h2>Add Book Now</h2>
            <hr>
            <p class="add_cat_p">In this option you can add book category</p>
            <a href="category.php"><button class="secondary-button hover-link">Add Book</button></a>
        </div>

        <div class="containers s-reg add_cat ">
            <h2>Book List</h2>
            <hr>
            <a href="display_cat.php">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab expedita consequatur repudiandae amet, nam optio repellendus nobis hic praesentium iste? Ea, tempora saepe. Dignissimos quae voluptatem numquam, unde eveniet possimus.</p>
            </a>
        </div>
    </div>

    <?php
    include "../sub-footer.php";
    ?>
</body>

</html>