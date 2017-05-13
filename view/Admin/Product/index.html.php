
 <div class="row">
  
  <div class="col-md-8 col-md-offset-2">

    <h1 class=""><?php echo $title ?> -> Productos</h1><br>
    <a href="/admin/product/new" class="btn btn-sm btn-info">Crear Nueva Producto</a>
    
    <table id="categories_table" class="table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID</th>
          <th>Nombre</th>   
          <th>Descripcion</th>
          <!-- <th>Productos</th> -->
          <th>Editar </th>
          <th>Borrar </th>      
        </tr>
      </thead>

      
      <tbody>
        <?php foreach($products as $row): ?>   
          <?php $product_id = $row['id'] ?>  

          <tr>
            <td><?= $product_id?></td>
            <td><?=$row['name']?></td>
            <td>Pendiente</td>
            <!-- Botones CRUD :) -->
      <!--       <td><a href="/admin/product?id=<?= $product_id ?>" class="btn btn-block btn-sm btn-success">Ver Detalle</a></td> -->
            <td><a href="/admin/product/edit?id=<?= $product_id ?>" class="btn btn-block btn-sm btn-warning">Editar</a></td>
            <td><a href="/admin/product/delete?id=<?= $product_id ?>" class="btn btn-block btn-sm btn-danger">Borrar  </a></td> 
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
