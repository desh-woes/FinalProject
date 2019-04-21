<?php
session_start();
include "PHP/ecommerce/db.php";
$username = "";
$errors = array();

if (isset($_POST['login_submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    echo "<script>console.log(  '$username'  );</script>";


    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="css/HeaderFooter.css" rel="stylesheet" type="text/css">
    <link href="css/LoginPage.css" rel="stylesheet" type="text/css">
    <meta name="format-detection" content="telephone=no"/>
    <title>LoginPage</title>
</head>
<body>
    <!--Section containing the header, logo and Navigation links-->
    <header>
        <!-- Div containing the Logo-->
        <div class="logoImg">
            <!-- Add vertical line to the Logo-->
            <hr>
            <h1>The<br>Bourgeoning<br>Hotel</h1>
        </div>

        <!-- Navigation links in the header-->
        <div class="nav">
            <nav>
                <a href="HomePage.html">Home</a>
                <a href="GalleryPage.html">Gallery</a>
                <a href="RoomsPage.html">Rooms</a>
                <a href="ProductsPage.php">Products</a>
                <a href="EventsPage.html" id="current">Events</a>
                <a href="ContactPage.html">Contact</a>
                <a href="BookingsPage.php" id="bookNow">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Login Section -->
    <section class="login">
        <form method="post" action="LoginPage.php">
            <?php include('PHP/errors.php'); ?>
            <div class="imgcontainer">
                <img src="images/HotelLogo.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" value="<?php echo $username; ?>" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" name="login_submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </section>

    <!-- Section containing the footer of the website -->
    <footer>
        <hr>
        <div class="footerDetails">
            <div>
                <h4>24 KG 414 St, Kigali<br>Kigali Heights, Left wing | <b>+250780609528</b></h4>
                <div class="socialMedia">
                    <a href="https://twitter.com/home" target="_blank"><img class="icon" src="images/twitter.png"
                                                                            alt="twitter"></a>
                    <a href="https://www.facebook.com/" target="_blank"><img class="icon" src="images/facebook.png"
                                                                             alt="facebook"></a>
                    <a href="https://www.instagram.com/?hl=en" target="_blank"><img class="icon"
                                                                                    src="images/instagram.png" alt="Instagram"></a>
                    <button onclick="window.location.href = 'ContactPage.html'">Contact Us</button>
                </div>
                <h3>&#0169 2023 by the group 3</h3>
            </div>

            <div class="mailingList">
                <h4>Join Our Mailing List</h4>
                <form id="mailingListForm">
                    <label>
                        <input type="text" placeholder="Enter your email here">
                    </label>
                </form>
                <button type="submit" form="mailingListForm">Subscribe</button>
            </div>
        </div>
    </footer>
</body>
</html>