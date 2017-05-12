<h1>Listado de Ordenes</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Estado</th>
        <th>Fecha de pedido</th>
        <th></th>
    </tr>
<?php foreach($orders as $order):?>
    <tr>
        <td><?=$order['id']?></td>
        <td><?=$order['status']?></td>
        <td><?=$order['created_at']?></td>
        <td><a href="#" lass="btn btn-default">ver detalle</a></td>
    </tr>
<?php endforeach?>
</table>
