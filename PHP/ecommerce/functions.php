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

function getRooms(){
    $return_arr = array();
   $query  = "SELECT name, price, size, roomsNumber FROM rooms WHERE booked='false'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)  > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $row_array['name'] = $row['name'];
            $row_array['price'] = $row['price'];
            $row_array['size'] = $row['size'];
            $row_array['roomsNumber'] = $row['roomsNumber'];
        
            array_push($return_arr,$row_array);
           }
    }
    mysqli_close($conn);

    return $return_arr;

}