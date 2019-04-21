<?php
    $conn = mysqli_connect("localhost","erastus","eckahs9833","hotels");

    if(!$conn){
            echo "DB connection error";
    }


    try {
        $mysqli = new mysqli("localhost", "erastus", "eckahs9833", "hotels");
      } catch(Exception $e) {
        // error_log($e->getMessage());
        exit('Error connecting to database'); //Should be a message a typical user could understand
      }
?>