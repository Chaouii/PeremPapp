<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "credentials";
 
    // object properties
    public $id;
    public $mail;
    public $password;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    mail=:mail, password=:password";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->mail=htmlspecialchars(strip_tags($this->mail));
        $this->password=htmlspecialchars(strip_tags($this->password));
  
        // bind values
        $stmt->bindParam(":mail", $this->mail);
        $stmt->bindParam(":password", $this->password);

        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `id`, `mail`, `password`
                FROM
                    " . $this->table_name . " 
                WHERE
                    mail='".$this->mail."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                mail='".$this->mail."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
	 function ResentPassword(){
        // select all query
        $query = "SELECT
                    `mail`, `password`
                FROM
                    " . $this->table_name . " 
                WHERE
                    mail='".$this->mail."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
}