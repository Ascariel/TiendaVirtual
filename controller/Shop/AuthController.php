<?php
namespace Controller\Shop;

use Library\Controller;
use Model\Entity\User;

class AuthController extends Controller {
    static $template = 'Layout/base.html.php';

    function indexAction() {
    	$this->redirect('/shop/auth/signin');
    }


    function signupAction(){
      return [
          'title'=> "Registro Usuarios",
          'post'=> 'doSignup',
      ];
    }

    function signinAction(){
      return [
          'title'=> "Ingreso de Usuarios",
          'post'=> 'doSignin',
      ];
    }

    function doSignupAction(){
        if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;
        $_SESSION['user']['id']=1;
        $this->redirect('/shop/product');
    }

    function doSigninAction(){
      if(empty($_SESSION['user'])) $_SESSION['user'] = $_POST;
      $_SESSION['user']['id']=1;
      $this->redirect('/shop/product');
    }

    function logoutAction(){
      unset($_SESSION['user']);
      $this->redirect('/shop/product');
    }
}
