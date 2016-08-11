<?php

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

include ("../connection.php");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($db,'chatbox');

mysqli_query($db,"INSERT INTO logs(`username`,`msg`)
                  VALUES ('$uname','$msg')");

$result1 = mysqli_query($db,"SELECT * FROM logs ORDER by id DESC ");


while($extract = mysqli_fetch_array($result1)){

    echo $extract['username'] . ": ". $extract['msg'] . "<br>";

}


