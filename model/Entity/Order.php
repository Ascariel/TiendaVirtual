<?php
namespace Model\Entity;

use Library\Repository;
use OrderDetail;
class Order extends Repository {
    protected $table = 'cash_order';

    public function getOrderDetails($orderId){
        $sqlOderDetail = "
            SELECT
                od.id, p.name, od.quantity, od.price
            FROM order_detail od
            JOIN product p ON od.product_id = p.id AND od.order_id=:order_id
        ";
        $sqlOderDetail = str_replace(':order_id', (int)$orderId, $sqlOderDetail);

        return $this->customQuery($sqlOderDetail);
    }
}
