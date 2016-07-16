
<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Code Mirror -Form</title>

    <link href="plugin/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css">
</head>
<body>
<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

<textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment">
    <?php echo $comment; ?>
</textarea>
<br>
<input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

</form>
<div id="preview-comment"><?php echo $comment; ?> </div>

<script type="text/javascript" src="js/jquery.min.js.js"></script>
<script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
<script type="text/javascript" src ="js/default.js"></script>




</body>
<html>

