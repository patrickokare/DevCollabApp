<?php


$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $path = $_POST['preview-form-comment'];

    $path = 'uploads/';

    echo 'Success!';

} else{
    echo 'Failed!';

}




