<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Rooms</title>
    <link rel="stylesheet" href="./css/HeaderFooter.css">
    <link rel="stylesheet" href="./css/rooms.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="import" href="includes/footerHeader.html">
</head>

<body onload="getRooms()">
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
			<a id="current" href="RoomsPage.php">Rooms</a>
			<a href="ProductsPage.php?category=all">Products</a>
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
</header>

<!-- Section containing the product page banner -->
<section class="productBanner">
    <!--Page title-->
    <div class="pageTitle">
        <h1>Rooms</h1>
    </div>

    <!--Page banner-->
    <div class="pageImg">
        <img src="images/rooms-banner.jpg" alt="RoomsImg">
    </div>
</section>

<!-- Section containing the gooking form for the rooms -->
<section class="rooms">
    <h1 id="title">Our Rooms</h1>
    <hr>
    <section class="Searching">
        <form action="BookingsPage.php" method="POST">
            <input onfocus="(this.type='date')" placeholder="CheckIn Date" name="CheckIn">
            <input onfocus="(this.type='date')" placeholder="CheckOut Date" name="CheckOut">
            <input type="number" placeholder="1 Adult(s)" name="AdultsNumber">
            <input type="number" placeholder="0 Kid(s)" name="KidsNumber">
            <button type="submit" name="BookFormFromRoomsPage">Book</button>
        </form>

    </section>
    <!-- Calender -->

    <!-- Types of rooms -->
    <div id="items"></div>

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
                                                                                src="images/instagram.png"
                                                                                alt="Instagram"></a>
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
<!-- Javascript to fetch from db -->

<script>
    var images = {};
    images["Junior Suite"] = "./images/room-junior.jpg";
    images["Standard Suite"] = "./images/room-standard.jpg";
    images["Superior Suite"] = "./images/room-superior.jpg";

    function getRooms() {
        // alert("loaded");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var jsonData = JSON.parse(this.responseText);

                var productHolder = document.getElementById("items");

                for (var x = 0; x < jsonData.length; x++) {
                    // console.log("hi");

                    var newChild = '<hr><div class="category"> <div class="image"> <img src=' + images[jsonData[x].name] + ' alt=""></div>';
                    newChild += '<div class="description"> <div id="text" style="width:30vw;"><h1>' + jsonData[x].name + '</h1><p>Our ' + jsonData[x].name + 's offer breathtaking vies of the city skyline.</p>';
                    newChild += ' <ul><li id="price">Size:  ' + jsonData[x].size + ' sq ft</li><li>Beds:  ' + jsonData[x].rooms + ' Double(s)</li></ul><hr><i class="fas fa-wifi" style="padding: 0 0.5vw;"></i><i class="fas fa-tv" style="padding: 0 0.5vw;"></i><i class="fas fa-phone" style="padding: 0 0.5vw;"></i>';
                    newChild += '</div><div class="book"><p>From</p><p class="money">$ ' + jsonData[x].price + '</p><button>Book</button> </div></div><hr>';

                    // <h1>'+jsonData[x].name+'</h1><p class="price">$'+jsonData[x].price+'</p><p>'+jsonData[x].desc+'</p><p><button>Add to Cart</button></p></div>';

                    productHolder.insertAdjacentHTML('beforeend', newChild);


                }
            } else {
                console.log(this.responseText);
                // alert("not connected yet");
            }
        };
        var data = new FormData();
        data.append('token', 'webDevGroupTimiErastusOlivierNelson');
        data.append('tag', 'getRooms');

        //Send the proper header information along with the request
        // xhttp.setRequestHeader('Content-type', 'application/json');
        // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.open("POST", "PHP/ecommerce/engine.php", true);
        xhttp.send(data);

    }

</script>

</body>

</html>



        