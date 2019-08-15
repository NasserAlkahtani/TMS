<?php


include '../database/database.php';


$email    = $_POST['email'];
$password = $_POST['password'];


echo $email;
echo $password;
$sql = "SELECT * FROM companies WHERE email ='".$email."' AND password ='".$password."'";



$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "hello";
    }
 } else {
    echo "0 results";
 }
 mysqli_close($conn);
?>