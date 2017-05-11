<?php
namespace Model\Entity;

use Library\Repository;

class Product extends Repository {
  protected $table ='product';

  public function getAllproducts(){
      return $this->select(
          ['id', 'name', 'image', 'price'],
          'status=1'
      );
  }

  public function getOneProductById($id){
    $rows = $this->select(['id','name','image','price','stock', 'description'], "id=$id");
    return $rows->fetch();
  }
}
