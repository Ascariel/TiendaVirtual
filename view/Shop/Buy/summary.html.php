<h1>Detalle de la Compra</h1>

Total a pagar: $<?=$total?><br/>
Modo de pago: <?=$type?><br/>
Modo de entrega: <?=$delivery?><br/>
<?php if($address):?>
    Dirección de entrega: <?=$address?><br/>
<?php endif ?>
<form class="from" action="/shop/buy/confirm" method="POST">
    <button type="submit" class="btn btn-success">Confirmar</button>
</form>
