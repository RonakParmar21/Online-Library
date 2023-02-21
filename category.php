<?php  session_start();
?>

<?php    
if(!$_SESSION['s']){
    include "header.php";
    header("Location: student_login.php");
} else {
?>
<?php 
    include "nav.php";
?>
    <!-- <div class="top-banner">
    <div class="containers">
        <div class="small-bold-text banner-text">My library, my lifeline. Open your world. Opening the door to knowledge. Preserving the past, opening the future.</div>
    </div>
</div>
<nav>
    <div class="containers main-nav flex">
        <a href="#" class="logo">
            <img src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg?auto=compress&cs=tinysrgb&w=600" alt="logo" class="logo1">
        </a>
        <h2 class="main-header">Online Library <br> Management</h2>

        <div class="nav-links">
            <ul class="flex">
                <li><a href="http://localhost/Library%20Management/" class="hover-link">Home</a></li>
                <li><a href="about.php" class="hover-link">About Us</a></li>
                <li><a href="http://localhost/Library%20Management/category.php" class="hover-link">Books</a></li> -->
                <!-- <li><a href="#" class="hover-links">Images</a></li> -->
 <!--               <li><a href="http://localhost/Library%20Management/student_registration.php" class="hover-link secondary-button">User SignUp</a></li>
                <li><a href="http://localhost/Library%20Management/student_login.php" class="hover-link primary-button">User LogOut</a></li>
                <li><a href="http://localhost/Library%20Management/admin_login.php" class="hover-link primary-button">Admin Login</a></li>
            </ul>
        </div>
    </div>
</nav> -->
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
    <br>
    <hr><br>
    <?php
        } 
        ?>
    </div>
    <div>
        <?php
        include "sub-footer.php";
        ?>
    </div>
    <?php 
}
?>