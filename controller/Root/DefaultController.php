<?php
namespace Controller\Root;

class DefaultController {
	static $template = 'Layout/base.html.php';

  public function indexAction(){
  	return ['title'=> "Tienda Virtual"];
  }

}
