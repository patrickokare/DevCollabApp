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
    <title>Feature</title>
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
                    <li class="active "> <a href="features.php"> Features </a> </li>
                    <li> <a href="contact.php"> Contact </a> </li>
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

<h1> Project Specification in a Nutshell </h1>


<h4>
     The M-learning framework Should consist of an integrated development
     environment, which allows the creation of dynamic student teams that can
     work together to rapidly develop a mobile application. This project is
     inherently about harnessing current messaging, file transfer, discussion
     forum, video conferencing technologies and packaging them all together into
     one single system. One could make use of tools such as dropbox, google
     drive for file storage, integrate google hangouts for video conferencing, make
     use of an instant messaging service, for real-time discussions, discussion
     forums for larger queries, social media integration, project management
     tools, code sharing and version control facilities and so on.
     The Application should have multiple Features(Collaborative feature) that will help in a Collaborative Learning Environment(Session management). <br>
     Key Features are; A Collaborative Code Editor, Audio/Video Conferencing,file Upload Option and Text Chatting in real-time.

</h4>
<br>
<br>
<br>
<br>
<br>

<h4> This Project takes big inspiration from CodeShare, Madeye and other existing systems Like
    <a href="https://iprodev.com/20-best-code-editors-for-real-time-collaboration/"> this </a> </h4>

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
</div>
        </div>
    </div>

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