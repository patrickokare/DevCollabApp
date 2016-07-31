
<?php

include("config.php");
$sql=$dbh->prepare("SELECT * FROM messages");
$sql->execute();
while($r=$sql->fetch()){

    echo "

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name =\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> ChatBox</title>

    <link href=\"style1.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<div class=\"chatbox\">
    <div class=\"chatlogs\">

<div class=\"chat\">

title='{$r['posted']}'>
 <span class='name'>{$r['name']}
 </span> :
  <p class=\"chat-message\"> {$r['msg']}

</p>

</div>

 </div>

</div>

</body>
</html>


 ";

}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
    echo "<script>window.location.reload()</script>";
}

?>

