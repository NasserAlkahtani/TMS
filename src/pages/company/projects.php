<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link href="../../assets/css/index.css" rel="stylesheet">


    <?php
           include('../links.php'); 
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
 include('./../shared/navbar.php');

 include('./../shared/sidebar.php');

 ?>




<div class="body"><!-- start body -->

   

     <div class="card card-single">
       <label>Number of employees</label>
       <div >
         <i class="fas fa-users"></i>
         <div class="countup single-info">
                4
         </div>
       </div>
     </div>

     <div class="card card-single">
       <label>Number of projects</label>
       <div >
       <i class="fas fa-project-diagram"></i>
         <div class="countup single-info">
                  5
         </div>
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
      <label>Bar chart</label>
        <div>
           <canvas id="line-chart">

           </canvas>
       </div>
     </div>

     <div class="card card-single-double">
      <label>Sucess precentage</label>
        <div>
           <canvas id="bar-chart">

           </canvas>
       </div>
     </div>

     <div class="card card-full">
       <label>List of projects</label>    
       <div>
         <table>
           <tr class="first-row">
             <th style="border-top-left-radius: 6px;" class="first">#ID</th>
             <th>Name</th>
             <th>@Email</th>
             <th style="border-top-right-radius: 6px;" class="more more-bottom-line">More</th>
           </tr>
           <tr>
             <td class="first">24</td>
             <td>Omar Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first">32</td>
             <td>Anas Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more"><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first">2</td>
             <td>Abdulelah Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more"><i class="fas fa-info-circle"></i></td>
           </tr>
         </table>
       </div>
     </div>

     <div class="card card-single">
       <label>Number of employees</label>
       <div >
         <i class="fas fa-users"></i>
         <div class="countup single-info">
                4
         </div>
       </div>
     </div>

     <div class="card card-single">
       <label>Number of projects</label>
       <div >
       <i class="fas fa-project-diagram"></i>
         <div class="countup single-info">
                  5
         </div>
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
      <label>Bar chart</label>
        <div>
           <canvas id="line-chart">

           </canvas>
       </div>
     </div>

     <div class="card card-single-double">
      <label>Sucess precentage</label>
        <div>
           <canvas id="bar-chart">

           </canvas>
       </div>
     </div>

     <div class="card card-full">
       <label>List of projects</label>    
       <div>
         <table>
           <tr class="first-row">
             <th style="border-top-left-radius: 6px;" class="first">#ID</th>
             <th>Name</th>
             <th>@Email</th>
             <th style="border-top-right-radius: 6px;" class="more more-bottom-line">More</th>
           </tr>
           <tr>
             <td class="first">24</td>
             <td>Omar Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first">32</td>
             <td>Anas Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more"><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first">2</td>
             <td>Abdulelah Al-Qahtani</td>
             <td>437101560@gmail.com</td>
             <td class="more"><i class="fas fa-info-circle"></i></td>
           </tr>
         </table>
       </div>
     </div>

     
    
      
  
     
    





    



     
  


 



<div class="footer">
<i class="far fa-copyright"></i> hat tech 2019-2020
</div>


</div> <!-- end body -->


</body>
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
    $('#projects-menu-item').addClass('active')
});
</script>
</html>