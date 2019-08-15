<?php

require_once '../database/database.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];




$sqlCheckEmail = "SELECT * FROM `companies` WHERE email = '".$email."' ";

$resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);


if($password == $repassword){
    header('location: ../../pages/sign.php?msg=1');
}

 
if(mysqli_num_rows($resultCheckEmail) > 0 ){
    header('location: ../../pages/sign.php?msg=2');
}else{
      $sqlInsert = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";

      $resInsert =  mysqli_query($conn,$sqlInsert);

     if($resInsert){
        header('location: ../../pages/sign.php?msg=3');

     }else{
        header('location: ../../pages/sign.php?msg=4');

     }
}




?>