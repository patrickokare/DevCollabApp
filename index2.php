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


<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="Submit"/>

</form>



</body>
