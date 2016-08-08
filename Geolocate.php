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
                <a class="navbar-brand" href="Home.php">  Go back  </a>
            </div>

        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title"><span style="color: darkred"> YOUR GEOGRAPHICAL LOCATION DETAILS. </span> </h4>


                </div>
                <div class ="panel-body">
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




/* find places nearby */
$nearby = $geoplugin->nearby();
if ( isset($nearby[0]['geoplugin_place']) ) {

    echo "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";

    foreach ($nearby as $key => $array) {

        echo ($key + 1) . ":<br />";
        echo "\t Place: " . $array['geoplugin_place'] . "<br />";
        echo "\t Country Code: " . $array['geoplugin_countryCode'] . "<br />";
        echo "\t Region: " . $array['geoplugin_region'] . "<br />";
        echo "\t County: " . $array['geoplugin_county'] . "<br />";
        echo "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
        echo "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
        echo "\t Distance (miles): " . $array['geoplugin_distanceMiles'] . "<br />";
        echo "\t Distance (km): " . $array['geoplugin_distanceKilometers'] . "<br />";

    }
    echo "</pre>\n";

}

?>
                </div>
            </div>



                  <a href="Home.php">Click to go back</a>
    </div>
        </div>
    </div>


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