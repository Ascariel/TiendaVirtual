 <div class="row">
 	
 	<div class="col-md-10 col-md-offset-1">

		<h1 class="">Catalogo de Productos</h1>
		<small><i>*Falta que se muestren productos solo de una categoria cuando este parametro se pase por URL (ej: productos de la categoria id=10)</i></small>
		<hr>
	 	
	 	<table id="categories_table" class="table table-hover table-striped table-condensed ">
	 		<thead >
	 			<tr >
			 		<th>PID</th>
			 		<th>Nombre Producto</th>	 	
			 		<th>Descripcion</th>
			 		<th>ID Categoria</th>
			 		<th>Ver Producto</th>
			 		<th>Agregar Producto</th>
	 			</tr>
	 		</thead>

	 		<tbody>
				<?php foreach($products as $product): ?>	 
					<?php $product_id = $product['id'] ?>	

				  <tr>
			      <td><?= $product_id?></td>
			      <td><?=$product['name']?></td>
			      <td>Pendiente</td>
			      <td>CID: <?= $product['category_id'] ?> <small><i>(*reemplazar con nombre categoria)</i></small></td>	
			      		      
				 		<!-- Botones Acciones :) -->
				 		<td><a href="/shop/product/show?id=<?=$product['id']?>" class="btn btn-block btn-sm btn-info">Ver Producto</a>
				 		<td><a href="javascript:void(0);" class="add-to-cart btn btn-block btn-sm btn-success" rel="<?=$product['id']?>">Agregar al Carro</a></td>
				  </tr>
			  <?php endforeach ?> 
	 		</tbody>
	 		
	  </table>
 		
 	</div>
 </div>

<script type="text/javascript">
	$("#categories_table").DataTable({
		"dom": "f"
	})
</script>

