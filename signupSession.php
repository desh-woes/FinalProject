<?php
session_start();

$username = $_GET['username'];

$_SESSION['username'] = $username;

header('Location:HomePage.php');


?>