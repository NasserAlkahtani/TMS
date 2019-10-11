<?php
class config{

  static $config  = array(
       "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "database_name" => "TMS"
       ),
       "tables" => array(
            "COM" => "companies",
            "EMP" => "employees",
            "PRO" => "project",
            "TAS" => "tasks"
       )
  );
    

  static function get($configPath){
    $config = self::$config ;

    $path_array = explode(".", $configPath);


    if(count($path_array) <= 1){
      $path_array = explode ("/", $configPath);
    }

    if(count($path_array) <= 1){
        $path_array = explode ("=>", $configPath);
    }

    if(count($path_array) <= 1){
      return "path incoorect format use ( / ) or ( . ) or (=>) ";
    }


    foreach($path_array as $path_item ) {
         if(isset($config[$path_item])){
                   $config = $config[$path_item] ;
         }else{
           return "incoorect path";
         }
     }


    return $config;  }

}



?>