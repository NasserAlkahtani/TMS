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



    <div class="main-card">


     <div class="switch-div">
             <div id="signin-switch" class="switch-left">Sign in</div>
             <div id="signup-switch" class="switch-right">Sign up</div>
     </div>



     <form id="signup-form" action="../module/sign/signup.php" method="post">
              <div class="field-div">
                   <label>E-Mail</label>
                   <input placeholder="email"type="text" name="email" required >
             </div>
             <div class="field-div">
                   <label>Name</label>
                   <input placeholder="company name"type="text" name="name" required>
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
    


     <form id="signin-form" action="../module/sign/signin.php">
              <div class="field-div">
                   <label>E-Mail</label>
                   <input placeholder="email"type="text" required>
             </div>
    
             <div class="field-div">
                   <label>Password</label>
                   <input placeholder="Password" type="password" required>
             </div>
        
             <button type="button" class="sign-btn">Sign in</button>
     </form>


    </div>

    <script src="../assets/js/sign.js"></script>
  </body>
</html>