<?php


$path = "./";
if(is_dir($path)) {

    $dir_handle = opendir($path);

    while (($dir = readdir()) !== false) {

        if (is_dir($dir)) {
            echo "is dir: " . $dir . "<br>";

        } elseif (is_file($dir)) {

            echo "is file: " . $dir . "<br>";
        }

    }
closedir( );

}







