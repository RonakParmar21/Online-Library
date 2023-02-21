
    




}
?>

    <?php
    include "header.php";
    ?>
    <div> <br>
    <?php
    $con = mysqli_connect("localhost", "root", "", "library_management");
    if (mysqli_connect_errno())
        echo "fail to connect";
    $m = mysqli_query($con, "SELECT * FROM `category`");

    ?>
    <form action="category1.php" method="post">
        <div class="select-type">
            <select name="btype" id="" class="hover-link secondary-button">
                <option value="--Select--" class="select-text"><a href="category.php"> -- Select Book Type -- </a></option>
                <option value="Programming" name="p" class="select-text">Programming</option>
                <option value="knowledge" name="m" class="select-text">knowledge</option>
                <option value="Management" name="m" class="select-text">Management</option>
            </select>
            <button name="search" class="hover-link primary-button">search</button>
        </div>
    </form>


    <?php
    while ($r = mysqli_fetch_array($m)) {
    ?>
        <div class="flex containers main-category">
            
            <?php //echo $r['bimg'] ?> 
            <div class="category-img" id="category-img"><img src="<?php echo "Image/" . $r['bimg']; ?>" alt="img" width="80%" height="250px" align-item="center"></div><span>

                <div class="category-nm"><?php echo $r['bnm']; ?></div>

                <div class="category-type"><?php echo $r['btype']; ?></div>

                
                <a href="<?php echo "Image/" . $r['book']; ?>" target="_r">
                    <div><button class="category-btn">Read Now</button>
                
                </a>
        </div>



</div>
<?php
?>
<br>
<hr><br>
<?php
    } ?>
</div>
<div>
    <?php
    include "sub-footer.php";
    ?>
</div>
}
?>