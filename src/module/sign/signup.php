<?php

include '../database/database.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$sql = "SELECT * FROM 'companies' WHERE 'email'=".$email;

if(mysqli_query($conn,$sql)){
    session_start;
    $_SESSION['msg-email'] = "email already exist!!"; 
}else{
    if($repassword == $password){
        $sql = "INSERT INTO table_name ('name','email'.'password') VALUES ($name,$email,$password);";
        session_start;
        $_SESSION['msg-user'] = "user added"; 
        header ('location: index.php');
    }else{
    session_start;
    $_SESSION['msg-password'] = "the passwords do not match!!"; 
    }

    
}



?>