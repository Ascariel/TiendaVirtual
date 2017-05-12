<?php
namespace Controller\Shop;

use Library\Controller;
use Model\Entity\Order;

class OrderController extends Controller {
    static $template ='Layout/base.html.php';

    function indexAction(){
        $userId = $_SESSION['user']['id'];
        $orders = (new Order)->getAllOrderForUser($userId);

        return [
            'orders'=>$orders,
            'title'=>"La Tienda > Listado de Ordenes de Compra",
        ];
    }
