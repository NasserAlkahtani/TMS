<?php


session_start();

$_SESSION['logedin'] = NULL;
$_SESSION['cid'] = NULL;

header("location: ../../../public/views/sign/sign.php");

?>