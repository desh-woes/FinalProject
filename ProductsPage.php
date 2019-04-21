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
    <link rel="import" href="includes/footerHeader.html">
    <title>Products Page</title>
</head>

<body onload="getProducts()">
<!--Section containing the header, logo and Navigation links-->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('header');
    document.body.appendChild(content.cloneNode(true));
</script>

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
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('footer');
    document.body.appendChild(content.cloneNode(true));
</script>


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

                    var newChild = '<div class="card"><img src="images/addProduct.jpg"><h1>' + jsonData[x].name + '</h1><p class="price">$' + jsonData[x].price + '</p><p>' + jsonData[x].desc + '</p><p><button onclick="contactSeller()">Contact Seller</button></p></div>';
                    productHolder.insertAdjacentHTML('beforeend', newChild);

                }

            } else {
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


    function contactSeller() {

        window.location.href = "ChatRoom.php";
    }

</script>
</body>

</html>