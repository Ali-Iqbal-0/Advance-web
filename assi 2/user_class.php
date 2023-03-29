<?php
include('db.php');
class user extends db{
    private $name;
    private $email;
    private $pwd;


    public function setUser($t1, $t2, $t3){
        echo "im in class <br/>";
        echo $this->name = $t1;
        echo $this->email = $t2;
        echo $this->pwd = $t3;
    
        $q = "INSERT INTO USER(name, email, password) VALUES ('$t1', '$t2', '$t3')";
        $this->conn->exec($q);
        // echo "done";

        header("location: signin.php?msg=User created. Login Now");
    }
    public function loginUser($t1, $t2){
        $q = "SELECT * FROM USER WHERE email='$t1' and password='$t2'";
        $result = $this->conn->query($q);
        return $result;    
    }

    public function getAllUser(){
        $q = "SELECT * FROM USER";
        $result = $this->conn->query($q);
        return $result;  

    }
    
}