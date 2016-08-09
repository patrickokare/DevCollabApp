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
<link rel="stylesheet" href="codemirror/plugin/codemirror/theme/neo.css">

</head>
<body bgcolor="#008b8b">
<h3>Code Mirror Implementation.....Test 13 </h3>
<div style="align-content: center">

    <script>
        var editor = codeMirror(document.getElementById("codeeditor"),{
            value:"",
            mode: "javascript",
            theme:"neo"

        });


    </script>


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

</div>




</body>
</html>

