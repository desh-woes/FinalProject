<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="css/AddProduct.css">
    <link rel="stylesheet" type="text/css" href="css/ProductsPage.css">
    <title>Add Products</title>
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

    <div id="addBlock">
        <div id="image">
            <img src="">
            <h1>Upload Product Image</h1>
        </div>

        <div id="info-form">
            <div id="info">
                <h3>Product Info</h3>
            </div>
            <div id="form">
                <div id="left">

                    <label>
                        <input type="text" name="ProductName" placeholder="Enter Your Product name">
                    </label>
                    <textarea placeholder="Write a brief description of your product here"
                              name="productDescription"></textarea>

                </div>

                <div id="right">
                    <label for="dropdown">
                        <select name="categories" id="dropdown">
                            <option value="">Select an item from the list</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Food Items">Food Items</option>
                            <option value="Art Work">Art Work</option>
                        </select>
                    </label>


                    <input type="text" name="Price" placeholder="Enter the price of the product">
                    <div id="agree">

                        <input type="checkbox" name="Legal">
                        <p>By checking here you agree to our <a href="#">terms and conditions.</a> Make sure your read
                            thorugh them before signing this.</p>
                    </div>
                </div>
            </div>
            <button onclick="addProduct()">Save</button>
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

<!-- Script to send a http request -->
<script>

    function addProduct() {
        // console.log("sna");
        // alert("loaded");
        $name = document.getElementsByName("ProductName")[0].value;
        $desc = document.getElementsByName("productDescription")[0].value;
        $price = document.getElementsByName("Price")[0].value;
        $categ = document.getElementsByName("categories")[0].value;

        // console.log($name + " " + $desc + $price + $categ + " " + " ");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            } else {
                console.log(this.responseText);
                // alert("not connected yet");
            }
        };
        var data = new FormData();
        data.append('token', 'webDevGroupTimiErastusOlivierNelson');
        data.append('tag', 'addProduct');
        data.append('ProductName', $name);
        data.append('productDescription', $desc);
        data.append('Price', $price);
        data.append('categories', $categ);

        xhttp.open("POST", "PHP/ecommerce/engine.php", true);
        xhttp.send(data);

    }

</script>

</body>

</html>