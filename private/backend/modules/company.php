<?php


class company {

    private $id;
    private $name; 
    private $email;
    private $password;
    private $logo;
    private $created_at;


    private function __construct($id,$name,$email,$password,$logo,$created_at){
        $this->id =  $id;
        $this->name =  $name;
        $this->emai =  $emai;
        $this->password =  $password;
        $this->logo =  $logo;
        $this->created_at =  $created_at;
    }


    public function getId(){
          return $this->id;
    }

    public function getName(){
         return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }



     
}
?>