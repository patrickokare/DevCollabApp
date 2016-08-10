<?php

ini_set("display_errors","on");
if(!isset($dbh)){
//  session_start();
date_default_timezone_set("UTC"); // Set Time Zone

$host = "us-cdbr-azure-west-c.cloudapp.net"; // Hostname

$port = "3306"; // MySQL Port : Default : 3306

$user = "bfe9385d933daf"; // Username Here

$pass = "d5ed3424"; //Password Here

$db   = "karetechdb"; // Database Name

$dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);

/*Change The Credentials to connect to database.*/

include("user_online.php");
}

?>

