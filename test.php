
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>
    <script src="lib/codemirror.js"> </script>
    <link rel="stylesheet" href="lib/codemirror.css">
    <script src="mode/javascript/javascript.js"></script>
    <link rel="stylesheet" href="theme/3024-night.css">

<link rel="stylesheet" href="codemirror/plugin/codemirror/theme/night.css">
<style>
    body{
        background-color: #eee;
    }



</style>
</head>
<body>
<div id="codeeditor"></div>


    <script>

        var editor = CodeMirror(document.getElementById("codeeditor"),{

            mode: "javascript",
            theme: "3024-night"
            tabSize: 20
        });

    </script>


</body>
</html>

