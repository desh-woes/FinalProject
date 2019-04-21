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
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/ChatRoom.css">
    <link rel="import" href="includes/footerHeader.html">
</head>
<body onload="loadPreviousChats()">
<!--Section containing the header, logo and Navigation links-->
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('header');
    document.body.appendChild(content.cloneNode(true));
</script>

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
<script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import.querySelector('footer');
    document.body.appendChild(content.cloneNode(true));
</script>

<script>
    function loadPreviousChats() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonData = JSON.parse(this.responseText);

                var loggedInUserID = "user100000";
                var productHolder = document.getElementById("chatHolder");
                for (var x = 0; x < jsonData.length; x++) {
                    // console.log(jsonData);
                    var newChild = "";
                    if (jsonData[x].sender != loggedInUserID) {
                        newChild = ' <div class="container"><img src="images/chat1.png" alt="Avatar"><p>' + jsonData[x].message + '</p><span class="time-right">' + jsonData[x].date + '</span></div>';
                    } else {
                        newChild = '<div class="container darker"><img src="images/chat2.png" alt="Avatar" class="right"><p>' + jsonData[x].message + '</p><span class="time-left">' + jsonData[x].date + '</span></div>';
                    }
                    productHolder.insertAdjacentHTML('beforeend', newChild);

                }
                var chatInput = ' <div id="submitChat"><input id="chatInputBox" onkeypress="return onChatKeyPress(event)" placeholder="Enter your text here"> <br><!--            <button type="submit" form="submitChat">Send</button>--></div>';
                productHolder.insertAdjacentHTML('beforeend', chatInput);
            } else {
                // console.log(this.responseText);
            }
        };
        var data = new FormData();
        data.append('token', 'webDevGroupTimiErastusOlivierNelson');
        data.append('tag', 'getChats');

        xhttp.open("POST", "PHP/ecommerce/engine.php", true);
        xhttp.send(data);


    }


    function onChatKeyPress(event) {
        if (event.which == 13 || event.keyCode == 13) {
            // alert("enter clicked");

            chatSubmit();

        }
    }


    function chatSubmit() {

        //  = document.getElementById("submitChat");


        // alert("chat submit called");


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonData = JSON.parse(this.responseText);
                if (jsonData == 1) {
                    window.location.reload();

                } else {

                    console.log(this.responseText);

                }
            } else {
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