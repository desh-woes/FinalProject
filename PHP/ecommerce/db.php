<?php
    $conn = mysqli_connect("localhost","root","","hotels");

    if(!$conn){
            echo "DB connection error";
    }
?>