<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:register.php");
}
?>

<?php

$username = $_GET['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">

    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<header>
    <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-ArrayTech-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> <em style="font-family: cursive"> DevCollab  </em> </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-ArrayTech-navbar-collapse-1">



            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title"> Registration Successful! </h4>


                </div>
                <div class ="panel-body">

                    <address>
                    <h4> Your username is: </h4>   <?php echo $username ?> <br>

                       <h4>You have Successfully Completed your registration Process</h4><br>
                        <h4>Thank you!</h4>
                        <a href="index.php">LOGIN</a>


                    </address>

                </div>

            </div>
        </div>

    </div>

</div>











<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>









<footer class="site-footer">

    <div class="container">
        <div class="row">

            <span style="font-family: cursive" class="moveright"> DevCollab App(c) </span>



        </div>
        <div class="bottom-footer">
            <div class="col-md-5"> Designed by Wale Patrick 2016(c)</div>
            <div class="col-md-7">

            </div>
        </div>

    </div>









</footer>

</body>
</html>