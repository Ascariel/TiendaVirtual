<h1>Vista product new</h1>


<div class="container">

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center"><?=$title?></h1>
      <br>
      <form action="/admin/category/create" method="POST">
        <div class="form-group">
          Nombre Producto <input type="text" required name="name" class="form-control ">
        </div>
        <div class="form-group">
          Descripcion Producto <input type="text" required name="name" class="form-control ">
        </div>
        <div class="form-group">
          Valor Producto <input type="text" required name="name" class="form-control ">
        </div>        

        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-success btn-block">Registrar Producto</button>
          </div>
          <div class="col-md-6">
            <a class="btn btn-default btn-block" href="/admin/product/index">Volver</a>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
