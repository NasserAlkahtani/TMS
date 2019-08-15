<?php

require_once '../database/database.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// $sqlInsert = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";



$sqlCheckEmail = "SELECT * FROM `companies` WHERE email = '".$email."' ";

$resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);

session_start();

if(mysqli_num_rows($resultCheckEmail) > 0){
   $_SESSION['msg']  = "Email already exist!!";
   $_SESSION['msg-type'] = "danger";
   header('location: ../../pages/sign.php');
}




  if($repassword != $password){
    $_SESSION['msg'] =  "the passwords do not match!!";
    $_SESSION['msg-type'] = "danger";
    header('location: ../../pages/sign.php');
 } 


    $sql = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        $_SESSION['msg'] =  "Something went worng try again later";
        $_SESSION['msg-type'] = "danger";
        header('location: ../../pages/sign.php');
    }

      
    header('location: ../../pages/sign.php');








?>