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
     
    

 
     <div class="card-new-main-div card-purple">
      <label> Number of employees</label>
      <div> 20,000 </div>
     </div>



     <div class="card-new-main-div card-blue">
      <label> Number of projects </label>
      <div> 3 </div>
     </div>

 
     <div class="card-new-main-div card-red">
      <label> Complete precentage </label>
      <div> 79.5% </div>
     </div>

     <div class="card-new-main-div">
      <label> Number of projects and number</label>
        <div> 
         <div class="chart" data-percent="73" data-scale-color="#ffb400">73%</div>
        </div>
     </div>


     
   



<!--     

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



     <div class="card-chart-main-div">
     <div class="card-chart-borders-div">
       <div class="card-chart-column column-100">100</div>
       <div class="card-chart-column column-90">25</div>
       <div class="card-chart-column column-80">75</div>
       <div class="card-chart-column column-70">25</div>
       <div class="card-chart-column column-60">25</div>
       <div class="card-chart-column column-50">100</div>
       <div class="card-chart-column column-40">25</div>
       <div class="card-chart-column column-30">25</div>
       <div class="card-chart-column column-20">25</div>
       <div class="card-chart-column column-10">25</div>
        <div class="card-chart-column column-1"></div>

     </div>
     </div>


     <div class="card-main-div">
      <label> Number of projects and number</label>
        <div> 
         <div class="chart" data-percent="73" data-scale-color="#ffb400">73%</div>
        </div>
     </div>




 
     <div class="card-list-main-div">
      <label> Top 3 employees</label>
        <div> 
             <table>
              <tr class="first">
                 <td class="table-border-left-top">id</td>
                 <td>name</td>
                 <td>User name</td>
                 <td class="table-border-right-top">More</td>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Nasser</td>
                 <td>Nasser-theebfit.co</td>
                 <td><a href="">More info</a></td>
               </tr>
               <tr>
                 <td>12</td>
                 <td>Omar</td>
                 <td>OmarFuck-192</td>
                 <td><a href="">More info</a></td>

               </tr>
               <tr>
                 <td>9</td>
                 <td>Anas</td>
                 <td>Anassick-8712</td>
                 <td><a href="">More info</a></td>
               </tr>
              
             </table>
        </div>
     </div> -->


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