<?php
class Employee{

    // database connection and table name
    private $conn;
    private $table_name = "employees";

    // object properties
    public $id;
    public $lastname;
    public $firstname;
    public $phone_number;
    public $address;
    public $position;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){

        // select all query
        $query = "SELECT id, lastname, firstname, phone_number, address, position  FROM " . $this->table_name;

        // prepare query statement
        $statement = $this->conn->prepare($query);

        // execute query
        $statement->execute();

        return $statement;
    }


}


?>
