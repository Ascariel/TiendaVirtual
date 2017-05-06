<!DOCTYPE html>
<html>
<head>
  <title>Registo Usuarios</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>


  
  <br><br>
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Registrar Usuarios</h1>
        <br>  
              
        <form action="/registrar_usuario.php" method="POST">
          <div class="form-group">
            Nombre <input type="text" name="" class="form-control ">
          </div>
          <div class="form-group">
            Apellido <input type="text" name="" class="form-control">
          </div>
          <div class="form-group">
            Email <input type="text" name="" class="form-control">
          </div>
          <div class="form-group">
            <select class="form-control">
              <option class="form-control" value="admin">Admin</option>
              <option class="form-control" value="cliente">Cliente</option>
            </select>
          </div>
                              
          
          <br>
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-success btn-block">Registrar Usuario</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block">Volver</button>
            </div>
          </div>
          
      
        </form>
      </div>
    </div>

  </div>


</body>
</html>