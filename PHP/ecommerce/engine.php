<?php


//actions
    //get all products
    //add product to cart
    //show all added products
    //checkout product/products


include "functions.php";

//check to see if our web app is the one sending the request
if(isset($_POST["token"]) == "webDevGroupTimiErastusOlivierNelson"){

    $tag = $_POST['tag'];

    switch ($tag) {
        case 'getProducts':
            $res = getProducts();

            echo json_encode($res);

            break;


        case 'addProductToCart':
            $productID = $_POST['productID'];
            $userID = $_POST['userID'];
            $res = addToCart($productID, $userID);

            echo json_encode($res);

            break;

        case 'showProductsInCart':
            $userID = $_POST['userID'];
            $res = showCart($userID);

            echo json_encode($res);

            break;


        case 'checkOutProducts':
            $userID = $_POST['userID'];
            $products = $_POST['productID_array'];
            $res = checkout($userID, $products);

            echo json_encode($res);

            break;

        case 'getRooms':
            $res=getRooms();
            
            echo json_encode($res);

            break;
        
        default:
            # code...
            break;
    }
}