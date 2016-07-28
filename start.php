<?php



session_start();
$_SESSION['user_id'] = 1;

require_once __DIR__. "lib/Dropbox/autoload.php";

$dropboxKey = 'fnxu8zoaym1f1gq';

$dropboxSecret = '11uzsfelmo05z4m';

$appName = 'karetech/1.0';

$appInfo = new Dropbox\AppInfo($dropboxKey, $dropboxSecret);

//Store CSRF token
$csrfTokenStore = new Dropbox\ArrayEntryStore($_SESSION, 'dropbox-auth-csrf-token');

//Define auth details

$webAuth = new Dropbox\WebAuth($appInfo, $appName, 'https://karetechapp.azurewebsites.net/dropbox_finish.php', $csrfTokenStore);


