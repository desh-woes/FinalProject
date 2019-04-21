<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link rel="import" href="includes/footerHeader.html">
    <!--	<link rel="import" href="includes/header.html">-->
    <title>HomePage</title>
</head>
<body >
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
                <a id="current" href="HomePage.php">Home</a>
                <a href="GalleryPage.php">Gallery</a>
                <a href="RoomsPage.php">Rooms</a>
                <a  href="ProductsPage.php?category=all">Products</a>
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

	<!-- Section for the body of the Web page -->
	<section class="HomePageBanner">
		<img src="images/HomePageBanner1.jpg" alt="BannerImage">
	</section>

	<!-- Section containing the book your stay bar -->
	<section class="Booking">
		<h4>Reserve Your Stay</h4>
		<form id="BookingForm">
			<label>
				<h5>Check In</h5>
				<input type="date" name="CheckIn">
			</label>

			<label>
				<h5>Check Out</h5>
				<input type="date" name="CheckOut">
			</label>

			<div class="bookStay">
				<label>
					<h5>Adult(s)</h5>
					<input type="number" placeholder="0" name="AdultsNumber">
				</label>

				<label >
					<h5>Kid(s)</h5>
					<input type="number" placeholder="0" name="KidsNumber">
				</label>
			</div>
		</form>
		<button type="submit" form="BookingForm">Book</button>
	</section>

	<!-- Section Highlighting top amenities -->
	<section class="topAmenities">
		<div class="amenities">
			<h1>Top</h1>
			<h1 class="amenities1">Amenities</h1>
			<p>Sensectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
		</div>

		<div class="amenities">
			<img src="images/FreeWifi.jpg" alt="FreeWifi">
			<b>Free Wifi In Lobby</b>
			<p>up a land of wild nature, mystical and unexplored. With only 350,000 visitors per year</p>
		</div>

		<div class="amenities">
			<img src="images/FreePool.jpg" alt="FreePool">
			<b>Pool</b>
			<p>up a land of wild nature, mystical and unexplored. With only 350,000 visitors per year</p>
		</div>

		<div class="amenities">
			<img src="images/HotelBar.jpg" alt="HotelBar">
			<b>Hotel Bar</b>
			<p>up a land of wild nature, mystical and unexplored. With only 350,000 visitors per year</p>
		</div>
	</section>

	<!-- Section containing some key statistics -->
	<section class="keyStats">
		<div class="layer">
			<div class="stats">
				<img src="images/Traveller.png" alt="TravellerImg">
				<h2>1,256</h2>
				<h4>Happy Travellers</h4>
			</div>

			<div class="stats">
				<img src="images/EventIcon.png" alt="EventsIcon">
				<h2>700</h2>
				<h4>Cheerful events</h4>
			</div>

			<div class="stats">
				<img src="images/ShoppingIcon.png" alt="ShoppingIcon">
				<h2>3,356</h2>
				<h4>Successful Sales</h4>
			</div>

			<div class="stats">
				<img src="images/ShoppingIcon.png" alt="ShoppingIcon">
				<h2>3,356</h2>
				<h4>Successful Sales</h4>
			</div>
		</div>
	</section>

	<!-- Section containing room booking details-->
	<section class="topAmenities">
		<div class="amenities">
			<h1>Our</h1>
			<h1 class="amenities1">Rooms</h1>
			<p>Sensectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
		</div>

		<div class="roomDetails">
			<h2>Top Suit</h2>
			<img src="images/FreeWifi.jpg" alt="FreeWifi">
			<p>Sensectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
			<button>Book</button>
		</div>

		<div class="roomDetails">
			<h2>Top Suit</h2>
			<img src="images/FreePool.jpg" alt="FreePool">
			<p>Sensectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
			<button>Book</button>
		</div>

		<div class="roomDetails">
			<h2>Top Suit</h2>
			<img src="images/HotelBar.jpg" alt="HotelBar">
			<p>Sensectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
			<button>Book</button>
		</div>

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