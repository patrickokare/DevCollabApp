<?php

require 'session.php';
include "connection.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {


$username = $_POST['username'];
$password = $_POST['password'];



 $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

 echo $encrypted_password;

$sql = "INSERT INTO users (username,password)
VALUES ('" . $username . "', '" . $encrypted_password . "');";

$result = $db->query($sql);
header('Location: success.php');



}

