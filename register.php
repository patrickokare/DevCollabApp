<?php

require 'session.php';

if(loggedin()) {

    if (isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['password_again'])
    ) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];


        if (!empty($username) && !empty($password) && !empty($password_again)) {

        } else {

        }
    }


}


?>

<form action ="register.php" method="POST">

    <label> UserName:<br> <br>
    <input type="text" name="username">
    </label><br> <br>
    <label> Password:<br> <br>
    <input type="password" name="password">
    </label><br> <br>
    <label> Password Again:<br> <br>
    <input type="password" name="password_again">
    </label> <br> <br>

     <input type="submit" value="Register">

</form>



