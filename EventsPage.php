<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href="css/HeaderFooter.css" rel="stylesheet" type="text/css">
    <link href="css/EventsPage.css" rel="stylesheet" type="text/css">
    <meta name="format-detection" content="telephone=no"/>
    <title>EventsPage</title>
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

<!-- Section containing the product page banner -->
<section class="productBanner">
    <!--Page title-->
    <div class="pageTitle">
        <h1>MEETING & EVENTS</h1>
    </div>

    <!--Page banner-->
    <div class="pageImg">
        <img alt="ProductImg" src="images/Events.jpg">
    </div>
</section>

<!-- Section containing event details -->
<section class="EventPlanning">
    <div class="EventDesc">
        <div>
            <h2>Event Planning</h2>
            <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story
                and let your users know a little more about you.<br><br>This is a great space to write long text about
                your company and your services. You can use this space to go into a little more detail about your
                company. Talk about your team and what services you provide. Tell your visitors the story of how you
                came up with the idea for your business and what makes you different from your competitors. Make your
                company stand out and show your visitors who you are.</p>
        </div>
        <a href="#" id="test">Start Planning >>></a>
    </div>

    <div class="EventDesc">
        <h2>Weddings</h2>
        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double
            click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you
            like on your page. I’m a great place for you to tell a story and let your users know a little more about
            you.<br><br>This is a great space to write long text about your company and your services. You can use this
            space to go into a little more detail about your company. Talk about your team and what services you
            provide. Tell your visitors the story of how you came up with the idea for your business and what makes you
            different from your competitors. Make your company stand out and show your visitors who you are.</p>
        <a href="#">Start Planning >>></a>
    </div>

    <div class="EventDesc">
        <h2>Catering</h2>
        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double
            click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you
            like on your page. I’m a great place for you to tell a story and let your users know a little more about
            you.</p>
        <div>
            <p>Download Our Menus:</p>
            <a href="#">>>Breakfast</a><br>
            <a href="#">>>Launch</a><br>
            <a href="#">>>Dinner</a><br>
        </div>
    </div>
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