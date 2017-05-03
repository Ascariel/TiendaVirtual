<?php
namespace Model;

use Library\Repository;

class User extends Repository {
  protected $table ='Usuario';

  public function getName(){
    return "Nombre de Usuario";
  }
}
