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
	<link rel="stylesheet" type="text/css" href="css/ProductsPage.css">
	<title>Products Page</title>
</head>

<body onload="getProducts()">
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
				<a id="current" href="ProductsPage.html">Products</a>
				<a href="EventsPage.html">Events</a>
				<a href="BookingsPage.html" id="bookNow">Book Now</a>
			</nav>
		</div>
	</header>

	<!-- Section containing the product page banner -->
	<section class="productBanner">
		<!--Page title-->
		<div class="pageTitle">
			<h1>Products</h1>
		</div>

		<!--Page banner-->
		<div class="pageImg">
			<img src="images/ProductsImage.jpg" alt="ProductImg">
		</div>
	</section>

	<!-- Section containing the Our products segment and the available products segment -->
	<section class="ourProducts">
		<h1>Our Products</h1>
		<hr>
		<p>At the Bourgeoning, we give a chance for our clients to sell their goods on our platform. Do you have foreign
			merchandise? are you willing to sell them? leverage our platform!</p>
		<hr>

		<!-- Division containing the available products and navigation buttons -->
		<div class="ourProducts1">
			<h1>Available Products</h1>
			<div>
				<button>All</button>
				<button>Clothings</button>
				<button>Food Items</button>
				<button>Art Work</button>
			</div>
		</div>
		<hr>
	</section>

	<!--Product Card segment-->
	<section id="products-holder" class="gallery_products">

		<!-- <div class="card">
			<img src="images/addProduct.jpg">
			<h1>Lunch Special</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Lunch Special</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Lunch Special</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>



		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Drinks and Beverages</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Drinks and Beverages</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Drinks and Beverages</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>


		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Healthy Breakfast</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Healthy Breakfast</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div>

		<div class="card">
			<img src="images/addProduct.jpg">
			<h1>Healthy Breakfast</h1>
			<p class="price">$19.99</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
				diam. Sed arcu. Cras consequat.</p>
			<p><button>Add to Cart</button></p>
		</div> -->

	</section>

	<!-- Pagination section -->
	<section class="pagination">
		<a href="#">&laquo;</a>
		<a href="#">1</a>
		<a class="active" href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#">&raquo;</a>
	</section>

	<!-- Button to prompt the user to add products -->
	<div id="addButton">
		<button onclick="window.location.href = 'AddProductsPage.html'">Add New Products</button>
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
					<button>Contact Us</button>
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


	<script>


		// window.onload()

		function getProducts() {
			// alert("loaded");
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					var jsonData = JSON.parse(this.responseText);


					var productHolder = document.getElementById("products-holder");
					for (var x = 0; x < jsonData.length; x++) {
						console.log(jsonData);

						var newChild = '<div class="card"><img src="images/addProduct.jpg"><h1>'+jsonData[x].name+'</h1><p class="price">$'+jsonData[x].price+'</p><p>'+jsonData[x].desc+'</p><p><button onclick="contactSeller()">Contact Seller</button></p></div>';
						productHolder.insertAdjacentHTML('beforeend', newChild);

					}

				}

				else {
					console.log(this.responseText);
					// alert("not connected yet");
				}
			};
			var data = new FormData();
			data.append('token', 'webDevGroupTimiErastusOlivierNelson');
			data.append('tag', 'getProducts');

			xhttp.open("POST", "PHP/ecommerce/engine.php", true);
			xhttp.send(data);


		}



		function contactSeller(){
			
			window.location.href = "ChatRoom.php";
		}

	</script>
</body>

</html>