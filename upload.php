<?php

// You need to create the files/ directory inside your document root to put your files.
if (substr($_SERVER['REQUEST_URI'], 0, 7) !== './/uploads/') {
    die('not allowed');
}
$absolutePath = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
$pathParts = pathinfo($absolutePath);
$fileName = $pathParts['basename'];
$fileInfo = finfo_open(FILEINFO_MIME_TYPE);
$fileType = finfo_file($fileInfo, $absolutePath);
finfo_close($fileInfo);
$fileSize = filesize($absolutePath);
header('Content-Length: ' . $fileSize);
header('Content-Type: ' . $fileType);
header('Content-Disposition: attachment; filename=' . $fileName);
ob_clean();
flush();
readfile($absolutePath);
exit;














/**same as the other scripts, displays but not downloadable......
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
**/


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