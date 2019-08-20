<div class="main-sidebar">
    

<div class="company-name-logo">
<?php
   include("../module/database/database.php"); 

   $sql = 'SELECT * FROM `companies` WHERE id='.$_SESSION['cid'];
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

   <a href="index.php"><li id="dashboard-menu-item">
    <i class="fas fa-chart-line icon"></i>
    <label>Dashnoard</lablel>
   </li></a>

   <a href="projects.php"><li id="projects-menu-item">
   <i class="fas fa-clipboard-list icon"></i>
   <label>Projects</lablel>
   </li></a>

   <a href="employees.php"><li id="employees-menu-item">
   <i  class="fas fa-user-friends icon"></i>
    <label>Employees</lablel>
    </li></a>

    <a href="account.php"><li id="account-menu-item">
    <i  class="fas fa-address-card icon"></i>
    <label>Account</lablel>
    </li></a>

    <a href="settings.php"><li id="settings-menu-item">
    <i  class="fas fa-cog icon"></i>
    <label>Settings</lablel>
    </li></a>
</ul>
</div>


</div>