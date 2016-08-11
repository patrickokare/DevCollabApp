<?php
session_start();

$uname = $_SESSION['login_user'];
$msg = $_REQUEST['msg'];

include ("../connection.php");


mysqli_select_db($db,'chatbox');

mysqli_query($db,"INSERT INTO logs(`username`,`msg`)
                  VALUES ('$uname','$msg')");

$result1 = mysqli_query($db,"SELECT * FROM logs ORDER by id DESC ");


while($extract = mysqli_fetch_array($result1)){

    echo "<span class='uname'>" . $extract['username'] ."</span> : <span class='msg'> ". $extract['msg'] . "<br>";

}


