<?php
namespace Controller\Shop;

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

    //muestra un producto seleccionado
    function showAction(){
        $id = (int)$this->get('id');
        $product = (new Product)->getOneProductById($id);

        return [
            'title'=>"La Tienda > Productos > $product[name]",
            'product'=>$product,
        ];
    }

    //agrera un producto al carro de compras
    function addCartAction(){
        if(!$this->isXmlHttpRequest()) $this->redirect('/shop/product');

        $product = $this->post('product');
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
        if(!isset($_SESSION['cart'][$product['id']])){
                $_SESSION['cart'][$product['id']] = 0;
        }
        $_SESSION['cart'][$product['id']] += (int)$product['quantity'];
        echo json_encode(['message'=>'Producto agregado al carro con exito.']); exit;
    }

    //ver el carro de compras
    function verCarroAction(){
        //session;
        return [
            'title'=>"La Tienda > Carro de Compras",
            'products'=>[],
        ];
    }

    //accion de hacer clic en el boton comprar
    function comprarAction(){
        //si no esta registrado mostrar cuadro de registro
        //le cuadro de registro debe ser AJAX
        //mostrar los detalles de la compra y las opciones de pago
        $logged = false;

        return ['logged'=>$logged];
    }

}
