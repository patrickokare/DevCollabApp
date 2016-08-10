<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {

    $comment = $_POST['preview-form-comment'];
if(!empty($comment)){

    $content = $comment;

    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/usercodes/usercodes.txt", "wb");
    fwrite($fp, $content);
    fclose($fp);
}else {
    echo 'Cannot Update!';
    // if()
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Editor </title>
    <script src ="js/jquery.js"> </script>
    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="lib/codemirror.css">
    <script src="lib/codemirror.js"> </script>

    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>

    <script type="text/javascript" src ="default.js"></script>
<!--



-->

    <script src="mode/javascript/javascript.js"></script>

    <script src="hint/show-hint.js"></script>
    <script src="hint/css-hint.js"></script>
    <link rel="stylesheet" href="theme/night.css">
    <link rel="stylesheet" href="hint/show-hint.css">




</head>
<body>

<div style="width: 50%">
    <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

                  <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="20" cols="20">

                 <?php echo $comment; ?>

                 </textarea>

        <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Save">

    </form>
   </div>
    <br>
    <br>




                <textarea rows="10" cols="89">

                   <?php echo $comment; ?>


                 </textarea>








<a>

    <?php include ("upload2.php")?>
</a>




</body>
</html>




