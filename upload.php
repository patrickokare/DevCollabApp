<?php


$location = 'uploads/';
$document = file_get_contents($location);

$lines = explode("\n", $document);

foreach($lines as $newline){

    echo $newline . '<br>';

}




