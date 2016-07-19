<?php

$file_result = " ";

if ($_FILES["file"] ["error"] > 0){
    $file_result .= "Your File has not been Uploaded!";
    $file_result .= "Error Code:  " . $_FILES["file"] ["error"] . "<br>";
} else{

    $file_result .=
        "Upload: " . $_FILES["file"] ["name"] . "<br>" .
        "Type: " . $_FILES["file"] ["type"] . "<br>" .
        "Size: " . ($_FILES["file"] ["size"]/1024) . "Kb <br>" .
        "Temp file: " . $_FILES["file"] ["tmp_name"] . "<br>";

    move_uploaded_file($_FILES["file"] ["tmp_name"],
        "/full/path/on/server/" . $_FILES["file"]["name"]);

    $file_result .= "Upload Successful!";
}
