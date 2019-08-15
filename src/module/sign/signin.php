<?php


include '../database/database.php';


$email    = $_POST['email'];
$password = $_POST['password'];


echo $email;
echo $password;
$sql = "SELECT * FROM companies WHERE email ='".$email."' AND password ='".$password."'";



$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
    session_start();
    while($row = mysqli_fetch_assoc($result)) {

      $_SESSION['logedin'] = true; 
    }
 }else {
    header('location:');
 }
 mysqli_close($conn);
?>