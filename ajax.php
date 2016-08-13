<?php

$max_size = 12400000000;
$location = 'uploads/'; //where the file is going
if (isset($_POST['submit'])) { //checking for anythiing will break the code
    $name = $_FILES['file']['name']; //file name
    $size = $_FILES['file']['size']; //file size
    $type = $_FILES['file']['type']; //file type
    $tmp_name = $_FILES['file']['tmp_name']; //temp location on server

    if(checkType($name, $type) && checkSize($size, $max_size)){
        if (isset($name)) {
            save_file($tmp_name, $name, $location); //call my function
        }
    }
} else {
    echo 'Select A File For Upload : <br>';
    echo '<br>';
}

function checkType($name, $type){

    // $extension = strtolower(substr($name, strpos($name, '.') + 1)); //get the extension
    // $extension = pathinfo($name, PATHINFO_EXTENSION); //better way to get extension



    if (!empty($name)) {

        return true;
    } else{
        echo 'Failed!';
        return false;
    }

}
function checkSize($size, $max_size){
    if($size <= $max_size){
        return true;
    } else{
        echo 'Your file is too large.  Max size in 12MB!.';
        return false;
    }
}
function fileExists($name){
    $filename = rand(1000,9999).md5($name).rand(1000, 9999);
    echo $filename;
    return false;
}
function save_file($tmp_name, $name, $location)
{
    $og_name = $name;
    //so long as the name is in existance - loop to check new name after it is generated
    while (file_exists('uploads/' . $name)) {
        echo 'File already exists. Generating name.<br/>';
        $rand = rand(10000, 99999);
        $name = $rand . '.' . pathinfo($name, PATHINFO_EXTENSION); //create new name
    }
    if (move_uploaded_file($tmp_name, $location . $name)) {

        echo '<span style="color: darkred">  Success ' . $og_name . ' was uploaded! </span>';


        // header("Location:Home.php");

        if (!($og_name == $name)) { //if original name != name
            echo ' and renamed to ' . $name . '.<br/>';
        } else {
            echo '.';
        }
    } else {
        echo 'ERROR!';
    }

}


