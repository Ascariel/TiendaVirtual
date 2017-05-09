<?php
namespace Controller\Shop;

use Library\Controller;
use Model\User;

class AuthController extends Controller {
    static $template = 'Layout/base.html.php';

    function indexAction() {
    	return ['title'=> "Registro Usuarios"];
    }


    function signupAction(){
      if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;
    }

    function signinAction(){
      if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;
      $this->redirect('/shop/product');
    }

    function logoutAction(){
      unset($_SESSION);
      session_destroy();
      $this->redirect('/shop/product');
    }
}
