<?php


$path = "./";
if(is_dir($path)) {

    $dir_handle = opendir($path);

    while (($dir = readdir( $dir_handle)) !== false) {

        if (is_dir($dir)) {
            echo "is dir: " . $dir . "<br>";

            if($dir == "test"){
                $sub_dir_handle = opendir($dir);
                while(($sub_dir = readdir($sub_dir_handle)) !== false){
                    echo "--> --> contents = $sub_dir <br>";

                }
            }



        } elseif (is_file($dir)) {

            echo "is file: " . $dir . "<br>";
        }

    }
closedir( $dir_handle );

}



/**
$path = ".//uploads/";
$handle = opendir($path);

        while($file = readdir($handle)){
            if(substr($file,0,1) != "."){
                echo "<img src='$file'/>";
                echo '<br>';

            }
            closedir($dh);

    }

**/


/**
$dataToWrite = "";
$path = ".//uploads/";
$handle = opendir($path);

while($file = readdir($handle)){
    if(substr($file,0,1) != "."){
        echo "<img src='$file'/>";
        echo '<br>';
        $dataToWrite .= $file . "\n";

    }
}
closedir($handle);

$writer = fopen("data.txt", 'w');
fwrite($writer, $dataToWrite);
fclose($writer);

**/