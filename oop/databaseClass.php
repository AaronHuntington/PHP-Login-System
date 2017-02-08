<?php

class database{
    public $connection; 

    // Open Database automatically.
    function __construct(){
        $this->open_database();
    }

    // Opening the database connection. 
    public function open_database(){
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        if(mysqli_connect_errno()){
            die("Database connection fail: ".mysqli_error());
        }
    }

    // Querying the SQL Scripts.
    public function query($sql){
        $result = mysqli_query($this->connection, $sql);

        if($result){
            return $result;
        } else {
            die("SQL script query failed.");
        }
    }

    // Escaping the string.
    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

}

$database = new database;

?>