<!doctype html>
<html lang="en">
  <head>
      <?php
           include('links.php'); 
      ?>

 
    <link rel="stylesheet" href="../assets/css/sign.css" >
    <title>Sign up</title>
  </head>
  <body>

<?php

  session_start();

  if(isset($_SESSION['msg']) && isset($_SESSION['msg-type']) ){
    if($_SESSION['msg-type'] == 'danger'){
      echo 
      
      '<div id="notification" class="notification notification-danger">
      <label class="notification-label">'.$_SESSION['msg'].'</label>
      <img id="notification-x"src="../assets/img/x-icon.png" class="notification-x">
     </div>'
     
     ;
     }else if($_SESSION['msg-type'] == 'normal'){
      echo 
      
      '<div id="notification" class="notification notification-normal">
      <label class="notification-label">'.$_SESSION['msg'].'</label>
      <img id="notification-x"src="../assets/img/x-icon.png" class="notification-x">
     </div>'
     
     ;
     }
    unset($_SESSION['msg']);
    unset($_SESSION['msg-type']);
  }

?>


 


    <div class="main-card">


     <div class="switch-div">
             <div id="signin-switch" class="switch-left">Sign in</div>
             <div id="signup-switch" class="switch-right">Sign up</div>
     </div>



     <form id="signup-form" action="../module/sign/signup.php" method="post">
              <div class="field-div">
                   <label>E-Mail</label>
                   <input placeholder="email" type="email" name="email" required >
             </div>
             <div class="field-div">
                   <label>Name</label>
                   <input placeholder="company name" type="text" name="name" required>
             </div>
             <div class="field-div">
                   <label>Password</label>
                   <input placeholder="Password" type="password" name="password" required>
             </div>
             <div class="field-div">
                   <label>Re enter password</label>
                   <input placeholder="Re enter password" type="password" name="repassword" required>
             </div>
             <button type="submit" class="sign-btn">Sign up</button>
     </form>
    


     <form id="signin-form" action="../module/sign/signin.php" method="post">
              <div class="field-div">
                   <label>E-Mail</label>
                   <input name="email" placeholder="email"type="text" required>
             </div>
    
             <div class="field-div">
                   <label>Password</label>
                   <input name="password" placeholder="Password" type="password" required>
             </div>
        
             <button type="submit" class="sign-btn">Sign in</button>
     </form>


    </div>
    <script src="../assets/js/notification.js"></script>
    <script src="../assets/js/sign.js"></script>
  </body>
</html>