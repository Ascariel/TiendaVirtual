<p>Bienvenido a la tienda donde comprar es fácil</p>
<?php foreach($products as $product):?>
    <div class="product">
        <img width="64px" src="<?=$product['image']?>" />
        <strong><?=$product['name']?></strong>
        <p><?=$product['descripcion']?></p>
        <a href="/shop/product/show?id=<?=$product['id']?>">Ver Producto</a>
        <a href="javascript:void(0);" class="add-to-cart" rel="<?=$product['id']?>">Agregar al Carro</a>
    </div>
<?php endforeach?>
