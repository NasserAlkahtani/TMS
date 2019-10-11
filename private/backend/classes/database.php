<?php
require_once "init.php";

class database {

    private static $instance = null ; // you store the same object here for singleton design pattern
    private $pdo ; // the pdo connection object
    private $query ; // last exueuted query
    private $error = false; // error flag
    private $results;
    private $count = 0 ; // count of last query
  
  
    private function __construct(){


        $host          = config::get("database/host");
        $username      = config::get("database/username");
        $password      = config::get("database/password");
        $database_name = config::get("database/database_name");
    
       try{
          $this->pdo = new PDO("mysql:host=".$host.";dbname=".$database_name, $username, $password);
        }catch(PDOException $e){
             die($e->getMessage());
             // sign out user here if crash 
       }
    
      }
    
    
     public static function getInstance(){
       if(!isset(self::$instance)){
              self::$instance = new database();
       }
            return self::$instance;
     }

     public function run($sql,$params = array()){ // to query database and get default result without converting it to module (For complex query)
        $error = false ;
        try{

          if($this->query = $this->pdo->prepare($sql)){ // assining a value and checking at the same time


               if(count($params) > 0){
                 // foreach ($params as $key => $value) {
                 //   $this->query->bindParams($key,$value);
                 // }
                 if($this->query->execute($params)){
                    $this->result = $this->query->fetchAll(PDO::FETCH_OBJ);
                    $this->count  = $this->query->rowCount();

                 }else{
                     $this->error =  true;
                 }
               }else{
                 if($this->query->execute()){
                    $this->result = $this->query->fetchAll(PDO::FETCH_OBJ);
                    $this->count = $this->query->rowCount();
                 }else{
                     $this->error =  true;
                 }
               }
          }
        }catch(PDOException $e){
            echo $e->getMessage();
        }

     }


    //  public function runModule($table,$sql,$params = array()){ // to query database and get results converted to module (Simple query)
    //     $error = false ;
    //     try{

    //       if($this->query = $this->pdo->prepare($sql)){ // assining a value and checking at the same time


    //            if(count($params) > 0){
    //              // foreach ($params as $key => $value) {
    //              //   $this->query->bindParams($key,$value);
    //              // }
    //              if($this->query->execute($params)){
    //                 $freshResult = $this->query->fetchAll(PDO::FETCH_OBJ);
    //                 $this->result = gerArrayOfModulesObjects($table,$freshResult);
    //                 $this->count = $this->query->rowCount();

    //              }else{
    //                  $this->error =  true;
    //              }
    //            }else{
    //              if($this->query->execute()){
    //                 $this->result = $this->query->fetchAll(PDO::FETCH_OBJ);
    //                 $this->count = $this->query->rowCount();
    //              }else{
    //                  $this->error =  true;
    //              }
    //            }
    //       }
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }

    //  }

    //  private function gerArrayOfModulesObjects($table,$freshResult){
    //          $modulesArr = array(); 
             
    //          if($table == config::get("tables/COM")){
    //              foreach($freshResult as $obj){
    //                 array_push($modulesArr,new company($obj->id,$obj->name,$obj->email,$obj->password,$obj->logo,$obj->created_at));
    //             }     
    //           }else if($table == config::get("tables/EMP")){

    //           }else if($table == config::get("tables/PRO")){

    //           }else if($table == config::get("tables/TAS")){
            
    //           }
    //  }

     public function getResult(){
        return $this->result;
      }
      public function getError(){
             return $this->error;
      }

      public function getCount(){
        return $this->count;
      }
     
}
?>