<div class="container">

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center"><?=$title?></h1>
      <form action="/shop/auth/<?=$post?>" method="POST">
        <div class="form-group">
          Nombre <input type="text" required name="nombre" class="form-control ">
        </div>
        <div class="form-group">
          Apellido <input type="text" required name="apellido" class="form-control">
        </div>
        <div class="form-group">
          Email <input type="text" required name="email" class="form-control">
        </div>
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-success btn-block">Registrar Usuario</button>
          </div>
          <div class="col-md-6">
            <a class="btn btn-default btn-block" href="/shop/product">Volver</a>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
