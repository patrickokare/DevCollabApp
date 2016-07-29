<?php
include ("index2.php");


$location = "/site/wwwroot/uploads/";
$dir_handle = opendir($location);
echo "<ul>";
    while ($file = readdir($dir_handle)) {
    if ($file != "." && $file != ".." && $file != ".DS_Store") {
    if (!is_dir($file)) {
    echo "<li><a href='" . $file . "'>" . $file . "</a></li>";
    }
    }
    }
    closedir($dir_handle);

