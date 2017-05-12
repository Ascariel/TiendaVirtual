 <div class="row">
 	<div class="col-md-10 col-md-offset-1">
		<h1 class="">Catalogo de Productos</h1>
		<hr>
	 	<table id="products-table" class="table table-hover table-striped table-condensed ">
	 		<thead >
	 			<tr >
			 		<th>Codigo</th>
			 		<th>Nombre Producto</th>
			 		<th>Descripcion</th>
                    <th>Precio</th>
			 		<th>Categoria</th>
                    <th>Imagen</th>
			 		<th colspan="2"></th>
	 			</tr>
	 		</thead>
	 		<tbody>
				<?php foreach($products as $product): ?>
				<tr>
			      <td><?=$product['id']?></td>
			      <td><?=$product['name']?></td>
			      <td><?=$product['description']?></td>
                  <td><?=$product['price']?></td>
			      <td><?=$product['category'] ?></td>
                  <td><img width="64px" src="<?=$product['image']?>" /></td>
		 		  <td><a href="/shop/product/show?id=<?=$product['id']?>" class="btn btn-block btn-sm btn-info">Ver Producto</a>
		 		  <td><a href="javascript:void(0);" class="add-to-cart btn btn-block btn-sm btn-success" rel="<?=$product['id']?>">Agregar al Carro</a></td>
				</tr>
			  <?php endforeach ?>
	 		</tbody>
	  </table>
 	</div>
 </div>

<script type="text/javascript">
	$("#products-table").DataTable({
		"dom": "f"
	})
</script>
