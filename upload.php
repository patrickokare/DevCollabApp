<?php

/**
$path = "./";
if(is_dir($path)) {

    $dir_handle = opendir($path);

    while (($dir = readdir( $dir_handle)) !== false) {

        if (is_dir($dir)) {
            echo "is dir: " . $dir . "<br>";

        } elseif (is_file($dir)) {

            echo "is file: " . $dir . "<br>";
        }

    }
closedir( $dir_handle );

}

**/


$dir = ".//uploads/";

if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            echo " <a href='#'> <img src = '$file' />  </a>   ";
        }
        closedir($dh);
    }
}
?>




