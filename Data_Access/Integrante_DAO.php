<?php
include('DAO.php');

class Integrante_DAO extends DAO {
  public function __construct() {
    parent::__construct('Integrante');
  }

  public function getAll() { 
      parent::getAll();
  }
  public function getById($id) { 
      parent::getById($id);
  }
  //... delete($id) { ... }
  //... update(...) { ... }
  
  public function getActiveUsers() {
    //...
    $result = parent::query('SELECT * FROM ' . parent::getTable());
    while ($record = $result->fetch_object()) {
        
    //  ...
    }
    return $users;
  }
}