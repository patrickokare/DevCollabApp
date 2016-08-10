<?php
include("config.php");
include("messglogin.php");
?>

<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="chat.js"></script>
    <link href="chat.css" rel="stylesheet"/>
    <title>Real-time ChatBox</title>
</head>

<body>

<div id="content" style="margin-top:10px;height:100%;">
    <div class="chat">
        <div class="users">
            <?include("users.php");?>
        </div>

        <div class="chatbox">
            <?
            if(isset($_SESSION['login_user'])){
                include("chatbox.php");
            }else{
                $display_case=true;
                include("messglogin.php");
            }
            ?>

        </div>

    </div>
</div>

</body>

</html>
