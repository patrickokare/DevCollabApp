<?php


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