<?php
namespace Model;

use MVC\Repository;

class User extends Repository {
  protected $table ='Usuario';
  
  public function getName(){
    return "Nombre de Usuario";
  }
}
