<?php
//Script to Upload a file.........
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if(($size > 12500)){

    die("Error - File too Large!");

}

if(isset($name)){
    if(!empty($name)){

         $location = 'uploads/';
    if(move_uploaded_file($tmp_name, $location.$name)){

        echo 'Upload Successfully';
    }


    }else{
        echo 'Choose a file or Your File has not been Uploaded!';
    }

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body {
            margin:0;
            padding:0;
            background-color:#CCC;
        }
        .fileuploadholder {
            width:400px;
            height:200px;
            margin: 60px auto 0px auto;
            background-color:#FFF;
            border:1px solid #CCC;
            padding:6px;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>File Upload</title>
</head>

<body>

<div class="fileuploadholder">
    <form action="FileUpload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" value="Upload" />
    </form>
</div>
</body>
</html>