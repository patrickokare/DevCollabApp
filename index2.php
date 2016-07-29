<?php

$name = $_FILES['file']['name']; //file name
//$size = $_FILES['file']['size']; //file size
//$type = $_FILES['file']['type']; //file type

echo $tmp_name = $_FILES['file']['tmp_name']; //temp location on serve

die();

if(isset($name)){
    if(!empty($name)){

       $location = 'uploads/';

  //      move_uploaded_file($tmp_name);


    }else{

        echo 'Please choose a file.';
    }

}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>


<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="Submit"/>

</form>



</body>
