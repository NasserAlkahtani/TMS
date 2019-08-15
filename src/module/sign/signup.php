<?php

require_once '../database/database.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// $sqlInsert = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";



$sqlCheckEmail = "SELECT * FROM `companies` WHERE email = '".$email."' ";

$resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);

if(mysqli_num_rows($resultCheckEmail) > 0){
   session_start();
   $_SESSION['msg']  = "Email already exist!!";
   $_SESSION['msg-type'] = "danger";
}else{
  if($repassword == $password){
    $sql = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../../pages/sign.php');
    }
  }else{
      session_start();
      $_SESSION['msg'] =  "the passwords do not match!!";
      $_SESSION['msg-type'] = "danger";
      
}
}





?>