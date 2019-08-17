<?php


session_start();

$_SESSION['logedin'] = NULL;
$_SESSION['cid'] = NULL;

header("location: ../../pages/sign.php");

?>