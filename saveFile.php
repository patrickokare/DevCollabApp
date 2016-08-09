<?php

$path = 'uploads/';
$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
    $comment = $_POST['preview-form-comment'];


    if (isset($_POST['submit'])) { //checking for anythiing will break the code
        $comment = $_FILES['file']['name']; //file name
        $tmp_name = $_FILES['file']['tmp_name']; //temp location on server
        if (isset($name)) {
            save_file($comment,  $tmp_name, $path); //call my function
         echo 'Success!';
        }else{
           echo 'Failed';
        }


    }

}