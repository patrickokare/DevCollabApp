<?php

$name = $_FILES['file']['name']; //file name
//$size = $_FILES['file']['size']; //file size
//$type = $_FILES['file']['type']; //file type

 $tmp_name = $_FILES['file']['tmp_name']; //temp location on serve

if(isset($name)){
    if(!empty($name)){

        $location = 'uploads/';

  if( move_uploaded_file($tmp_name,$location.$name)){
      echo 'Uploaded!';

  }


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


<form action="index2.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="Submit"/>

</form>



</body>
