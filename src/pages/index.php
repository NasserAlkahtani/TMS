<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="../assets/css/index.css" rel="stylesheet">


    <?php
           include('links.php'); 
     ?>
</head>
<body>
<div id="off-icon-dropdown-div-cover"></div>
<?php

session_start();

if(!($_SESSION['logedin'] == "true" && isset($_SESSION['cid']))){
    header('location: sign.php');

}
?>


<?php
include('./shared/navbar.php');

include('./shared/sidebar.php');

?>






<script>
$(document).ready(function() {
    $('#dashboard-menu-item').addClass('active')
});
</script>
</body>
</html>