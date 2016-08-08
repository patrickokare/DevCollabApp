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
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>
    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>


</head>
<body>


<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
    <label>
           <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="20" cols="140">
        <?php echo $comment; ?>
             </textarea>
    </label>
    <br>
    <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

</form>

<label>
               <textarea rows="20" cols="140">
                <?php echo $comment; ?>
                </textarea>
</label>






</body>
</html>

