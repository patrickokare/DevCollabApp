
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>

    <script src="lib/codemirror.js"> </script>
    <link rel="stylesheet" href="lib/codemirror.css">
    <script src="mode/javascript/javascript.js"></script>
    <link rel="stylesheet" href="theme/night.css">
    <script src="hint/show-hint.js"></script>
    <script src="hint/css-hint.js"></script>
    <link rel="stylesheet" href="hint/show-hint.css">


    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>

    <style>
        body{
            background-color: greenyellow;
        }



    </style>
</head>
<body>
<h4> Code Mirror Implementation- test 13 </h4>
<form id="codeeditor" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

             <label>
            <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="20" cols="140">



             </textarea>



</form>




<script>

    var editor = CodeMirror(document.getElementById("codeeditor"),{

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

