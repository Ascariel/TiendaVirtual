<?php
namespace Model;

use Library\Repository;

class Product extends Repository {
  protected $table ='product';

  public function getAllproducts(){
      return $this->select(['id', 'name', 'image']);
  }
  public function getOneProductById($id){
    return $this->select(['name'], "id=$id")[0];
  }
}
