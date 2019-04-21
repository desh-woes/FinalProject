<?php
$arriveDate = "";
$departDate = "";
$adults = 0;
$kids = 0;
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
    <link rel="import" href="includes/footer.html">
    <title>ReserveRoom</title>
</head>
<body>
<!--Section containing the header, logo and Navigation links-->
<header>
    <!-- Div containing the Logo-->
    <div class="logoImg">
        <!-- Add vertical line to the Logo-->
        <hr>
        <h1>The<br>Bourgeoning<br>Hotel</h1>
    </div>

    <!-- Navigation links in the header-->
    <div class="nav">
        <nav>
            <a href="HomePage.html">Home</a>
            <a href="GalleryPage.html">Gallery</a>
            <a href="RoomsPage.html">Rooms</a>
            <a href="ProductsPage.php">Products</a>
            <a href="EventsPage.html">Events</a>
            <a href="ContactPage.html">Contact</a>
            <a href="BookingsPage.php" id="bookNow">Book Now</a>
        </nav>
    </div>
</header>

<!-- Section containing the booking form -->
<section class="reservationForm">
    <form>
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
                        <select class="floatLabel">
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
                        <select class="floatLabel">
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
                        <select class="floatLabel">
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
                        <select class="floatLabel">
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
                <button type="submit" value="Submit" class="col-1-4">Submit</button>
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