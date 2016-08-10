<?php

/**
if ($_POST['type'] == 'save') {

$content = stripslashes($_POST['code']);

$username = addslashes(strip_tags($_POST['username'])); //i.e. markrummel

$filename = addslashes(strip_tags($_POST['filename'])); //i.e. test, index

$ext = addslashes(strip_tags($_POST['filetype'])); //i.e. html, css, js

$path = '/usercodes/' . $username . '/';
$URL = $path . $filename . '.' . $ext;

file_put_contents($URL, $content);

}

**/