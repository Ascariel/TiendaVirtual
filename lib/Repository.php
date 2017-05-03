<?php
namespace MVC;

class Repository {
  protected $table = NULL;
  private $database = NULL;

  public function __construct($table=null){
    if(NULL === $table) $table = strtolower(basename(str_replace('\\','/',get_class($this))));
    if(NULL === $this->table) $this->table = $table;
    $this->database = new Database();
  }

  public function create(array $data){
    $conn = $this->database->getConnection();
    $fields = array_keys($data);
    $fields = '`'.implode('`,`', $fields).'`' ;
    $values = [];
    foreach(array_values($data) as $val){
      $values[] = $conn->quote($val);
    }
    $values = implode(",",$values);
    $sql = "INSERT INTO $this->table($fields) VALUES ($values)";
    $conn->exec($sql);
  }

  public function update($id, $data){
    $id = (int)$id;
    $conn = $this->database->getConnection();
    $fields = array_keys($data);
    foreach(array_values($data) as $key => $val){
      $set[] = '`'.$fields[$key]."`=".$conn->quote($val);
    }
    $set = implode(',', $set);
    $sql = "UPDATE $this->table SET $set WHERE id=$id";
    $conn->exec($sql);
  }

  public function delete($id){
    $id = (int)$id;
    $conn = $this->database->getConnection();
    $sql = "DELETE FROM $this->table WHERE id=$id";
    $conn->exec($sql);
  }

  public function select(array $fields, $where=NULL, $orderby=NULL, $having=NULL, $limit=NULL){
    $conn = $this->database->getConnection();
    $fields = '`'.implode('`,`', $fields).'`' ;
    $sql = "SELECT $fields FROM $this->table";
    if($where !== NULL) $sql .= " WHERE $where";
    if($orderby !== NULL) $sql .= " ORDER BY $orderby";
    if($having !== NULL) $sql .= " HAVING $having";
    if($limit !== NULL) $sql .= " LIMIT $limit";

    return $conn->query($sql, \PDO::FETCH_ASSOC);
  }

  protected function customQuery($sql) {
    $conn = $this->database->getConnection();
    return $conn->query($sql);
  }

}