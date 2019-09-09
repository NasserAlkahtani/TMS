<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="../../assets/css/index.css" rel="stylesheet">


    <?php
           include('../links.php'); 
    ?>

  
  
</head>
<body>
<?php

session_start();

if(!($_SESSION['logedin'] == "true" && isset($_SESSION['cid']))){
    header('location: ../sign.php');

}
?>


<?php
include('../shared/navbar.php');

include('../shared/sidebar.php');

?>


     <div class="body"><!-- start body -->

   
     <?php


  if(isset($_SESSION['msg']) && isset($_SESSION['msg-type']) ){
    if($_SESSION['msg-type'] == 'danger'){
      echo 
      
      '<div id="notification" class="notification notification-danger">
      <label class="notification-label">'.$_SESSION['msg'].'</label>
      <div id="notification-x" class="notification-x"><img src="../assets/img/x-icon.png"></div>
     </div>';
     }else if($_SESSION['msg-type'] == 'normal'){
      echo 

      '<div id="notification" class="notification notification-normal">
      <label class="notification-label">'.$_SESSION['msg'].'</label>
      <div id="notification-x" class="notification-x"><img src="../assets/img/x-icon.png"></div>
     </div>'
     
     ;
     }
    unset($_SESSION['msg']);
    unset($_SESSION['msg-type']);
  }

?>
     
    

 

     <div class="card card-single">
       <label>Number of employees</label>
     </div>
     <div class="card card-single card-purple">
     <label>Tasks</label>
     </div>
     <div class="card card-single card-blue">
     <label>Daliy cahrt</label>
     </div>


     <div class="card card-double card-red">
      <label>Sucess precentage</label>
     </div>
     <div class="card card-single">
     <label>Number of projects</label>
     </div>
     <div class="card card-single card-blue">
     <label>Top three employees</label>
     </div>

     <div class="card card-full">
     <label>List of projects</label>    
     </div>



     <div class="card card-single">
       <label>Number of employees</label>
     </div>
     <div class="card card-single card-purple">
     <label>Tasks</label>
     </div>
     <div class="card card-single card-blue">
     <label>Daliy cahrt</label>
     </div>


     <div class="card card-double card-red">
      <label>Sucess precentage</label>
     </div>
     <div class="card card-single">
     <label>Number of projects</label>
     </div>
     <div class="card card-single card-blue">
     <label>Top three employees</label>
     </div>

     <div class="card card-full">
     <label>List of projects</label>    
     </div>




<div class="footer">
<i class="far fa-copyright"></i> hat tech 2019-2020
</div>
</div> <!-- end body -->



     




<script src="../../assets/js/jquery.easypiechart.js"></script>
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
    $('#dashboard-menu-item').addClass('active')
});
</script>
</body>
</html>