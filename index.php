
<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>DevCollab-Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrapmin.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <style>
                              a.nounderline {

                                  text-decoration: none;
                                  color: silver;
                              }

        h1{
            color: #e74c3c;
        }
        span{
            text-align: -webkit-center;
            color: #e74c3c;
        }
        input[type=submit]{
            color: silver; !important;
        }
        body{
          /  max-width: 960px; !important;
          /  margin-left: auto;!important;
         /   margin-right: auto;!important;
           background-color:#2c3e50;
        }
    </style>
</head>

<header>
    <br>
    <br>
    <br>
    <br>

</header>
<body>

<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h1 class="text-center" style="font-family: cursive"> DevCollab </h1>
            <div class="modal-body">

                <form method="POST" action="login.php" class="col-md-12 center-block">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login">
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<footer class="modal-dialog">

    <hr style="color: #e74c3c">

    <span style="font-family: cursive; color: #e74c3c;"> (c) DevCollab </span>

    <a href="egiser" class="nounderline"></a>


</footer>
</body>






</html>
