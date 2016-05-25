<?php

/* This file contains methods to connect to DB, search for elements etc.....*/

/* Request MySQL Conf file with credentials */	
require_once("dbConf.php");

class MySQLDatabase
{
    private $connection;
    public $last_query;
     /*Table name*/
    private $dbMenuItems="menuItems";
    public $imageCategories = array('Funny','Facebook','Ofensive','Animals','Sexy');
    
    // Constructor
    function __construct(){
        $this->open_connection();
    }
    
    // Open MySQL Connection
    public function open_connection(){
        try{
            $this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        }catch(Exception $except){
            die("Unable to connect to Database");
        }
    }
    
    // Close MySQL Connection
    public function close_connection(){
        if(isset($this->connection)){
            $this->connection->close();
            unset($this->connection);
        }
    }
    
    // Run MySQL Query
    public function query($sql){
        $this->last_query = $sql;
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result); 
        return $result;
    }
    
    // Confirm MySQL Query
    private function confirm_query($result){
        if(!$result){
            $output = "Database query failed: " . mysqli_error($this->connection) . "<br />";
            $output .= "Last MySQL Query: " . $this->last_query;
           die($output);  
        }
    }
   
    // Fetch array and return results
    public function fetch_array($result){
        return mysqli_fetch_array($result);
    }
    
    public function find_by_query($query=""){
        $result = $this->query($query);
        $arrayWithData = array();
        while($row = $this->fetch_array($result)){
            $arrayWithData[]=$row;
        }
        $this->close_connection();
        return $arrayWithData;   
    }
        
        /* Run query, find results, save results to $object_array, return $object_array */
    public function findMenuItem(){
        global $database;
        $result = $database->query("SELECT * FROM ".$this->dbMenuItems." ORDER BY id ASC");
        $object_array = array();
        /* Save results to object array */
        while($row = $database->fetch_array($result)){
            $object_array[]=$row;
        }
        /* Return object array*/
        return $object_array;          
        /* Close MySQL connection */
        $this->close_connection();
    }    
    
    /** Returns upload Categories*/
    public function getFileCategories(){
        $categories = $this->imageCategories;
        return $categories;
    }      
}

// Instantiate class - creates and Instance of the class under the $database var name
$database = new MySQLDatabase();






?>