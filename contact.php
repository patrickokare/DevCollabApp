<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("location:index.php");
}
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
                <a class="navbar-brand" href="Home.php"> <em style="font-family: cursive"> DevCollab  </em> </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-ArrayTech-navbar-collapse-1">
                <ul class="nav navbar-nav nav-tabs lead">
                    <li><a href="Home.php">Home </a> </li>
                    <li> <a href="features.php"> Features </a> </li>
                    <li class="active "> <a href="contact.php"> Contact </a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav navbar-nav nav-tabs " data-toggle="dropdown">DevCollab  <b class=" caret "> </b> </a>
                        <ul class="dropdown-menu lead">
                            <li class="lead"> <a href="#"> Desktop Platform </a> </li>
                            <li class="lead"> <a href="#"> Mobile Platform </a>  </li>
                            <li class ="divider"> </li>
                            <li class="lead"><a href="#"> Download Link </a> </li>

                        </ul>
                    </li>
                    <li style="float: right" class="pull-right"> <a href = "logout.php"> Log Out </a>  </li>

                </ul>


            </div>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title"> CONTACT ADDRESS </h4>


                </div>
                <div class ="panel-body">

      <address>
<Strong> MSc Software Project </Strong> <br>
          Robert Gordon University,
          Garthdee House,<br>
          Garthdee Road,
          Aberdeen AB10 7QB
          <br>
<strong> Developer's Email</strong> <br>

   <p>       b.p.d.okare@rgu.ac.uk </p>
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

<footer class="site-footer">

    <div class="container">
        <div class="row">

            <span style="font-family: cursive" class="moveright"> DevCollab App(c) </span>



        </div>
        <div class="bottom-footer">
            <div class="col-sm-5"> Designed by Wale Patrick 2016(c)</div>
            <div class="col-sm-7">
                <ul class="footer-nav lead">
                    <li><a href="Home.php"> Home </a> </li>
                    <li class="active"><a href="features.php"> Features </a> </li>
                    <li><a href="contact.php"> Contact </a> </li>
                </ul>
            </div>
        </div>

    </div>









</footer>

</body>
</html>