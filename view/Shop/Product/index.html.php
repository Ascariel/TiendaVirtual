<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h1 class="">Catalogo de Productos</h1>
        <hr>
        <?php foreach($products as $product): ?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="<?=$product['image']?>" with="320" height="150" alt="<?=$product['name']?>">
                <div class="caption">
                    <h4 class="pull-right"><?=$product['price']?></h4>
                    <h4><a href="/shop/product/show?id=<?=$product['id']?>"><?=$product['name']?></a>
                    </h4>
                    <p><?=$product['description']?></p>
                </div>              
                <a href="javascript:void(0);" class="add-to-cart btn btn-block btn-sm btn-success" rel="<?=$product['id']?>">AGREGAR</a>
                <a href="/shop/product/show?id=<?=$product['id']?>" class="btn btn-block btn-sm btn-info">VER DETALLE</a>
            </div>
        </div>
        <?php endforeach ?>        
    </div>
 </div>