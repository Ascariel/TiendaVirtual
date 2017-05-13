<h1>Listado de Ordenes</h1>
<table class="table">
    <tr>
        <th>Numero de Orden</th>
        <th>Estado</th>
        <th>Fecha de pedido</th>
        <th></th>
    </tr>
<?php foreach($orders as $order):?>
    <tr>
        <td><?=$order['id']?></td>
        <td><?=$status[$order['status']]?></td>
        <td><?=$order['created_at']?></td>
        <td><a href="/shop/order/details?id=<?=$order['id']?>" class="btn btn-success">ver detalle</a></td>
    </tr>
<?php endforeach?>
</table>
