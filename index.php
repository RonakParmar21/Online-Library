<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- top-banner  -->
    <!-- <div class="top-banner">
        <div class="containers">
            <div class="small-bold-text banner-text">My library, my lifeline. Open your world. Opening the door to knowledge. Preserving the past, opening the future.</div>
        </div>
    </div> -->

    <?php 

    include "header.php";
?>
    <!-- <nav>
        <div class="containers main-nav flex">
            <a href="#" class="logo">
                <img src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg?auto=compress&cs=tinysrgb&w=600" alt="logo" class="logo1">
                
            </a>
            
            <h2 class="main-header">Online Library <br> Management</h2>
        


            <div class="nav-links">
                <ul class="flex">
                    <li><a href="http://localhost/Library%20Management/" class="hover-link">Home</a></li>
                    <li><a href="#" class="hover-link">About Us</a></li>
                    <li><a href="#" class="hover-link">Contact Us</a></li>
                    
                    <li><a href="#" class="hover-link secondary-button">User SignUp</a></li>
                    <li><a href="#" class="hover-link primary-button">User Login</a></li>
                    <li><a href="#" class="hover-link primary-button">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- header section  -->
    <header>
        <div class="containers header-section flex">
            <div class="header-left">
                <form action="" method="POST">
                    <h3>Login
                        <hr>
                    </h3> <br> <br>
                    <h5>User Id : </h5> <br>
                    <input type="text" class="input-box" name="nm" placeholder="Enter User Id"><br>
                    <br>
                    <h5>Password : </h5> <br>
                    <input type="password" class="input-box" name="pass" placeholder="Enter User Password"> <br>
                    <br><a href="#"><button name="s" class="primary-button-1 login-button">Login</button></a> <br>
                    <a href="http://localhost/Library%20Management/student_registration.php" class="not-reg-button">Not Registered?</a>
                </form>
            </div>

            <div class="header-right">
                <img src="https://images.pexels.com/photos/2177482/pexels-photo-2177482.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
        </div>
    </header>
    <hr> <br>

    <section class="books-section">
        <div class="containers">
            <div class="small-bold-text companies-header">Books can be dangerous, the best ones should be labeled, “This could change your life.” </div>
            <div class="book-logos flex">
                <!-- <img src="https://images.pexels.com/photos/3358707/pexels-photo-3358707.png?auto=compress&cs=tinysrgb&w=600" class="book-logo" alt=""> -->
                <!-- <img src="https://images.pexels.com/photos/4466381/pexels-photo-4466381.jpeg?auto=compress&cs=tinysrgb&w=600" class="book-logo" alt=""> -->
                <img src="https://images.pexels.com/photos/904616/pexels-photo-904616.jpeg?auto=compress&cs=tinysrgb&w=600" class="book-logo" alt="">
                <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=600" class="book-logo" alt="">
                <img src="https://images.pexels.com/photos/301920/pexels-photo-301920.jpeg?auto=compress&cs=tinysrgb&w=600" class="book-logo" alt="">
            </div>
            <!-- </div> -->
        </div>
    </section>
    <hr> <br>

    <!-- feature section  -->
    <!-- <section class="feature-section">
        <div class="containers">
            <div class="feature-header">
                <h3>Libray is the delivery room for the birthplace of ideas, a place where history comes to life.</h3>
                <a href="#" class="secondary-button hover-link">See All features</a>
            </div>
            <div class="feature-area flex">
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
                <div class="feature-card flex">
                    <img src="https://images.pexels.com/photos/14082032/pexels-photo-14082032.jpeg?auto=compress&cs=tinysrgb&w=600" class="feature-logo" alt="">
                    <h3>card sorting</h3>
                    <p class="feature-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, neque unde doloribus</p>
                    <a href="#" class="secondary-button hover-link">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <hr> <br> -->

    <!-- big feature section -->
    <section class="big-feature-section flex">
        <div class="containers big-feature-container flex">
            <div class="feature-img">
                <img src="https://images.pexels.com/photos/8101454/pexels-photo-8101454.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="feature-desc flex">
                <h3>
                    Internet Services
                </h3>
                <p>
                The use of internet tools and services by the libraries are changing the overall development of libraries. Libraries are using the internet mostly for acquisition, cataloguing and reference functions. Librarians can increase the users of libraries by providing valuable information of library holdings through internet.
                </p>
            </div>
        </div>
    </section>
    <br>
    <section class="big-feature-section flex">
        <div class="containers big-feature-container flex">
            <!-- <div class="feature-img">
                <img src="https://images.pexels.com/photos/7516347/pexels-photo-7516347.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div> -->
            <div class="feature-desc flex">
                <h3>
                Downloadable eBooks, Audio books and Videos
                </h3>
                <p>
                You don”t need a Nook or Kindle to download books to read.  Some of them can be downloaded to your computer or mobile device.  Just like checking out books, you can check out and download the eBooks, audio book or video you want.  If they are already checked out, you can reserve them for the future and you generally have one to three weeks to read them, depending on your library rules. <br>
                When I was a preteen, my parents found that putting in a family friendly audio book saved long road trips.
                </p>
            </div>
            <div class="feature-img">
                <img src="https://images.pexels.com/photos/4238482/pexels-photo-4238482.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
        </div>
    </section>
    <br>
    <section class="big-feature-section flex">
        <div class="containers big-feature-container flex">
            <div class="feature-img">
                <img src="https://images.pexels.com/photos/9159039/pexels-photo-9159039.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="feature-desc flex">
                <h3>
                Materials for Teachers, Homeschoolers and Daycare Providers
                </h3>
                <p>
                Libraries are a great resource for learning materials for the teaching environment.  Whenever my oldest asks about a topic I don”t know much about, we head to the library for a book or video about the subject.  Sometimes we pick up bags (our library calls them Theme Bags) of books, props and teaching resources on specific topics like bugs, the history of St. Patrick”s Day or green living.   They also offer puppets and over sized books for story telling.
                </p>
            </div>
        </div>
    </section> <br>
    <hr><br>
    <!-- <section class="big-feature-section"></section> -->
    <!-- <section class="big-feature-section"></section> -->


    <!-- cta section  -->
    <div class="cta-section">
        <div class="containers flex cta-section-container">
            <h2>Start Visiting Today</h2> 
            <p>Libraries are more than just stores of books and knowledge.</p>
            <a href="http://localhost/Library%20Management/index.php" class="primary-button">Visit Today</a>
        </div>
    </div> <br>
    <hr><br>

    <!-- footer  -->
    <footer>
        <div class="containers flex footer-container">
            <div>
            <a href="#" class="logo">
                <img src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg?auto=compress&cs=tinysrgb&w=600" alt="logo" class="logo1" style="margin-left:25px;width:150px;height:150px;"></a><span>
                <h2 class="main-header">Online Library <br> Management</h2></span>
                </div>
            <!-- </a> -->
            <!-- <a href="#" class="company-logo">
                <img src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg?auto=compress&cs=tinysrgb&w=600" class="logo1" alt=""><span>Online Library Management</span>
            </a> -->
            <div class="link-column flex nav-links1">
                <h4>Links</h4>
                <a href="#" class="hover-link">Home</a>
                <a href="#" class="hover-link">About Us</a>
                <a href="#" class="hover-link">Contact Us</a>
                <a href="#" class="hover-link">Images</a>
                <a href="#" class="hover-link">Video</a>
                <!-- <a href="#" class="hover-link">Video</a> -->
            </div>
            <div class="link-column flex nav-links1">
                <h4>Books Type</h4>
                <a href="#" class="hover-link">Programming Books</a>
                <a href="#" class="hover-link">Science</a>
                <a href="#" class="hover-link">General</a>
                <a href="#" class="hover-link">Techonology</a>
                <!-- <a href="#" class="hover-link">Overview</a> -->
            </div>
            <div class="link-column flex nav-links1">
                <h4>Books Type</h4>
                <a href="#" class="hover-link">Management</a>
                <a href="#" class="hover-link">Romantic</a>
                <a href="#" class="hover-link">Adventure stories</a>
                <a href="#" class="hover-link">Crime</a>
                <!-- <a href="#" class="hover-link">Overview</a> -->
            </div>
            <div class="link-column flex nav-links1">
                <h4>Books Type</h4>
                <a href="#" class="hover-link">Plays</a>
                <a href="#" class="hover-link">Essays</a>
                <a href="#" class="hover-link">Short stories</a>
                <a href="#" class="hover-link">Historical </a>
                <!-- <a href="#" class="hover-link">Overview</a> -->
            </div>
        </div>
    </footer>

    <!-- sub-footer  -->
    <!-- <div class="sub-footer">
        <div class="containers flex subfooter-container">
            <a href="#" class="hover-link">Privacy Policy</a>
            <a href="#" class="hover-link">Term & Condition</a>
            <a href="#" class="hover-link">Security Information</a>
            <a href="#" class="hover-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="hover-link"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="hover-link"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div> -->
    <div>
        <?php 
            include "sub-footer.php";
        ?>
    </div>

    <!-- <div class="spacer" class="" style="height: 500px;"></div> -->
    <script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
</body>

</html>



<!-- Libray is the delivery room for the birthplace of ideas, a place where history comes to life. -->



<?php 
    if (isset($_POST['s'])) {
        $nm = $_POST['nm'];
    // $pass = $_POST['pass'];

    $con = mysqli_connect("localhost", "root", "", "library_management");

       
    if (mysqli_connect_errno())
    echo "fail to connect";

        // mysqli_query($con, "SELECT nm, em, ")

        // $a = mysqli_query($con, "SELECT * FROM student_registration WHERE nm='$nm' and pass='$pass'");

        $a=mysqli_query($con, "SELECT * FROM student_registration WHERE nm='$nm' AND pass='$pass'");

        if ($r = mysqli_fetch_array($a)) {
            echo "<script>alert('Login Successfully...')</script>";
            // header("Location:index.php");
            // exit(header("Location: /finished.html"));
        }
        else{
            echo "<script>alert('Not Success')</script>";
        }
        
        
        
    }
?>

