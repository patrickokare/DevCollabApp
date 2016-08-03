
<?php
ignore_user_abort(true);
set_time_limit(0); // disable the time limit for this script

$path = ".//uploads/"; // change the path to fit your websites document structure

$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['download_file']); // simple file name validation
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
$fullPath = $path.$dl_file;

echo ' <a href="http://karetechapp.azurewebsites.net/upload.php?download_file=canada.txt">PHP download file</a>';

if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
            header("Content-type: application/pdf");
            header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
            break;
        // add more headers for other content types here
        default;
            header("Content-type: application/octet-stream");
            header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
            break;
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;

?>











<?php





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
?>


