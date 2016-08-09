<?php

$path = 'uploads/';
$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $path = $_POST['preview-form-comment'];

}





//$path;
$content = $_GET['content'];

if($path !== "" and is_writable($path))
file_put_contents($path, $content);