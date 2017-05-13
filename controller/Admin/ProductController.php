<?php
namespace Controller\Admin;

use Library\Controller;
use Model\Entity\Product;

class ProductController extends Controller {
    static $template ='Layout/base.html.php';

    function indexAction(){
        return [
            'title'=>"La Tienda > Home",
            'products'=>(new Product)->getAllproducts(),
        ];
    }

    function newAction(){
        return [
            'title'=>"La Tienda > Home",
            'products'=>(new Product)->getAllproducts(),
        ];
    }

    function editAction(){

    }

    function createAction(){
      $nombre_categoria = $_POST["name"];
      
      $category = new Category;
      $category->create(['name'=>$nombre_categoria ]);
      $this->redirect('/admin/category');
      return ["title" => "Listado Categorias"];
    }    

    //muestra un producto seleccionado
    // function showAction(){
    //     $id = (int)$this->get('id');
    //     $product = (new Product)->getOneProductById($id);

    //     return [
    //         'title'=>"La Tienda > Productos > $product[name]",
    //         'product'=>$product,
    //     ];
    // }

    //agrera un producto al carro de compras


}
