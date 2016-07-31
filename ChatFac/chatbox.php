<?php
include("config.php");
if(isset($_SESSION['user'])){
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title> ChatBox</title>

    <link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="chatbox">
    <div class="chatlogs">

        <div class="chat">


    <h2>Chat Room</h2>

    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Log Out</a>

            <p class="chat-message">
                <?include("msgs.php");

                ?>


            </p>

    </div>
</div>


        <div class="chat-form">

            <textarea>




            </textarea>
            <button>Send</button>

        </div>
    </div>
</body>
</html>


    <?
}
?>

