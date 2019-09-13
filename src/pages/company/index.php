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
     
 

     

     <div class="card card-full">
       <label>List of projects</label>    
       <div>
         <table>
           <tr>
             <th>Name</th>
             <th>@Email</th>
             <th>age</th>
             <th>more</th>
           </tr>
           <tr>
             <td>Beef</td>
             <td>Beef</td>
             <td>Beef</td>
             <td><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td>Beef</td>
             <td>Beef</td>
             <td>Beef</td>
             <td><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td>Beef</td>
             <td>Beef</td>
             <td>Beef</td>
             <td><i class="fas fa-info-circle"></i></td>
           </tr>
         </table>
       </div>
     </div>

     <div class="card card-single">
       <label>Number of employees</label>
       <div>
         <i class="fas fa-users"></i>5,000
       </div>
     </div>

     <div class="card card-single">
       <label>Number of projects</label>
       <div>
       <i class="fas fa-project-diagram"></i> 5
       </div>
     </div>

     <div class="card card-single">
       <label>Tasks status</label>
       <div class="card-single-chart">
         <canvas id="tasks-done-chart">
   
         </canvas>
       </div>
     </div>

     <div class="card card-double">
      <label>Sucess precentage</label>
        <div>
           <canvas id="line-chart">

           </canvas>
       </div>
     </div>
      
     <div class="card card-single">
       <label>Number of employees</label>
       <div>
         <i class="fas fa-users"></i>5,000
       </div>
     </div>

     <div class="card card-single">
       <label>Number of employees</label>
       <div>
         <i class="fas fa-users"></i>5,000
       </div>
     </div>
    
     
     <div class="card card-double">
      <label>Bar chart</label>
        <div>
           <canvas id="bar-chart">

           </canvas>
       </div>
     </div>

     <div class="card card-single">
       <label>Number of employees</label>
       <div>
         <i class="fas fa-users"></i>5,000
       </div>
     </div>
     
     <div class="card card-single">
       <label>Number of employees</label>
       <div>
         <i class="fas fa-users"></i>5,000
       </div>
     </div>

     
     









    






    



     
  


 



<div class="footer">
<i class="far fa-copyright"></i> hat tech 2019-2020
</div>


</div> <!-- end body -->



     




<script src="../../assets/js/jquery.easypiechart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="../../assets/js/line-chart.js"></script>
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