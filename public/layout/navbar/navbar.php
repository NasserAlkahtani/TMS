<?php
echo "<style>";
require_once __DIR__ . '/navbar.css';
echo "</style>";
?>

<div id="off-icon-dropdown-div-cover"></div>
<div class="navbar-main-div">


 <form action="" method="get">
     <div class="navbar-search-div">
         <input name="search" type="text" placeholder="Search">
         <div>
            <button><i class="fas fa-search search-icon"></i></button>
         </div>         
     </div>
</form>
<div id="off-icon-dropdown-div-cover"></div>



     <a id="dropdown-button"><i class="fas fa-power-off off-icon"></i></a>
     

</div>


<div id="off-icon-dropdown-div" class="off-icon-dropdown-div">
       <div class="off-icon-dropdown-div-accounts">Beef</div>
      
       <div class="off-icon-dropdown-div-footer"></div>

        <div class="off-icon-dropdown-div-sign">
        <a href="../../../private/backend/sign/signout.php"><button>Sign out</button></a>
       </div>
     </div>

     <?php
        echo "<script>";
        require_once __DIR__ . '/navbar-dropdown.js';
        echo "</script>";
      ?>