<?php
require_once "init.php";

$db = database::getInstance();



 if($db->getError()){
     echo "error";
 }else{
     echo $db->getResult()[0]->id;
 }

?>