<?php

header('Content-type: text/plain');

$location = 'uploads/';

$document = file_get_contents($location);

echo $document;



