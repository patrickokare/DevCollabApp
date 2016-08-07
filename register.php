<?php

require 'session.php';

if(loggedin()){

echo 'Register First.';

} else if (!loggedin()) {
    echo 'you are already registered and logged in. ';
}


