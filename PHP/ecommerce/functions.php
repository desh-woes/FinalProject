<?php

include "db.php";


function getAllProducts(){
    include "db.php";

    $return_arr = array();

    $stmt = $mysqli->prepare("SELECT * FROM products");
    // $stmt->bind_param("si", $category, 1);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    while($row = $result->fetch_assoc()) {
    $row_array['id'] = $row['product_id'];
    $row_array['name'] = $row['product_name'];
    $row_array['price'] = $row['product_price'];
    $row_array['desc'] = $row['description'];
    $row_array['category'] = $row['product_category'];
    $row_array['seller_id'] = $row['seller_id'];


    array_push($return_arr,$row_array);
    }
    // var_export($ages);
    $stmt->close();
    return $return_arr;
}


function getProducts($category){
    include "db.php";

    $return_arr = array();

    $stmt = $mysqli->prepare("SELECT * FROM products WHERE product_category = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit('No rows');
    while($row = $result->fetch_assoc()) {
    $row_array['id'] = $row['product_id'];
    $row_array['name'] = $row['product_name'];
    $row_array['price'] = $row['product_price'];
    $row_array['desc'] = $row['description'];
    $row_array['category'] = $row['product_category'];
    $row_array['seller_id'] = $row['seller_id'];


    array_push($return_arr,$row_array);
    }
    // var_export($ages);
    $stmt->close();
    return $return_arr;
}


function displayChats($sender, $receiver){
    include "db.php";


    $stmt1 = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $idFromUsername = "";

    if (
		$stmt1 &&
		$stmt1 -> bind_param('s',$sender) &&
		$stmt1 -> execute()
	) {
         // new item added to cart
         $result = $stmt1->get_result();
         $row = $result->fetch_assoc();
         $idFromUsername = $row['id'];
    }

    
    $return_arr = array();

    $query = "SELECT * FROM chats WHERE sender IN ('$idFromUsername', '$receiver')";
    $result = mysqli_query($conn, $query);

   
    while($row = mysqli_fetch_assoc($result)) {
        $row_array['sender'] = $row['sender'];
        $row_array['receiver'] = $row['receiver'];
        $row_array['message'] = $row['message'];
        $row_array['date'] = $row['date'];


    array_push($return_arr,$row_array);
    }
   
    return $return_arr;
}




function addChat($sender, $receiver, $message){
    include "db.php";

    //get id from login session username


    $stmt1 = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $idFromUsername = "";

    if (
		$stmt1 &&
		$stmt1 -> bind_param('s',$sender) &&
		$stmt1 -> execute()
	) {
         // new item added to cart
         $result = $stmt1->get_result();
         $row = $result->fetch_assoc();
         $idFromUsername = $row['id'];
    }
    

    

    $stmt = $conn->prepare("INSERT INTO chats (receiver, sender, message) VALUES (?,?,?)");

    if (
		$stmt &&
		$stmt -> bind_param('sss', $receiver, $idFromUsername, $message) &&
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

    $stmt = $conn->prepare('INSERT INTO products (product_id, product_name, product_price, description, product_category) VALUES(?,?,?,?,?)');
    if (
        $stmt &&
		$stmt -> bind_param('sssss', $productId, $name, $price, $desc, $categ) &&
		$stmt -> execute()
	) {
         // new product added to database
         return 1;
    } 
    else{
        return 0;
    }
}

function signUp($username, $password){
    include "db.php";

    $stmt = $conn->prepare('INSERT INTO users (user_name, password) VALUES(?,?)');
    $password = md5($password);
    if (
        $stmt &&
		$stmt -> bind_param('ss', $username, $password) &&
		$stmt -> execute()
	) {
         // user signed up succesfully
         return 1;
    } 
    else{
        return 0;
    }

}


