<?php
namespace Library;

class AppKernel {
  private $module = 'root';
  private $controller = 'default';
  private $action = 'index';

  public function __construct(){
    $path = explode('/',$_SERVER['PATH_INFO']);
    $this->module = ucfirst(isset($path[1])?$path[1]:'root');
    $this->controller = ucfirst(isset($path[2])?$path[2]:'default');
    $this->action=(isset($path[3])?$path[3]:'index');
  }

  protected function loadAction(){
    $class = "Controller\\{$this->module}\\{$this->controller}Controller";
    $method = "{$this->action}Action";
    return $class::$method();
  }

  protected function loadView($action){
    extract($action);
    include "../view/$this->module/$this->controller/$this->action.html.php";
  }

  public function run(){
    $this->loadView($this->loadAction());
  }

}
