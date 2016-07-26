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
