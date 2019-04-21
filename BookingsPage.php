<?php
session_start();
include "PHP/ecommerce/db.php";
$errors = array();

$arriveDate = "";
$departDate = "";
$adults = 0;
$kids = 0;
$name = "";
$email = "";
$phone = "";
$street = "";
$st_number = "";
$city = "";
$country = "";
$post_code = "";
$message = "";
if (isset($_POST['BookingFormFromHomePage'])) {
    $arriveDate = $_POST['CheckIn'];
    $departDate = $_POST['CheckOut'];
    $adults = $_POST['AdultsNumber'];
    $kids = $_POST['KidsNumber'];
}

if (isset($_POST['BookFormFromRoomsPage'])) {
    $arriveDate = $_POST['CheckIn'];
    $departDate = $_POST['CheckOut'];
    $adults = $_POST['AdultsNumber'];
    $kids = $_POST['KidsNumber'];
}
if (isset($_POST['submitBookingsPage'])) {
    $arriveDate = mysqli_real_escape_string($conn, $_POST['arrive']);
    $departDate = mysqli_real_escape_string($conn, $_POST['depart']);
    $adults = mysqli_real_escape_string($conn, $_POST['adults']);
    $kids = mysqli_real_escape_string($conn, $_POST['kids']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $st_number = mysqli_real_escape_string($conn, $_POST['street-number']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $post_code = mysqli_real_escape_string($conn, $_POST['post-code']);
    $message = mysqli_real_escape_string($conn, $_POST['comments']);
    $room = mysqli_real_escape_string($conn, $_POST['room']);
    $bedding = mysqli_real_escape_string($conn, $_POST['bedding']);

    $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user's email exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    if (count($errors) == 0) {

        $query = "INSERT INTO hotels.usersTable (full_name,email,phone,street,st_number,city,country,post_code,arrive,depart,adults,kids,room,bedding,message) 
  			  VALUES('$name','$email','$phone', '$street', '$st_number','$city','$country','$post_code','$arriveDate','$departDate','$adults','$kids','$room','$bedding','$message')";
        mysqli_query($conn, $query);
        if($query){
            array_push($errors, "Not Done");
        }
        $_SESSION['success'] = "Your Details have been registered";
        echo 'success';
//        header('location: RoomsPage.html');
        include 'PHP/errors.php';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="css/BookingsPage.css">
    <link rel="import" href="includes/footerHeader.html">
    <title>ReserveRoom</title>
</head>
<body>
<!--Section containing the header, logo and Navigation links-->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('header');
    document.body.appendChild(content.cloneNode(true));
</script>

<!-- Section containing the booking form -->
<section class="reservationForm">
    <form action="BookingsPage.php" method="post">
        <?php  include 'PHP/errors.php';?>
        <div class="form-group">
            <h2 class="heading">Booking & contact</h2>
            <div class="controls">
                <input type="text" id="name" class="floatLabel" name="name" placeholder="Your Name">
                <!--                <label for="name">Name</label>-->
            </div>
            <div class="controls">
                <input type="text" id="email" class="floatLabel" name="email" placeholder="Your Email">
                <!--                <label for="email">Email</label>-->
            </div>
            <div class="controls">
                <input type="tel" id="phone" class="floatLabel" name="phone" placeholder="Phone">
                <!--                <label for="phone">Phone</label>-->
            </div>
            <div class="grid">
                <div class="col-2-3">
                    <div class="controls">
                        <input type="text" id="street" class="floatLabel" name="street" placeholder="Street">
                        <!--                        <label for="street">Street</label>-->
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <input type="number" id="street-number" class="floatLabel" name="street-number"
                               placeholder="Number">
                        <!--                        <label for="street-number">Number</label>-->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-2-3">
                    <div class="controls">
                        <input type="text" id="city" class="floatLabel" name="city" placeholder="City">
                        <!--                        <label for="city">City</label>-->
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <input type="text" id="post-code" class="floatLabel" name="post-code" placeholder="Post Code">
                        <!--                        <label for="post-code">Post Code</label>-->
                    </div>
                </div>
            </div>
            <div class="controls">
                <input type="text" id="country" class="floatLabel" name="country" placeholder="Country">
                <!--                <label for="country">Country</label>-->
            </div>
        </div>
        <div class="form-group">
            <h2 class="heading">Details</h2>
            <div class="grid">
                <div class="col-1-4 col-1-6-sm">
                    <div class="controls">
                        <h5>Arrive</h5>
                        <input type="date" class="floatLabel" name="arrive"
                               value="<?php echo $arriveDate; ?>">
                        <!--                        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>-->
                    </div>
                </div>
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <h5>Depart</h5>
                        <input type="date" id="depart" class="floatLabel" name="depart"
                               value="<?php echo $departDate; ?>"/>
                        <!--                        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>-->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <h5>Adults</h5>
                        <select class="floatLabel" name="adults">
                            <option value="<?php echo $adults; ?>" selected><?php echo $adults; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                </div>
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <h5>Kids</h5>
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" name="kids">
                            <option value="<?php echo $kids; ?>" selected><?php echo $kids; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                </div>
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <h5>Room</h5>
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" name="room">
                            <option value="blank"></option>
                            <option value="deluxe" selected>With Bathroom</option>
                            <option value="Zuri-zimmer">Without Bathroom</option>
                        </select>
                        <!--                        <label>Room</label>-->
                    </div>
                </div>

                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <h5>Bedding</h5>
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" name="bedding">
                            <option value="blank"></option>
                            <option value="single-bed">Zweibett</option>
                            <option value="double-bed" selected>Doppelbett</option>
                        </select>
                        <!--                        <label>Bedding</label>-->
                    </div>
                </div>

            </div>
            <div class="grid">
                <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
                <br>
                <div class="controls">
                    <textarea name="comments" class="floatLabel" id="comments">I Would like ...</textarea>
                    <!--                    <label for="comments">Comments</label>-->
                </div>
                <button type="submit" value="Submit" class="col-1-4" name="submitBookingsPage">Submit</button>
            </div>
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