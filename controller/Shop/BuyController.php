<?php
namespace Controller\Shop;

use Library\Controller;
use Model\Entity\Order;
use Model\Entity\OrderDetail;

class BuyController extends Controller {
    static $template ='Layout/base.html.php';

    function indexAction(){
        //debe verificar si el usuario esta en session.
        if(!isset($_SESSION['user']['id'])){
            $this->redirect('/shop/buy/auth');
        }
        return [
            'title'=>"La Tienda > Proceso de Compra",
        ];
    }

    function authAction(){
        return [];
    }

    function verifyAction(){
        if(!$this->isPOST()) $this->redirect('/shop/buy/auth');

        $this->redirect('/shop/buy');
    }

    function paymentAction(){
        if(!$this->isPOST()) $this->redirect('/shop/buy');
        $_SESSION['payment'] = $this->post('pay');
        //guardar detalles del usuario en session.
        $this->redirect('/shop/buy/summary');
    }

    function summaryAction(){
        $payment=$_SESSION['payment'];
        $cart=$_SESSION['cart'];
        $sum=0;
        foreach($cart as $item){
            $sum += $item['price'] * $item['quantity'];
        }
        $total = $sum * 1.19 + ($payment['delivery']==2?1000:0);
        $type = $payment['type']==1?'Pago en Linea (TC)':'Pago en tienda';
        $delivery = $payment['delivery']==1?'Retiro en Tienda':'Despacho Domicilio';
        $address = ($payment['delivery']==2?$payment['address']:null);

        return [
            'total'=>$total,
            'type'=>$type,
            'delivery'=>$delivery,
            'address'=>$address,
            'title'=>"La Tienda > Detalle de Compra",
        ];
    }

    function confirmAction(){
        if(!$this->isPOST()) $this->redirect('/shop/buy');
        $order = new Order;
        $order->create([
            'status'=>1,
            'created_at'=>(new \DateTime())->format('Y-m-d H:i:s'),
            'user_id'=>$_SESSION['user']['id'],
        ]);
        $orderId = $order->getLastId();
        $detail = new OrderDetail;
        foreach($_SESSION['cart'] as $product){
            $detail->create([
                'product_id'=>$product['id'],
                'order_id'=>$orderId,
                'quantity'=>$product['quantity'],
                'price'=>$product['price'],
            ]);
        }
        unset($_SESSION['cart'], $_SESSION['payment']);
        $this->redirect('/shop/buy/success');
    }

    function successAction(){
        //compra realizada con exito.
        //dar opcion de ver las ordenes
        return [
            'title'=>"La Tienda > Compra Exitosa",
        ];
    }
}
