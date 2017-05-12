<h1>Detalle de la Compra</h1>

Total a pagar: $<?=$total?><br/>
Modo de pago: <?=$type?> <?=$_SESSION['payment']['vcard']?><br/>
Modo de entrega: <?=$delivery?><br/>
<?php if($address):?>
    Dirección de entrega: <?=$address?><br/>
<?php endif ?>
<form class="from" action="/shop/buy/confirm" method="POST">
    <button type="submit" class="btn btn-success">Confirmar</button>

</form>
<a href="/shop/buy" class="btn btn-default">Volver</a>
