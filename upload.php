<?php

/**
$filename = 'data.txt';
$file_path = "./";
$file_fullpath = $file_path . $filename;
//
//
if (!file_exists($file_fullpath)) {
    header("HTTP/1.0 404 Not Found");
    return;
}
//
// get the mime type
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $file_fullpath);
//
// calc values for header
$size = filesize($file_fullpath);
$time = date('r', filemtime($file_fullpath));
$fm = @fopen($file_fullpath, 'rb');
if (!$fm) {
    header('HTTP/1.0 505 Internal server error');
    return;
}
$begin = 0;
$end = $size;
if (isset($_SERVER['HTTP_RANGE'])) {
    if (preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i', $_SERVER['HTTP_RANGE'], $matches)) {
        $begin = intval($matches[0]);
        if (!empty($matches[1])) $end = intval($matches[1]);
    }
}
//
// create http header
if ($begin > 0 || $end < $size) {
    header('HTTP/1.0 206 Partial Content');
}else {
    header('HTTP/1.0 200 OK');
}
header('HTTP/1.0 200 OK');
header("Content-Type: $mimeType");
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Accept-Ranges: bytes');
header('Content-Length:' . ($end - $begin));
header("Content-Range: bytes $begin-$end/$size");
header("Content-Disposition: inline; filename=$filename");
header("Content-Transfer-Encoding: binary\n");
header("Last-Modified: $time");
header('Connection: close');
// output the file
$cur = $begin;
fseek($fm, $begin, 0);
while (!feof($fm) && $cur < $end && (connection_status() == 0)) {
    print fread($fm, min(1024 * 16, $end - $cur));
    $cur+= 1024 * 16;
}
**/


/**functional prints out the files but does not display
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

