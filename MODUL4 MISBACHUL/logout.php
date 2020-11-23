<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

set_cookies('login','',time() - 86400 );

header("Location: login.php");
exit;

?>