<?php
namespace Admin;

//use MVC\Repository;
use Model\Company;
use Model\User;

class UserController {

    function indexAction() {
      $otro = $_GET['otro'];
      $company = new Company;
      $user = new User;
      $user->create(['name'=>'katherine']);

      return [
        'list'=> $company->select(['id', 'name']),
        'user'=> $user,
      ];
    }

    function newAction(){

      return [];
    }
}
