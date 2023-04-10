<?php

class Personne{

}

/*class Database {
    protected $connection;
  
    public function __construct($host, $username, $password, $database) {
      $this->connection = new mysqli($host, $username, $password, $database);
    }
  
    public function query($query) {
      return $this->connection->query($query);
    }
  }
  
  class Table extends Database {
    public function getAll() {
      $result = $this->query("SELECT * FROM table_name");
      $rows = [];
  
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
  
      return $rows;
    }
  }
  
  $table = new Table("localhost", "username", "password", "database_name");
  $rows = $table->getAll();
  
  foreach ($rows as $row) {
    echo $row['column_name'];
  }*/
  