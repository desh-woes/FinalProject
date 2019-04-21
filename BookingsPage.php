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
    // echo $adults;
    // echo $kids;
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
    <meta name="format-detection" content="telephone=no"/>
    <title>ReserveRoom</title>
</head>
<body>
<!--Section containing the header, logo and Navigation links-->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('header');
    document.body.appendChild(content.cloneNode(true));
</script>

<!-- Section containing the product page banner -->
<section class="productBanner">
        <!--Page title-->
        <div class="pageTitle">
            <h1>Book Now</h1>
        </div>

        <!--Page banner-->
        <div class="pageImg">
            <img alt="ProductImg" src="images/book-now.jpg">
        </div>
    </section>

<!-- Section containing the booking form -->
<section class="reservationForm">
    <div id="form">
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
                        <select class="floatLabel" name="bathroom">
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
                        <select class="floatLabel" name="bed">
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
                <button  value="Submit" class="col-1-4" onclick="bookNow()"> Submit</button>
            </div>
        </div>
        </div>
</section>

<!-- Section containing the footer of the website -->
<footer>
    <hr>
    <div class="footerDetails">
        <div>
            <h4>24 KG 414 St, Kigali<br>Kigali Heights, Left wing | <b>+250780609528</b></h4>
            <div class="socialMedia">
                <a href="https://twitter.com/home" target="_blank"><img class="icon" src="images/twitter.png"
                                                                        alt="twitter"></a>
                <a href="https://www.facebook.com/" target="_blank"><img class="icon" src="images/facebook.png"
                                                                         alt="facebook"></a>
                <a href="https://www.instagram.com/?hl=en" target="_blank"><img class="icon" src="images/instagram.png"
                                                                                alt="Instagram"></a>
                <button onclick="window.location.href = 'ContactPage.html'">Contact Us</button>
            </div>
            <h3>&#0169 2023 by the group 3</h3>
        </div>

        <div class="mailingList">
            <h4>Join Our Mailing List</h4>
            <form id="mailingListForm">
                <label>
                    <input type="text" placeholder="Enter your email here">
                </label>
            </form>
            <button type="submit" form="mailingListForm">Subscribe</button>
        </div>
    </div>
</footer>


<!-- Script to send a http request -->
<script >
//  Function to validate the form on the bookings page
function validate_text2() {
    let name = document.getElementsByName("name")[0].value;
    let email= document.getElementsByName("email")[0].value;
    let phone = document.getElementsByName("phone")[0].value;
    let arrive = document.getElementsByName("arrive")[0].value;
    let depart = document.getElementsByName("depart")[0].value;

    // Logic to validate that neither the name box not the email address box is left blank
    if (name.trim() === "" || email.trim() === ""|| phone.trim() === ""|| arrive.trim() === ""|| depart.trim() === "") {
        alert("Blank values are not allowed for the Name, email, Phone, Arival and depature categories");
        return false;
    }
}

		
        function bookNow(){
            if(validate_text2()){
            $name = document.getElementsByName("name")[0].value;
            $email= document.getElementsByName("email")[0].value;
            $phone = document.getElementsByName("phone")[0].value;
            $street = document.getElementsByName("street")[0].value;
            $streetnumber = document.getElementsByName("street-number")[0].value;
            $city = document.getElementsByName("city")[0].value;
            $postcode = document.getElementsByName("post-code")[0].value;
            $country = document.getElementsByName("country")[0].value;
            $arrive = document.getElementsByName("arrive")[0].value;
            $depart = document.getElementsByName("depart")[0].value;
            $adults = document.getElementsByName("adults")[0].value;
            $kids = document.getElementsByName("kids")[0].value;
            $comments = document.getElementsByName("comments")[0].value;
            $bed = document.getElementsByName("bed")[0].value;
            $bathroom = document.getElementsByName("bathroom")[0].value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var doc = document.getElementById('form');
                doc.innerHTML = "<h2 id='res'>Thank you for choosing our hotel, your booking was successfully saved</h2>";

                console.log(this.responseText);
                
            }
            else {
                console.log(this.responseText);
            }
        };
        var data = new FormData();
        data.append('token', 'webDevGroupTimiErastusOlivierNelson');
        data.append('tag', 'bookNow');
        data.append('name', $name);
        data.append('email',$email);
        data.append('phone',$phone);
        data.append('street',$street);
        data.append('streetnumber',$streetnumber);
        data.append('city',$city);
        data.append('postcode',$postcode);
        data.append('country',$country);
        data.append('arrive',$arrive);
        data.append('depart',$depart);
        data.append('adults',$adults);
        data.append('kids',$kids);
        data.append('comments',$comments);
        data.append('bed',$bed);
        data.append('bathroom',$bathroom);
        
        

        xhttp.open("POST", "PHP/ecommerce/engine.php", true);
        xhttp.send(data);
    }

        }

    </script>
</body>
</html>