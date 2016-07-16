
<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];

}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="codemirror/plugin/codemirror/lib/codemirror.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>

<body>

<header>
    <h2> ARRAYTECH COLLABORATIVE ENVIRONMENT </h2>
    <nav>

        <ul>
            <li> <a href="index.php"> HOME </a> </li>
            <li> <a href="#"> FEATURES </a> </li>
        </ul>

    </nav>

</header>





<div id="left">



    <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">

<textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="30" cols="80">
    <?php echo $comment; ?>
</textarea>
        <br>
        <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

    </form>

    <textarea>

        <div id="preview-comment"><?php echo $comment; ?> </div>
    </textarea>



    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>




</div>
















<div id="right">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-hangout" data-render="createhangout"
     data-initial_apps="[{ app_id : '123456789012', start_data : 'dQw4w9WgXcQ', 'app_type' : 'ROOM_APP' }]">
</div>

</div>










<br>
<br>
<br>
<br>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/577687e86d4b9c1403db8444/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->





<footer class="footer">
  <p> Msc Project - Developed by Wale Patrick 2016(c) </p>


</footer>
</body>
</html>

