<?php
    $conn = mysqli_connect("localhost","root","","hotels");

    if(!$conn){
            echo "DB connection error";
    }


    try {
        $mysqli = new mysqli("localhost", "root", "", "hotels");
      } catch(Exception $e) {
        // error_log($e->getMessage());
        exit('Error connecting to database'); //Should be a message a typical user could understand
      }
?>