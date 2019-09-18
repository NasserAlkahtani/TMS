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

<div class="card card-full">
       <label>List of projects</label>    
       <div>
           <input class="search-list-input" type="text" placeholder="search">
       </div>
       <div>
<table>
           <tr class="first-row">
             <th style="border-top-left-radius: 6px;" class="first"></th>
             <th>Name</th>
             <th>Role</th>
             <th style="border-top-right-radius: 6px;" class="more">More</th>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr><tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr><tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr><tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr><tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr><tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Nasserh</td>
             <td>Software enginner</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
           </tr>
           <tr>
             <td class="first"><img class="img" src="http://nzlplastering.co.nz/wp-content/uploads/2017/06/David-Page.jpg" alt=""></td>
             <td>Kathrien</td>
             <td>Designer</td>
             <td class="more" ><i class="fas fa-info-circle"></i></td>
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