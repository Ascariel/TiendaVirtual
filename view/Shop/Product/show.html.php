<div class="well">
    <h3 class="text-center">Detalle Producto</h3>
        <div class="thumbnail">
            <div class="caption">
                <img src="<?=$product['image']?>" width="320" height="150" alt="<?=$product['name']?>">  
            </div>
            <h3 class="tittles-pages text-center">Informacion</h3>
            <strong><?=$product['name']?></strong>
            <p><?=$product['descripcion']?></p>
            <a  href="/shop/product" class="btn btn-outline btn-default">Volver</a>
            <a href="javascript:void(0);" class="add-to-cart btn btn-success" rel="<?=$product['id']?>">AGREGAR</a>
            
        </div>
</div>
<div class="product">
    <img width="64px" src="<?=$product['image']?>" />
    <strong><?=$product['name']?></strong>
    <p><?=$product['descripcion']?></p>
    <a href="javascript:void(0);" class="add-to-cart" rel="<?=$product['id']?>">Agregar al Carro</a>
</div>
