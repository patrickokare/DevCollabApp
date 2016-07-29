<?php

echo $name = $_FILES['file']['name'];


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature</title>
</head>

<body>


<h3> Upload Your Files Here </h3>

<form enctype="multipart/form-data" action="upload.php" method="post">

    <input name="file" type="file" id="file" size="80">
    <br>
    <br>
    <input type="submit" id="u_button" value="Upload your File">
</form>



</body>
