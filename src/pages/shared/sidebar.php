<div class="main-sidebar">
    

<div class="company-name-logo">
<?php
   include("../module/database/database.php"); 

<<<<<<< HEAD
   $sql = 'SELECT * FROM `companies` WHERE id="'.$_SESSION['cid'].'"';
=======
   $sql = 'SELECT `logo` FROM `companies` WHERE id='.$_SESSION['cid'];
>>>>>>> 2a5b76bb972661b192aced6f8f5123adb10699f5
   $res = mysqli_query($conn,$sql);
 

   if($res){
      if(mysqli_num_rows($res) > 0 ){
         $row = mysqli_fetch_assoc($res);
         if($row['logo'] == NULL){
            echo '<img class="company-logo" src="../assets/img/user-placeholder.png">';
         }else{
            echo '
            <img class="company-logo" src="data:image/jpeg;base64,'.base64_encode($row['logo']).'" >
            ';
         }
      }else{
         echo '<img class="company-logo" src="../../assets/img/user-placeholder.png">';
      }
   }else{
      echo '<img class="company-logo" src="../../assets/img/user-placeholder.png">';
   }


?>

 <div class="company-info">
    <div class="company-name"><?php echo $row['name']; ?></div>
    <div class="company-date"><?php echo  date('d-m-Y', strtotime($row['created_at'])); ?></div>
  </div>
</div>

   
   
<div class="line"></div>


<div class="sidebar-menu-div">
<ul>

   <li id="menu-element">
    <i class="fas fa-chart-line icon"></i>
    <label>Dashnoard</lablel>
   </li>

   <li id="menu-element">
   <i class="fas fa-clipboard-list icon"></i>
   <label>Projects</lablel>
   </li>

   <li id="menu-element">
   <i class="fas fa-user-friends icon"></i>
    <label>Employees</lablel>
   </li>

   <li id="menu-element" class="active">
    <i class="fas fa-address-card icon"></i>
    <label>Account</lablel>
   </li>

   <li id="menu-element" >
    <i class="fas fa-cog icon"></i>
    <label>Settings</lablel>
   </li>
</ul>
</div>


</div>