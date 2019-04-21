<?php
    include "includes/header.php";

?>

    <!-- Section containing the chat area -->
    <section id="chatHolder" class="chatArea">
    
            <!-- <input placeholder="Enter your text here"> <br> -->

        </form> 
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

    <script>
        function loadPreviousChats(){
            var seller = "<?php echo $_GET['seller'];  ?>";
                    var buyer  = "<?php  echo $_SESSION['username']; ?>";
          
            var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					var jsonData = JSON.parse(this.responseText);
                    console.log(this.responseText);
                    
                    
                   

                    // var loggedInUserID = "3";
					var productHolder = document.getElementById("chatHolder");
					for (var x = 0; x < jsonData.length; x++) {
						// console.log(jsonData);
						var newChild ="";                        
                        if(jsonData[x].sender == seller)
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
            data.append('seller', seller);
            data.append('buyer', buyer);

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
            var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					var jsonData = JSON.parse(this.responseText);
					if(jsonData == 1){
                        // alert("its 1");
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
            var seller = "<?php echo $_GET['seller'];  ?>";
            var buyer  = "<?php  echo $_SESSION['username']; ?>";

			var data = new FormData();
			data.append('token', 'webDevGroupTimiErastusOlivierNelson');
			data.append('tag', 'addChat');
            data.append('sender', buyer);
            data.append('receiver', seller);
            data.append('message', message);

			xhttp.open("POST", "PHP/ecommerce/engine.php", true);
			xhttp.send(data);

        }
    
    </script>
</body>
</html>