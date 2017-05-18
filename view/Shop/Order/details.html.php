<h1>Detalle de orden N° <?=$order?></h1>
<table class="table">
    <tr>
        <th>Producto</th>
        <th>Cantiad</th>
        <th>Precio Unitario</th>
        <th>Total</th>
    </tr>
<?php foreach($details as $detail):?>
    <tr>
        <td><?=$detail['name']?></td>
        <td><?=$detail['quantity']?></td>
        <td>$<?=number_format($detail['price'],0,',','.')?></td>
        <td>$<?=number_format($detail['price'] * $detail['quantity'],0,',','.')?></td>
    </tr>
    <?php $suma+=$detail['price'] * $detail['quantity'];?>
<?php endforeach?>
    <tfoot>
        <tr>
            <th colspan="4">Totales</th>
        </tr>
        <tr>
            <td colspan="3">Sub Total</td>
            <td>$<?=number_format($suma,0,',','.')?></td>
        </tr>
        <tr>
            <td colspan="3">IVA</td>
            <td>$<?=number_format($suma * 0.19,0,',','.')?></td>
        </tr>
        <tr>
            <td colspan="3">Total</td>
            <td>$<?=number_format($suma * 1.19,0,',','.')?></td>
        </tr>
    </tfoot>
</table>
<a href="/shop/order" class="btn btn-default">Volver</a>
