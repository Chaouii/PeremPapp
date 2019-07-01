<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "products";
 
    // object properties
    public $user_id;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    function getProduct(){
        // select all query
        $query = "SELECT
                    `Name`, `Category`, `Peremp_Date`
                FROM
                    " . $this->table_name . " 
                WHERE
                    User_Id='".$this->user_id."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    
}