<?php
namespace Model;

use MVC\Repository;

class User extends Repository {

  public function getName(){
    return "Nombre de Usuario";
  }
}
