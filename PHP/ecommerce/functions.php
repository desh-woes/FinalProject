<?php

include "db.php";

function getProducts(){
    include "db.php";
    $return_arr = array();
    $query = "select * from products";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)  > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $row_array['id'] = $row['product_id'];
            $row_array['name'] = $row['product_name'];
            $row_array['price'] = $row['product_price'];
            $row_array['desc'] = $row['description'];
        
            array_push($return_arr,$row_array);
           }
    }

    mysqli_close($conn);
    return $return_arr;
}


function displayChats(){
    include "db.php";
    $return_arr = array();
    $query = "select * from chats";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)  > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $row_array['sender'] = $row['sender'];
            $row_array['receiver'] = $row['receiver'];
            $row_array['message'] = $row['message'];
            $row_array['date'] = $row['date'];
        
            array_push($return_arr,$row_array);
           }
    }

    mysqli_close($conn);
    return $return_arr;
}




function addChat($sender, $receiver, $message){
    include "db.php";

    $stmt = $conn->prepare("INSERT INTO chats (receiver, sender, message) VALUES (?,?,?)");

    if (
		$stmt &&
		$stmt -> bind_param('sss', $receiver, $sender, $message) &&
		$stmt -> execute()
	) {
         // new item added to cart
         return 1;
    }
    
    else{
        return 0;
    }


}


function addToCart($productId, $userID){
    $stmt = $conn->prepare('INSERT INTO cart (productID, userID) VALUES (?,?)');

    if (
		$stmt &&
		$stmt -> bind_param('ss', $productId, $userID) &&
		$stmt -> execute()
	) {
         // new item added to cart
         return 1;
    }
    
    else{
        return 0;
    }
}


function showCart($userID){
    $return_arr = array();
    $stmt = $conn -> prepare('SELECT name, price FROM products WHERE productID IN (SELECT productID FROM cart WHERE userID = ?)');

    if (
        $stmt &&
        $stmt -> bind_param('s', $userID) &&
        $stmt -> execute() &&
        $stmt -> store_result() &&
        $stmt -> bind_result($name, $price)
    ) {
    
        while ($stmt -> fetch()) {
            echo "$name: $price <br>";

            $res = ["name" => $name, "price" => $price];

            array_push($return_arr, $res);
        }

        return $return_arr;
    
    } else {
        echo 'Prepared Statement Error';
        return 0;
    }
}


function checkout($userID, $products){
    //either update cart table or 
    //delete from cart table and add it in checkout table
}
//  Select all the rooms from database
function getRooms(){
    include "db.php";
    $return_arr = array();
   $query  = "SELECT name, price, size, rooms FROM rooms ";

    $result = mysqli_query($conn, $query);
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)  > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $row_array['name'] = $row['name'];
            $row_array['price'] = $row['price'];
            $row_array['size'] = $row['size'];
            $row_array['rooms'] = $row['rooms'];
        
            array_push($return_arr,$row_array);
           }
    }
    mysqli_close($conn);

    return $return_arr;
}

// Insert a new product in the database
function addProduct($productId, $name, $price, $desc, $categ ){
    include "db.php";

    $stmt = $conn->prepare('INSERT INTO products (product_id, product_name, product_price, description) VALUES(?,?,?,?)');
    if (
        $stmt &&
		$stmt -> bind_param('ssss', $productId, $name, $price, $desc) &&
		$stmt -> execute()
	) {
         // new product added to database
         return 1;
    } 
    else{
        return 0;
    }


}


