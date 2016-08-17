<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password= $_POST['password'];


$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$hash_password = $row['password'];
$hash = password_verify($password, $hash_password);


if($hash ==0){
    header("location: index.php?error=$error");
    exit();
}else{
    $sql = "SELECT * FROM users WHERE username = '$username' AND password='$hash_password'";
    $result = $db->query($sql);
    if(!$row = $result->fetch_assoc()){
        echo "Your username or password is incorrect!";
    }else{
        $_SESSION['login_user'] = $row['username'];

    }
    header('Location: success.php?username=' . $username);
}
