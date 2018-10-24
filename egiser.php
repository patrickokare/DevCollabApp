<?php
//require 'session.php';
require_once ("connection.php");

//if(!logged_user()
//if(!logged_user()) {
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$password_again = $_POST['password_again'];
$passwordmd5 = md5($password);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password_again = mysqli_real_escape_string($db, $_POST['password_again']);
if (!empty($username) && !empty($password) && !empty($password_again)) {
if (strlen($username) > 20 || strlen($password) > 20) {
echo 'Maximum Length of field is 50';
} else {
if ($password != $password_again) {
echo 'Passwords do not match.';
} else {

$query = "SELECT `username`
FROM `users`
WHERE `username` = '$username'";
$query_run = mysqli_query($db, $query);

if (mysqli_num_rows($query_run) == 1) {
echo 'The username' . $username . ' already exists.';
} else {
$query = "INSERT INTO users (username,password)
VALUES ('" . $username . "', '" . $passwordmd5 . "');";
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
//}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>DevCollab-SignUp</title>
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


</header>

<body>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h1 class="text-center" style="font-family: cursive"> DevCollab </h1>
            <div class="modal-body">

                <form method="POST" action="egiser.php" class="col-md-12 center-block">
                    <div class="form-group">

                        <input type="text" class="form-control input-lg" maxlength="50" placeholder="Username" name="username" value="<?php if(isset($username)){ echo $username;} ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" maxlength="50" name="password" placeholder="Password" required>

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" maxlength="50" name="password_again" placeholder="Re-enter Password" required>

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-lg btn-primary" value="Register" >
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<footer class="modal-dialog">
    <hr style="color: #e74c3c">
    <span style="font-family: cursive; color: #e74c3c;"> (c) DevCollab </span>
    <a class="nounderline">By signing up, you agree to our Terms, Data Policy and Cookies Policy </a>
</footer>

</body>






</html>
