<?php
namespace MVC;

class Database {
  private $connection = NULL;

  public function getConnection(){
    if($this->connection === NULL) {
      $data = [
        'dbname'=>DatabaseConfig::$database,
        'host'=>DatabaseConfig::$host,
        'port'=>DatabaseConfig::$port,
      ];
      $arrayConn=[];
      foreach($data as $key=>$value){
        $arrayConn[]="$key=$value";
      }
      $dsn = DatabaseConfig::$engine.':'.implode(';', $arrayConn);
      $this->connection = new \PDO($dsn, DatabaseConfig::$user, DatabaseConfig::$password);
    }

    return $this->connection;
  }

}
