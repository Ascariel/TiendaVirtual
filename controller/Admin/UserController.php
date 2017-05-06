<?php
namespace Controller\Admin;

use Model\Company;
use Model\User;

class UserController {
    #static $template = 'Layout/base.html.php';

    function indexAction() {
      $otro = $_GET['otro'];
      $company = new Company;
      $user = new User;
      #$user->create(['nombre'=>'katherine']);

      return [
        'list'=> $user->select(['id', 'nombre']),
        'user'=> $user,
      ];
    }

    function newAction(){

      return [];
    }

    function signupAction(){

      return [];
    }
}
