<!-- Developed by Wale Patrick August 2016 -->

<?
session_start();

if(isset($_GET['logout'])){

    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);

    session_destroy();
    header("Location: index.php"); //Redirect the user
}

function loginForm(){
    echo'
	<div id="loginform">
	<form action="index.php" method="post">
		<p>Enter the name you want to be identified among other users:</p>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div>
	';
}

if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
?>


<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="codemirror/plugin/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css">

  <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
    <h2> ARRAYTECH COLLABORATIVE ENVIRONMENT </h2>
    <nav>

        <ul>
            <li> <a href="index.php"> HOME </a> </li>
            <li> <a href="#"> FEATURES </a> </li>
            <li> <a href="#"> ABOUT THE PROJECT</a> </li>
        </ul>

    </nav>

</header>


<div id="left">

    <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

<textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="20" cols="60">
    <?php echo $comment; ?>
</textarea>
        <br>
        <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

    </form>

    <div id="preview-comment">
<label> OUTPUT
    <textarea  rows="20" cols="80">

        <?php echo $comment; ?>

    </textarea>
        </label>
</div>
    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>
</div>

<div id="right">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-hangout" data-render="createhangout"
     data-initial_apps="[{ app_id : '123456789012', start_data : 'dQw4w9WgXcQ', 'app_type' : 'ROOM_APP' }]">
</div>

</div>



<div id="right1">

    <?php
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else{
        ?>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
                <div style="clear:both"></div>
            </div>

            <div id="chatbox">
                <?php
                if(file_exists("log.html") && filesize("log.html") > 0){
                    $handle = fopen("log.html", "r");
                    $contents = fread($handle, filesize("log.html"));
                    fclose($handle);

                    echo $contents;
                }
                ?>
            </div>

            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" size="63" />
                <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
            </form>
        </div>
        <script type="text/javascript" src="codemirror/js/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function(){
                //If user submits the form
                $("#submitmsg").click(function(){
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", {text: clientmsg});
                    $("#usermsg").attr("value", "");
                    return false;
                });

                //Load the file containing the chat log
                function loadLog(){
                    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function(html){
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
                            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }
                        },
                    });
                }
                setInterval (loadLog, 2500);	//Reload file every 2.5 seconds

                //If user wants to end session
                $("#exit").click(function(){
                    var exit = confirm("Are you sure you want to end the session?");
                    if(exit==true){window.location = 'index.php?logout=true';}
                });
            });
        </script>
        <?php
    }
    ?>

</div>










<br>
<br>
<br>
<br>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/577687e86d4b9c1403db8444/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->





<footer class="footer">
  <p> Msc Project- Developed by Wale Patrick 2016(c) </p>


</footer>
</body>
</html>

