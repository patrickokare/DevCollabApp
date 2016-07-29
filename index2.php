<?php

echo $name = $_FILES['file']['name'];


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>


<form action="upload.php" method="post" enctype="multipart/form-data">
    <input name="file" type="file">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>



</body>
