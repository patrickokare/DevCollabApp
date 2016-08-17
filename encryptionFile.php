<?php

include_once "connection.php";
//require 'session.php';
//$username = $_POST['username'];
$key = md5('australia');
$salt = md5('australia');


function encrypt($string, $key){
    $string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
    return $string;
}


function decrypt($string, $key){
    $string = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string),MCRYPT_MODE_ECB));
    return $string;
}

function hashword($string, $salt){
    $string = crypt($string, '$1$'. $salt . '$');
    return $string;
}


    $username = protect($_POST['username']);
    $password = protect($_POST['password']);

function protect($string){
    $string = mysqli_real_escape_string(trim(strip_tags(addslashes($string))));
    return $string;
}



if($_POST['submit'] == 'submit') {
    if($username == NULL){
        echo 'Enter a Username';
    }else {
        if ($password == NULL) {
            echo 'Enter a Password';
        } else {
            $password = hashword($password, $salt);


            $query_run = mysqli_query($db, $query);


            if (mysql_num_rows($query_run) == 1) {
                echo 'The username' . $username . ' already exists.';
            } else {


                $query = "INSERT INTO users (username,password)
                            VALUES ('" . encrypt($username, $key) . "', '" . encrypt($password, $key) . "');";


                if ($query_run = mysqli_query($db, $query)) {
                    header('Location: success.php?username=' . $username);
                } else {
                    echo 'Sorry, We Could not register you at this time. Try again Later.';
                }

            }


        }


    }





