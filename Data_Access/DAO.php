<?php
include('Bussines/Connection.php');

class DAO extends Connection {
  private $table;
  private $connection;
 
  public function __construct($table) {
    $this->setTable($table);
    $this->connection = new Connection();
  }

  public function getTable() { 
      return $this->table; 
  }
  public function setTable($name) { 
      $this->table = '"' . $name . '"'; 
  }
  public function getConnection() { 
      return $this->connection; 
  }

  public function getAll() {
      
  }
  public function getById($id) {
    //return parent::query('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id)->fetch_object();
    return parent::query('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id);
  }
  public function deleteById() {
      
  }
}
