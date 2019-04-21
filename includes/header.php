<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChatRoom</title>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/ChatRoom.css">
    <link rel="stylesheet" type="text/css" href="css/LoginPage.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css"> -->
</head>
<body onload="loadPreviousChats()">
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
                <a href="GalleryPage.html">Gallery</a>
                <a href="RoomsPage.html">Rooms</a>
                <a id="current" href="ProductsPage.html">Products</a>
                <a href="EventsPage.html">Events</a>
                <a href="BookingsPage.html" id="bookNow">Book Now</a>
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