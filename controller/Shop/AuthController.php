<?php
namespace Controller\Shop;

use Model\User;

class SignupController {
    static $template = 'Layout/base.html.php';

    function indexAction() {
    	return ['title'=> "Registro Usuarios"];
    }


    function signupAction(){
      if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;

      return [];
    }

    function signinAction(){

      return [];
    }

    function logoutAction(){
      unset($_SESSION);
      $this->redirect('/shop/product');
    }
}
