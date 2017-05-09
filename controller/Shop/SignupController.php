<?php
namespace Controller\Shop;

use Model\User;

class SignupController {
    static $template = 'Layout/base.html.php';

    function indexAction() {
    	return ['title'=> "Registro Usuarios"];
    }


    function userSignupAction(){
      if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;

      return [];
    }
}
