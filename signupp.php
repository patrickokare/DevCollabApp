<?php

require 'session.php';
include "connection.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {


$username = $_POST['username'];
$password = $_POST['password'];

md5($password);


$sql = "INSERT INTO users (username,password)
VALUES ('" . $username . "', '" . $password . "');";

$result = $db->query($sql);
header('Location: success.php');



}

