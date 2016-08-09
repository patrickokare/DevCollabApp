<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];

}

?>
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
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>
    <style>

       div #remotesVideos{
        /    height: 200%;
        /    width: 100%;
        /   border: solid darkred;
        }
    </style>

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
                <li class="active "><a href="Home.php">Home </a> </li>
                <li> <a href="features.php"> Features </a> </li>
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



<div class="jumbotron">
    <div class="container">
        <p style="color: darkred"> Welcome, <?php echo $_SESSION['login_user']; ?> </p>

        <h3 class="text-center lead"> DevCollab, Optimized for Collaboration...... </h3>

    </div>
</div>


<div class="container">
      <div class="row">

    <div class="col-sm-8 col-sm-8">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3>  Code Editor  </h3>
            </div>




    </div>
</div>



</div>


    <div class="col-sm-4 col-sm-4">
        <div class="panel panel-default">

            <!-- This codes below are for the video Conferencing, file Upload and messenging box -->
            <div class="panel-heading">
                <h3>  Video Conference  </h3>
            </div>
             <div>
            <!--
             <video height="250" width="320" id="localVideo"></video>
                 <div id="remotesVideos" style="height: 300%: width: 100%;"></div>


             -->
              <?php
              include('hangout2.php');
               ?>



                </div>


            <div class="panel-heading">


            <h3> Upload Your Files Here </h3>
                </div>


            <?php

            include("fileUpload.php");
            include ("upload.php");
            ?>


<hr>

                <div class="panel panel-default">
                    <div class="panel-heading">
                <h3> Real-time Messaging  </h3>
                        </div>

                    <?php
          //  include ("ChatFac/messgIndex.php")

                    ?>

                    <hr>



                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Geo-Location </h3>
                        </div>

<?php

                        require_once('geoplugin.class.php');
                        $geoplugin = new geoPlugin();
                        // If we wanted to change the base currency, we would uncomment the following line
                        // $geoplugin->currency = 'EUR';

                        $geoplugin->locate();

                        echo "Geolocation results for {$geoplugin->ip}: <br />\n".
                        "City: {$geoplugin->city} <br />\n".
                        "Region: {$geoplugin->region} <br />\n".
                        "Area Code: {$geoplugin->areaCode} <br />\n".
                        "DMA Code: {$geoplugin->dmaCode} <br />\n".
                        "Country Name: {$geoplugin->countryName} <br />\n".
                        "Country Code: {$geoplugin->countryCode} <br />\n".
                        "Longitude: {$geoplugin->longitude} <br />\n".
                        "Latitude: {$geoplugin->latitude} <br />\n".
                        "Currency Code: {$geoplugin->currencyCode} <br />\n".
                        "Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
                        "Exchange Rate: {$geoplugin->currencyConverter} <br />\n";

                        if ( $geoplugin->currency != $geoplugin->currencyCode ) {
                        //our visitor is not using the same currency as the base currency
                        echo "<p>At today's rate, US$100 will cost you " . $geoplugin->convert(100) ." </p>\n";
                        }



                        ?>
                        <a href="Geolocate.php">Click to get information about the Cities near you </a>


    </div>
</div>


</div>
    </div>
    </div>

</div>



<footer class="site-footer">

<div class="container">
     <div class="row">

             <span style="font-family: cursive" class="moveright"> DevCollab App(c) </span>

         <a href="http://www.geoplugin.com/geolocation/" target="_new">IP Geolocation</a> by <a href="http://www.geoplugin.com/" target="_new">geoPlugin</a>

</div>
    <div class="bottom-footer">
        <div class="col-sm-5"> Designed by Wale Patrick 2016(c)</div>
        <div class="col-sm-7">
            <ul class="footer-nav lead">
                <li class="active"><a href="Home.php"> Home </a> </li>
                <li><a href="features.php"> Features </a> </li>
                <li><a href="contact.php"> Contact </a> </li>
            </ul>
        </div>
</div>

</div>



</footer>


</body>
</html>

<!--
<script type="application/javascript">
    var webrtc = new SimpleWebRTC({
        // the id/element dom element that will hold "our" video
        localVideoEl: 'localVideo',
        // the id/element dom element that will hold remote videos
        remoteVideosEl: 'remotesVideos',
        // immediately ask for camera access
        autoRequestMedia: true
    });

    // we have to wait until it's ready
    webrtc.on('readyToCall', function () {
        // you can name it anything
        webrtc.joinRoom('chat');
    });
</script>

-->

