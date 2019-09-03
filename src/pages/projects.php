<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link href="../assets/css/index.css" rel="stylesheet">


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
include('./shared/navbar.php');

include('./shared/sidebar.php');

?>




<div class="body">

<div class="card-main-div card-purple">
      <label> Number of employees</label>
      <div> 20,000 </div>
     </div>

     
<div class="card-main-div card-blue">
      <label> Number of projects </label>
      <div> 3 </div>
     </div>

 
     <div class="card-main-div card-red">
      <label> Complete precentage </label>
      <div> 79.5% </div>
     </div>


     <div class="card-main-div">
      <label> Number of projects and number</label>
        <div> 
         <div class="chart" data-percent="73" data-scale-color="#ffb400">73%</div>
        </div>
     </div>


</div>


</body>
<script src="../assets/js/jquery.easypiechart.js"></script>
<script>
    $(function() {
        $('.chart').easyPieChart({
          "barColor":"#45a789",
          "trackColor":"#19222f",
          "scaleColor":"#45a789"
        });
    });
</script>
<script>
$(document).ready(function() {
    $('#projects-menu-item').addClass('active')
});
</script>
</html>