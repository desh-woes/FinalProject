<?php
// session_start();
include "PHP/ecommerce/db.php";
include 'includes/header.php';
$username = "";
$errors = array();

if (isset($_POST['login_submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    echo "<script>console.log(  '$username'  );</script>";


    if (count($errors) == 0) {
        // $password = m$password;
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: HomePage.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}


?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href="css/HeaderFooter.css" rel="stylesheet" type="text/css">
    <link href="css/LoginPage.css" rel="stylesheet" type="text/css">
    <link rel="import" href="includes/footerHeader.html">
    <title>LoginPage</title>
</head>
<body>

<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('header');
    document.body.appendChild(content.cloneNode(true));
</script> -->

<!-- Login Section -->
<section class="login">
    <form method="post" action="LoginPage.php">
        <?php include('PHP/errors.php'); ?>
        <div class="imgcontainer">
            <img src="images/HotelLogo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" value="<?php echo $username; ?>" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="login_submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</section>

<!-- Section containing the footer of the website -->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('footer');
    document.body.appendChild(content.cloneNode(true));
</script>
</body>
</html>