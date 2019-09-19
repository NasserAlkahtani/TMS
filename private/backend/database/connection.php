<?php

require_once __DIR__ . '/../../config/config.php';

// Create connection
$conn = new mysqli(config::$dbHost, config::$dbUsername, config::$dbPassword,config::$dbName);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn
// echo "Connected successfully";

?>