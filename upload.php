<?php

$path = " . ";

$handle = opendir($path);
while ($file = readdir($handle)){

    echo $file . "<br>";



}

closedir($handle);







