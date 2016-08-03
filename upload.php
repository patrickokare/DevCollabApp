<!DOCTYPE html>
<html>
<head>

<link href="./phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Makes the file tree(s) expand/collapsae dynamically -->
<script src="https://code.jquery.com/jquery-3.1.0.js" type="text/javascript"></script>
<script src="./phpFileTree/php_file_tree_jquery.js" type="text/javascript"></script>
    </head>

<?php
include("./phpFileTree/php_file_tree.php");

// open the current directory
$dhandle = opendir('.//uploads/');
// define an array to hold the files
$files = array();

if ($dhandle) {
    // loop through all of the files
    while (false !== ($fname = readdir($dhandle))) {
        // if the file is not this file, and does not start with a '.' or '..',
        // then store it for later display
        if (($fname != '.') && ($fname != '..') &&
            ($fname != basename($_SERVER['PHP_SELF']))) {
            // store the filename
            $files[] = (is_dir( "./$fname" )) ? "(Dir) {$fname}" : $fname;
        }
    }
    // close the directory
    closedir($dhandle);
}

echo "<select name=\"file\">\n";

// Now loop through the files, echoing out a new select option for each one
foreach( $files as $fname )
{
    echo "<option>{$fname }</option>\n";
}
echo "</select>\n";

echo "</br>";

echo"<ul>";
foreach( $files as $fname )
{
    echo "<li><a href='./uploads/{$fname }'>{$fname }</a></li>";
}
echo "</ul>";

echo php_file_tree('./uploads/', "http://karetechapp.azurewebsites.net/[link]");

/**functional prints out the files but does not display or not downloadable
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



/**creates a data.txt directory, compiling the files
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

$writer = fopen("data2.txt", 'w');
fwrite($writer, $dataToWrite);
fclose($writer);

**/
?>


