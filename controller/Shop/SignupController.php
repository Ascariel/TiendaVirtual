<?php
namespace Controller\Shop;

use Model\User;

class SignupController {
    static $template = 'Layout/base.html.php';

    function indexAction() {
    	return ['title'=> "Registro Usuarios"];
    }


    function userSignupAction(){
      $_SESSION["nombre"] = $_POST["nombre"];
      $_SESSION["apellido"] = $_POST["apellido"];
      $_SESSION["email"] = $_POST["email"];      

      return [];
    }
}
