<?php

// This is a boolean that only equals true when teh  page is reloaded


if (isset($_POST['submit'])) {
$selectedValue = $_POST['color'];
$userfilename = $selectedValue;
$oldfile = file_get_contents("http://karetechapp.azurewebsites.net/usercodes/" . $selectedValue);
$comment = $oldfile;

    header("location: Home.php");
}else {

//$comment = null;
$userfilename = $_SESSION['login_user'] . '_' . 'codes.txt';
$oldfile = file_get_contents("http://karetechapp.azurewebsites.net/usercodes/" . $userfilename);
$comment = $oldfile;
    header("location: Home.php");
}

// when the form is submitted this code below will run
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {

date_default_timezone_set('Europe/London');
$today = date("Y-m-d H:i:s");
$comment = $_POST['preview-form-comment'] . "\r\n" . 'Codes Saved by:' . $_SESSION['login_user'] . ' at ' . $today;
$content = $comment;
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/usercodes/" . $userfilename, "wb");
fwrite($fp, $content);
fclose($fp);
    header("location: Home.php");
}



?>