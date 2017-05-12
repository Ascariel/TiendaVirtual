<h1>Ingrese con su usuario o cree una nueva cuenta</h1>
<form action ="/shop/buy/verify" method="POST">
    <div class="row">
        <div class="col-md-3">
            <input type="email" class="form-control" placeholder="ingrese su correo electronico" />
        </div>
        <div class="col-md-3">
            <input type="password" class="form-control" placeholder="ingrese su contraseña" />
        </div>
    </div>
    <div class="row">
        <div class="radio">
          <label>
            <input class="radio" type="radio" name="user[method]" value="1" checked>
            Cuenta Existente
          </label>
        </div>
        <div class="radio">
          <label>
            <input class="radio" type="radio" name="user[method]" value="2">
            Crear una cuenta nueva.
          </label>
        </div>
    </div>
    <button type="submit">Continuar</button>
</form>
