<?php

require 'session.php';

if(!loggedin()) {
}
?>
<form action ="register.php" method="POST">

    <label> UserName:
    <input type="text" name="username">
    </label><br> <br>
    <label> Password:
    <input type="password" name="password">
    </label><br> <br>
    <label> Password Again:
    <input type="password" name="password_again">
    </label>
    <br> <br>
     <input type="submit" value="Register">

</form>




