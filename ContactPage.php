<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
	<link rel="stylesheet" type="text/css" href="css/ContactPage.css">
	<meta name="format-detection" content="telephone=no"/>
	<script src="js/ContactPage.js"></script>
	<title>ContactPage</title>
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
			<h1>Contact Us</h1>
		</div>

		<!--Page banner-->
		<div class="pageImg">
			<img alt="ProductImg" src="images/contactUs.jpg">
		</div>
	</section>

	<!--Contact form section-->
    <section class="Form">
    	<h1>PLEASE CONTACT US HERE</h1>
    	<form id="form1" onsubmit="return validate_text()" method="post">
    		<label>Name:</label>
    		<input id="f_name" type="text" placeholder="Enter your full name"><br><br>

    		<label>Email:</label>
    		<input id="e_name" type="Email" name="Email" placeholder="Enter your Email"><br><br>

    		<label>Phone:</label>
    		<input type="number" name="Phone" placeholder="Enter your phone number"><br><br>

    		<label id="Message">Message:</label>
    		<textarea placeholder="Please write your Message here"></textarea><br><br>

    		<button id="form_button" type="submit" form = "form1" value="Submit">Send</button>
    	</form>
    </section>

	<!-- Section containing the footer of the website -->
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