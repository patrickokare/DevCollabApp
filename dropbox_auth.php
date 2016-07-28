<?php
include ("start.php");


if($user->dropbox_token){

}else{

    $authUrl = $webAuth->start();
    header('Location: ' . $authUrl);
    exit();

}