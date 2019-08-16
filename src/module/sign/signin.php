<?php


include '../database/database.php';


$email    = $_POST['email'];
$password = $_POST['password'];


echo $email;
echo $password;
$sql = "SELECT * FROM companies WHERE email ='".$email."' AND password ='".$password."'";


session_start();

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) == 1) {
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['logedin'] = true; 
      $_SESSION['cid'] = $row['id'];
    }
    header('location: ../../pages/index.php');
}else if(mysqli_num_rows($result) > 1){
    $_SESSION['msg'] = "something went worng please try again later";
    $_SESSION['msg-type'] = "normal";
    header('location: ../../pages/sign.php');
}else{
   $_SESSION['msg'] = "Email or password is worng";
   $_SESSION['msg-type'] = "danger";
   header('location: ../../pages/sign.php?msg=1');
}


 mysqli_close($conn);
?>