<?php
namespace Controller\Root;

use Library\Controller;

class DefaultController extends Controller {
  static $template ='Layout/base.html.php';

  public function indexAction(){
    if(!$this->isGET()) $this->redirect("/404");

    return ['title'=>'Index'];
  }

}
