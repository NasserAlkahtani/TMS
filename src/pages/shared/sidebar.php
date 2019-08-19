<div class="main-sidebar">
    

<div class="company-name-logo">
<?php
   include("../module/database/database.php"); 

   $sql = 'SELECT `logo` FROM `companies` WHERE id='.$_SESSION['cid'];
   $res = mysqli_query($conn,$sql);

   while($row = mysqli_fetch_assoc($res)){
   echo '
   <img class="company-logo" src="data:image/jpeg;base64,'.base64_encode($row['logo']).'" >
   ';
}
?>
 <div class="company-info">
    <div class="company-name">Hat tech</div>
    <div class="company-date"> 18th october 2019</div>
  </div>
</div>

   
   
<div class="line"></div>

</div>