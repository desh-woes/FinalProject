<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="css/ChatHistory.css">
    <title>ChatHistory</title>
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
            <a href="HomePage.php">Home</a>
            <a href="GalleryPage.php">Gallery</a>
            <a href="RoomsPage.php">Rooms</a>
            <a id="current" href="ProductsPage.php?category=all">Products</a>
            <a href="EventsPage.php">Events</a>
            <a href="ContactPage.php">Contact</a>
            <a href="BookingsPage.php" id="bookNow">Book Now</a>
            <?php
                if(isset($_SESSION['username'])){
                    echo ' <a href="LogoutPage.php" >Logout</a>';
            }

            else{
                echo ' <a href="LoginPage.php" >Login</a>';
            }

            ?>
        </nav>
    </div>
    </div>
</header>

<!-- Section containing the chat history of the merchants -->
<section class="ChatHistory">
    <button class="container">
        <img src="images/chat1.png" alt="Avatar">
        <p>Adesina Oluwarotimi</p>
        <span class="time-right">11:00</span>
    </button>
</section>

<!-- Section containing the footer of the website-->
<footer>
    <hr>
    <div class="footerDetails">
        <div>
            <h4>24 KG 414 St, Kigali<br>Kigali Heights, Left wing | <b>+250780609528</b></h4>
            <div class="socialMedia">
                <a href="https://twitter.com/home" target="_blank"><img class="icon" src="images/twitter.png" alt="twitter"></a>
                <a href="https://www.facebook.com/" target="_blank"><img class="icon" src="images/facebook.png" alt="facebook"></a>
                <a href="https://www.instagram.com/?hl=en" target="_blank"><img class="icon" src="images/instagram.png" alt="Instagram"></a>
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