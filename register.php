<?php

require 'session.php';

if(!loggedin()){
    ?>
 Register Form.
<?php

} else if (loggedin()) {
    echo 'you are already registered and logged in. ';
}


