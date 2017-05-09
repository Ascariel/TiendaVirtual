<?php
namespace Controller\Shop;

class LogoutController {
    static $template = 'Layout/base.html.php';


    function userLogoutAction(){
      $_SESSION["nombre"] = null;
      $_SESSION["apellido"] = null;
      $_SESSION["email"] = null;

      return [];
    }
}
