<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "TMS";

        $Beef;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sSQL= 'SET CHARACTER SET utf8'; 
        mysqli_query($conn,$sSQL) or die ('Can\'t charset in DataBase'); 
        
        // Check connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        } 
   

?>
