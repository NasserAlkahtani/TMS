<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="../assets/css/notification.css" rel="stylesheet">
    <?php
           include('links.php'); 
     ?>
</head>
<body>
    
<?php

session_start();

if(!($_SESSION['logedin'] == "true" && isset($_SESSION['cid']))){
    header('location: sign.php');

}
?>


<?php


echo $_SESSION['logedin'];

echo $_SESSION['cid'];
?>
<h1>1111</h1>


<a href="../module/sign/signout.php">Sign out</a>

</body>
</html>