<?php
session_start();
include "connection.php";

$uid = $_POST['uid'];
$password= $_POST['password'];


$sql = "SELECT * FROM users WHERE uid = '$uid'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$hash_password = $row['password'];
$hash = password_verify($password, $hash_password);


if($hash ==0){
    header("location: index.php");
    exit();
}else{
    $sql = "SELECT * FROM users WHERE uid = '$uid' AND password='$hash_password'";
    $result = $db->query($sql);
    if(!$row = $result->fetch_assoc()){
        echo "Your username or password is incorrect!";
    }else{
        $_SESSION['login_user'] = $row['login_user'];

    }
    header("Location: success.php");
}
