<?php 
session_start();

// if(!isset($_SESSION['name'])){
// header("Location:HomePage.html");
// }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChatRoom</title>
    <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/ChatRoom.css">
</head>
<body onload="loadPreviousChats()">
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
                <a id="current" href="ProductsPage.html">Products</a>
                <a href="EventsPage.html">Events</a>
                <a href="ContactPage.html">Contact</a>
                <a href="BookingsPage.html" id="bookNow">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Section containing the chat area -->
    <section id="chatHolder" class="chatArea">
        <!-- <div class="container">
            <img src="images/chat1.png" alt="Avatar">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
        </div>

        

        <div class="container">
            <img src="images/chat1.png" alt="Avatar">
            <p>Sweet! So, what do you wanna do today?</p>
            <span class="time-right">11:02</span>
        </div>

        <div class="container darker">
            <img src="images/chat2.png" alt="Avatar" class="right">
            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
            <span class="time-left">11:05</span>
        </div> -->

        <!-- <form id="submitChat">
            <input placeholder="Enter your text here"> <br>

        </form> -->
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
                    <button>Contact Us</button>
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

    <script>
        function loadPreviousChats(){
          
            var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					var jsonData = JSON.parse(this.responseText);

                    var loggedInUserID = "user100000";
					var productHolder = document.getElementById("chatHolder");
					for (var x = 0; x < jsonData.length; x++) {
						// console.log(jsonData);
						var newChild ="";                        
                        if(jsonData[x].sender != loggedInUserID)
                        { 
                            newChild = ' <div class="container"><img src="images/chat1.png" alt="Avatar"><p>'+jsonData[x].message+'</p><span class="time-right">'+jsonData[x].date+'</span></div>';
                        }
                        else{
                            newChild = '<div class="container darker"><img src="images/chat2.png" alt="Avatar" class="right"><p>'+jsonData[x].message+'</p><span class="time-left">'+jsonData[x].date+'</span></div>';
                        }
						productHolder.insertAdjacentHTML('beforeend', newChild);

					}
                    var chatInput = ' <div id="submitChat"><input id="chatInputBox" onkeypress="return onChatKeyPress(event)" placeholder="Enter your text here"> <br><!--            <button type="submit" form="submitChat">Send</button>--></div>';
                    productHolder.insertAdjacentHTML('beforeend', chatInput);
				}

				else {
					// console.log(this.responseText);
				}
			};
			var data = new FormData();
			data.append('token', 'webDevGroupTimiErastusOlivierNelson');
			data.append('tag', 'getChats');

			xhttp.open("POST", "PHP/ecommerce/engine.php", true);
			xhttp.send(data);



        }


        function onChatKeyPress(event){
            if (event.which == 13 || event.keyCode == 13) {
                // alert("enter clicked");

                chatSubmit();                
        
            }
        }


        function chatSubmit(){

            //  = document.getElementById("submitChat");
            
          


            // alert("chat submit called");
            

            var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					var jsonData = JSON.parse(this.responseText);
					if(jsonData == 1){
                        window.location.reload();

                    }

                    else{

                        console.log(this.responseText);
                        
                    }				
				}

				else {
					console.log(this.responseText);
				}
			};

            var message = document.getElementById("chatInputBox").value;
            console.log(message);
			var data = new FormData();
			data.append('token', 'webDevGroupTimiErastusOlivierNelson');
			data.append('tag', 'addChat');
            data.append('sender', 'user100000');
            data.append('receiver', 'user100001');
            data.append('message', message);

			xhttp.open("POST", "PHP/ecommerce/engine.php", true);
			xhttp.send(data);

        }
    
    </script>
</body>
</html>