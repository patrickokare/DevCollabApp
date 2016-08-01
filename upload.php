<?php

header('Content-type: text/plain');

$file = "./document.txt";

$document = file_get_contents($file);

echo $document;



