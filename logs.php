<?php


include ("connection.php");
mysqli_select_db($db,'chatbox');
$result1 = mysqli_query($db,"SELECT * FROM logs ORDER by id DESC ");


while($extract = mysqli_fetch_array($result1)){

    echo "<span class='uname'>" . $extract['username'] ."</span> : <span class='msg'> ". $extract['msg'] . "<br>";

}


