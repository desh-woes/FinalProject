<?php


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


//actions
    //get all products
    //add product to cart
    //show all added products
    //checkout product/products
 

include "functions.php";

// echo $_POST["token"];
//check to see if our web app is the one sending the request
if(isset($_POST["token"]) == "webDevGroupTimiErastusOlivierNelson"){


    $tag = $_POST['tag'];

    switch ($tag) {
        case 'getProducts':
            $res = getProducts();

            echo json_encode($res);
        
            break;


        case 'getChats':
            $res = displayChats();

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

        case 'addChat':
            $sender = $_POST['sender'];
            $receiver = $_POST['receiver'];
            $message = $_POST['message'];
            $res = addChat($sender, $receiver, $message);
            
        case 'addProduct':
            $productID = 'p000012';
            $name = $_POST['ProductName'];
            $desc = $_POST['productDescription'];
            $categ = $_POST['categories'];
            $price = $_POST['Price'];
            echo "Some";

            $res = addProduct($productID, $name, $price, $desc, $categ);

            echo json_encode($res);

            break;
        
        default:
            # code...
            break;
    }
}

?>