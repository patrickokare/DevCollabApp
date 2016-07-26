<?
session_start();

if(isset($_GET['logout'])){

    //Simple exit message
    $fp = fopen("log.php", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);

    session_destroy();
    header("Location: index2.php"); //Redirect the user
}

function loginForm(){
    echo'
	<div id="loginform">
	<form action="index2.php" method="post">
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
            if(file_exists("log.php") && filesize("log.php") > 0){
                $handle = fopen("log.php", "r");
                $contents = fread($handle, filesize("log.php"));
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
                    url: "log.php",
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
                if(exit==true){window.location = 'index2.php?logout=true';}
            });
        });
    </script>
    <?php
}
?>