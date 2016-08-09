<?php

if(isset($_FILES["file"]["type"])){

if(file_exists('.//uploads/'. $_FILES["file"]["name"])){
    echo $_FILES["file"]["name"]. "<h2> Already exists</h2>";

}
    else{

        $fname = $_FILES['file']['tmp_name'];
        $path = './/uploads/' . $_FILES['file']['name'];
        move_uploaded_file($fname, $path);


    }

}


