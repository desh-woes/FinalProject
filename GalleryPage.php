<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="css/GalleryPage.css">
    <meta name="format-detection" content="telephone=no"/>
    <title>GalleryPage</title>
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
				<a href="ProductsPage.php?category=all">Products</a>
				<a href="EventsPage.php">Events</a>
				<a id="current" href="ContactPage.php">Contact</a>
				<a href="BookingsPage.php" id="bookNow">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Gallery section -->
    <section>
        <div class="column">
            <img id="img1" src="images/Gallery%201.jpg" alt="GalleryImg">
            <div class="column1">
                <div class="row1">
                    <img src="images/Gallery%202.jpg" alt="GalleryImg">
                    <img src="images/Gallery%203.jpg" alt="GalleryImg">
                </div>

                <div class="row1">
                    <img src="images/Gallery%204.jpg" alt="GalleryImg">
                    <img src="images/rooms-banner.jpg" alt="GalleryImg" >
                </div>

<!-- Gallery section -->
<section>
    <div class="column">
        <img id="img1" src="images/Gallery%201.jpg" alt="GalleryImg">
        <div class="column1">
            <div class="row1">
                <img src="images/Gallery%202.jpg" alt="GalleryImg">
                <img src="images/Gallery%203.jpg" alt="GalleryImg">
            </div>

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

        </div>
    </div>
</section>

<!-- Section containing the footer of the website -->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('footer');
    document.body.appendChild(content.cloneNode(true));
</script>
</body>
</html>