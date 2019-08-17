<?php

require_once '../database/database.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// $sqlInsert = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";

session_start();


$sqlCheckEmail = "SELECT * FROM `companies` WHERE email = '".$email."' ";

$resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);




if(mysqli_num_rows($resultCheckEmail) > 0){
   $_SESSION['msg']  = "Email already exist !";
   $_SESSION['msg-type'] = "danger";
   header('location: ../../pages/sign.php');
   exit(); 
}




  if($repassword != $password){
    $_SESSION['msg'] =  "Passwords do not match !";
    $_SESSION['msg-type'] = "danger";
    header('location: ../../pages/sign.php');
    exit(); 
  } 


    $sql = "INSERT INTO `companies` (`id`, `name`, `email`, `password`, `logo`) VALUES (NULL, '".$name."', '".$email."', '".$password."', NULL);";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        $_SESSION['msg'] =  "Something went worng try again later";
        $_SESSION['msg-type'] = "danger";        
        header('location: ../../pages/sign.php');
        exit(); 
    }



    $sqlGetId = "SELECT * FROM `companies` WHERE email = '".$email."' ";


    $resGetId = mysqli_query($conn,$sqlGetId);


    if(mysqli_num_rows($resGetId) == 1){
        
            $_SESSION['logedin'] = "true"; 

        while($row = mysqli_fetch_assoc($resGetId)) {
            $_SESSION['cid'] = $row['id'];
        }


       header('location: ../../pages/index.php');
       exit(); 

    }
      
    header('location: ../../pages/index.php');
    exit(); 







?>