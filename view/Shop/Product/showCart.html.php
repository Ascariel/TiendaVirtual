<h1>Carro de compras</h1>
<?php if(empty($cart)):?>
    <h3>No hay productos en el carro</h3>
    <a  href="/shop/product" class="btn btn-default">Comprar en la tienda</a>
<?php else: ?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio Unitario</th>
        <th>Precio</th>
        <th>Cantidad</th>
    </tr>
<?php foreach($cart as $product):?>
    <tr>
        <td><?=$product['id']?></td>
        <td><img width="64px" src="<?=$product['image']?>" /></td>
        <td><?=$product['name']?></td>
        <td><?=$product['price']?></td>
        <td><?=$product['price'] * $product['quantity']?></td>
        <td>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="number" class="form-control" value="<?=$product['quantity']?>" min="1" max="10" />
                    <a class="input-group-addon btn btn-default update-cart" rel="<?=$product['id']?>"><i class="fa fa-refresh"></i></a>
                </div>
            </div>
        </td>
    </tr>
    <?php $suma+=$product['price'] * $product['quantity'];?>
<?php endforeach?>
    <tfoot>
        <tr>
            <td colspan="4">Sub Total</td>
            <td><?=$suma?></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">IVA</td>
            <td><?=$suma * 0.19?></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">Total</td>
            <td><?=$suma * 1.19?></td>
            <td></td>
        </tr>
    </tfoot>
</table>
<div class="row">
  <div class=""></div>
  <div class="col-xs-offset-8 col-sm-offset-8 col-md-offset-8 col-lg-offset-8 col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <a href="/shop/buy" class="btn btn-success">Pagar</a>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <a href="/shop/product" class="btn btn-default">Comprar algo más</a>
  </div>
</div>
<?php endif; ?>
