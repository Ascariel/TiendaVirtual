<?php
namespace Controller\Shop;

use Library\Controller;
use Model\Entity\Product;

class BuyController extends Controller {
    static $template ='Layout/base.html.php';

    function indexAction(){
        //debe mostrar la seleccion de tarjeta de credito
        return [
            'title'=>"La Tienda > Proceso de Compra",            
        ];
    }
    
    function authenticateAction(){
        
    }
    
    
}