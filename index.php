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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>

<body>

<header>
    <h2> ArrayTech Collaborative Environment </h2>
    <nav>

        <ul>
            <li> <a href="index.php"> HOME </a> </li>
            <li> <a href="#"> FEATURES </a> </li>
        </ul>

    </nav>

</header>

<p> Website Schematics </p>


<div id="right">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-hangout" data-render="createhangout"
     data-initial_apps="[{ app_id : '123456789012', start_data : 'dQw4w9WgXcQ', 'app_type' : 'ROOM_APP' }]">
</div>

</div>



</div>

<!-- Implementing Ace API Code Snippet for the Code editor -->
<div id="editor">some text</div>
<script src="src/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
</script>

<script src="src/mode-javascript.js" type="text/javascript" charset="utf-8">

var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
editor.session.setMode(new JavaScriptMode());

</script>
<script src="src/theme-twilight.js" type="text/javascript" charset="utf-8">
editor.setTheme("ace/theme/twilight");
</script>
<!-- end -->







<br>
<br>

<div id="right">
    <a class="twitter-timeline"  href="https://twitter.com/hashtag/MobileApplication" data-widget-id="753417739293908992">#MobileApplication Tweets</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>



















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
  <p> Msc Project - Property of Wale Patrick 2016(c) </p>


</footer>
</body>
</html>

