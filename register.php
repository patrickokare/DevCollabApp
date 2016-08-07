<?php

require 'session.php';

if(!loggedin()){

echo'register';

} else if (loggedin()) {
    echo 'you are already registered and logged in. ';
}


