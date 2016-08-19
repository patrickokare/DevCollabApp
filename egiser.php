<?php

require 'session.php';
require ("connection.php");

if(loggedin()) {

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {


        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password_again = mysqli_real_escape_string($db, $_POST['password_again']);

        if (!empty($username) && !empty($password) && !empty($password_again)) {
            if (strlen($username) > 50 || strlen($password) > 50) {
           echo 'Maximum Length of field is 50';
            } else {
                if ($password != $password_again) {
                    echo 'Passwords do not match.';
                } else {


                    $query = "SELECT `username`
                          FROM `users`
                          WHERE `username` = '$username'";

                    $query_run = mysqli_query($db, $query);


                    if (mysql_num_rows($query_run) == 1) {
                        echo 'The username' . $username . ' already exists.';
                    } else {

                        $query = "INSERT INTO users (username,password)
                            VALUES ('" . $username . "', '" . $password . "');";


                        if ($query_run = mysqli_query($db, $query)) {
                            header('Location: success.php?username=' . $username);
                        } else {
                            echo 'Sorry, We Could not register you at this time. Try again Later.';
                        }


                    }
                }
                }

            }
        else {

                echo '<Span style="color: darkred"> All Fields are required.</Span>';
            }
        }


}

$username = $_POST['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCollab Registration Form</title>

    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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

        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading">

            <h4 class="panel-title"><span style="color: darkred">  DEVCOLLAB REGISTRATION FORM</span> </h4>


        </div>
        <div class ="panel-body">

<form action ="signupp.php" method="POST">

    <label> UserName:<br> <br>
    <input type="text" maxlength="50" name="username" value="<?php if(isset($username)){ echo $username;} ?>">
    </label><br> <br>
    <label> Password:<br> <br>
    <input type="password" maxlength="50" name="password">
    </label><br> <br>
    <label> Re-enter Password:<br> <br>
    <input type="password" name="password_again">
    </label> <br> <br>

     <input type="submit" value="Register">

</form>

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

