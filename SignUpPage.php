<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href="css/HeaderFooter.css" rel="stylesheet" type="text/css">
    <link href="css/SignUpPage.css" rel="stylesheet" type="text/css">
    <meta name="format-detection" content="telephone=no" />
    <title>SignUpPage</title>
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
            <a href="HomePage.php">Home</a>
				<a href="GalleryPage.php">Gallery</a>
				<a href="RoomsPage.php">Rooms</a>
				<a href="ProductsPage.php?category=all">Products</a>
				<a href="EventsPage.php">Events</a>
				<a id="current" href="ContactPage.php">Contact</a>
				<a href="BookingsPage.php" id="bookNow">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Section containing the sign up form -->
    <section class="SignUp">
        <!-- <form action="action_page.php" style="border:1px solid #ccc"> -->
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required onmouseout="validate()">
            <h6 id="psw-feedback" style="color:red"></h6>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button class="signupbtn" onclick="signUp()">Sign Up</button>
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
                    <a href="https://www.instagram.com/?hl=en" target="_blank"><img class="icon"
                            src="images/instagram.png" alt="Instagram"></a>
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
    <script>
        var validated = false;
        

        function signUp() {
            // alert("jdah");
            if (validated) {
                $uname = document.getElementsByName("uname")[0].value;
                $psw = document.getElementsByName("psw")[0].value;

                console.log($uname + " " + $psw);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        if (this.responseText == 1){
                            alert("Saved succesfully");
                            document.getElementsByName("uname")[0].value = "";
                            document.getElementsByName("psw")[0].value = "";
                            document.getElementsByName("psw-repeat")[0].value = "";

                            window.location.href="signupSession.php?username="+$uname;


                        }
                    }
                    else {
                        console.log(this.responseText);
                    }
                };
                var data = new FormData();
                data.append('token', 'webDevGroupTimiErastusOlivierNelson');
                data.append('tag', 'signUp');
                data.append('uname', $uname);
                data.append('psw', $psw);

                xhttp.open("POST", "PHP/ecommerce/engine.php", true);
                xhttp.send(data);



            }
        }

        function validate() {
            $psw = document.getElementsByName("psw")[0].value;
            $pswrepeat = document.getElementsByName("psw-repeat")[0].value;

            if ($psw != $pswrepeat) {
                document.getElementById("psw-feedback").innerHTML = "Password mismatch";
                // alert("Password mismatch");

            }
            else {
                validated = true;
                document.getElementById("psw-feedback").innerHTML = "";
            }
        }



    </script>


</body>

</html>