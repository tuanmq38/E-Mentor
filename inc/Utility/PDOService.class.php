<?php

// MAKE SURE THE PORT FOR YOUR DB SERVER IS CORRECT 
// AND set the dsn correctly!
// Other than that, this code is complete.
class PDOService {

   //Connection Details. Make sure to set up the config.inc.php
   private $host = DB_HOST;
   private $user = DB_USER;
   private $password = DB_PASSWORD;
   private $dbname = DB_NAME;
   private $dbport = DB_PORT;

   private $dsn = "";          //Data Source Name
   private $className = "";    //Name of the class we are mapping with this PDO Agent
   private $error = "";        //Store any error messages
   private $stmt;         //Stores our statement instance
   private $pdo = "";          //Store our local instantiation of the PDO driver
   

   // make the connection. Make sure to set the DSN
   public function __construct(string $className)  {

       //Store the local class name
       $this->className = $className;

       //Build the DSN
       $this->dsn = "mysql:localhost=" .$this->host.";dbname=".$this->dbname.";port=".$this->dbport;
       
       //set PDO options
       $options = array(
           PDO::ATTR_PERSISTENT => true,
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       );

       try {
           //Instantiate the PDO library inside our wrapper class
           $this->pdo = new PDO($this->dsn, $this->user, $this->password, $options);
       } catch (Exception $ex) {
           $this->error = $ex->getMessage();
           echo $this->error;
   }
}

   //Prepare the statement for execution
   public function query(string $query)    {
       $this->stmt  = $this->pdo->prepare($query);
   }

   //Bind the values, select the appropriate type
   public function bind($param, $value, $type = null){  
       if (is_null($type)) {  

           switch (true) {  
               case is_int($value):  
               $type = PDO::PARAM_INT;  
               break;  
               case is_bool($value):  
               $type = PDO::PARAM_BOOL;  
               break;  
               case is_null($value):  
               $type = PDO::PARAM_NULL;  
               break;  
               default:  
               $type = PDO::PARAM_STR;  
               }  
       }  
       $this->stmt->bindValue($param, $value, $type);  
   }  

   //Execute the statement
   public function execute($data = null)   {
       if (is_null($data)) {
           return $this->stmt->execute();
       } else {
           return $this->stmt->execute($data);
       }
   }

   //Return a single result
   public function singleResult()  {
       
       //Set the fetch mode
       $this->stmt->setFetchMode(PDO::FETCH_CLASS, $this->className);
       //Return the result
       return $this->stmt->fetch(PDO::FETCH_CLASS);
   }

   //Return multiple results
   public function getResultSet()  {

       return $this->stmt->fetchAll(PDO::FETCH_CLASS, $this->className);
   }

   public function rowCount() : int {
       return $this->stmt->rowCount();
   }

   public function lastInsertedId() : int {
       return $this->pdo->lastInsertId();
   }

}