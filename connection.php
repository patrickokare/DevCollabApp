<?php
define('DB_SERVER', 'us-cdbr-azure-west-c.cloudapp.net');
define('DB_USERNAME', 'bfe9385d933daf');
define('DB_PASSWORD', 'd5ed3424');
define('DB_DATABASE', 'karetechdb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db) {
} else {
  //  echo 'Failed to connect to the database';
}
?>







