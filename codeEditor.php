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

    <script src="lib/codemirror.js"> </script>
    <link rel="stylesheet" href="lib/codemirror.css">

    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>



    <script src="mode/javascript/javascript.js"></script>
    <link rel="stylesheet" href="theme/night.css">
    <script src="hint/show-hint.js"></script>
    <script src="hint/css-hint.js"></script>
    <link rel="stylesheet" href="hint/show-hint.css">



    <style>
        body{
           background-color: greenyellow;
        }



    </style>
</head>
<body>
    <h4> Now or Never 01 </h4>

       <form id="preview-form-comment" method="post" class="codemirror-textarea" name="preview-form-comment" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

           <?php echo $comment; ?>

         <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

        </form>





<script>

    var editor = CodeMirror(document.getElementById("preview-form-comment"),{

        mode: "javascript",
        theme: "night",
        tabSize: 20,
        lineNumbers: true,
        firstLineNumber:1,
        extraKeys:{"Ctrl": "autocomplete"}
    });

</script>


</body>
</html>

