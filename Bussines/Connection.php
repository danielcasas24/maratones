<?php

class Connection {
  private $connection;
  private $host = 'localhost';
  private $port = 5432;
  private $db = 'prueba';
  private $user = 'daniel';
  private $pass = 'daniel';

  public function __construct() {
    //$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    //$this->connection = pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->db." user=".$this->user." password=".$this->spass);
    //funciona//$this->connection = pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->db." user=".$this->user." password=".$this->pass);
    $this->connection = pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->db." user=".$this->user." password=".$this->pass);
    //$this->connection = new PDO('pgsql:host=localhost;dbname=prueba', 'daniel', 'daniel');
    //$result = pg_query($this->connection, "select * from pg_stat_activity");
    var_dump(pg_fetch_all(pg_query($this->connection, "select * from \"Integrante\"")));
    var_dump(pg_fetch_all($this->connection->query("select * from \"Integrante\"")));
    
    //var_dump(pg_fetch_all($this->connection->query('SELECT * FROM "Integrante"')));
  }

  public function query($sql) {
    //return $this->connection->pg_query($sql);
    //$this->connection = pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->db." user=".$this->user." password=".$this->pass);
    //return pg_query($this->connection, $sql);
    return $this->connection->query($sql);
    //funciona//return var_dump(pg_fetch_all(pg_query($this->connection, $sql)));
  }
}