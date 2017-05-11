<h1>Carro de compras</h1>
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
            <div class="col-md-3">
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
            <td><button class="btn btn-success">Comprar</button></td>
        </tr>
    </tfoot>
</table>
