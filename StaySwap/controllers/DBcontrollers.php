<?php
class DBcontroler
{
   public $DBHost = 'localhost';
   public $DBUser = 'root';
   public $DBPassword = '';
   public $DBName = 'stayswap';
   public $conn_obj;

   public function openConnection()
   {
      $this->conn_obj = new mysqli($this->DBHost, $this->DBUser, $this->DBPassword, $this->DBName);
      if ($this->conn_obj->connect_error) {
         echo 'Faild to connect to DB.<br> Error : ' . $this->conn_obj->connect_error . "happend.<br>";
         return false;
      }
      return true;
   } // return true if we have connected with the db

   public function closeConnection()
   {
      if ($this->conn_obj) {
         $this->conn_obj->close();
         return true;
      }
      echo "Failed to close connection, not open to close!<br>";
      return false;
   }

   public function selectFromDB($qry)
   {
      $result = $this->conn_obj->query($qry); // query function returns "mysql_improved object" , that has many functions like fetch, fetch all ..ect
      if (!$result) { //if the query if false will...
         echo 'Error: ' . mysqli_error($this->conn_obj) . '<br>';
      } else {
         return $result->fetch_all(MYSQLI_ASSOC); // returns result set [the selected table]
         //echo 'fetch-all:'.print_r($result);
         //$result->fetch_assoc(MYSQLI_ASSOC);
         //echo 'fetch-assoc:'.print_r($result);
      }
   }
   public function executeQuery($query)
   {
      $result = $this->conn_obj->query($query);
      if (!$result) {
         echo 'Error: ' . $this->conn_obj->error . '<br>';
         return false;
      } else {
         return $result;
      }
   }
}
