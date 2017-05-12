<h1>Ingrese con su usuario o cree una nueva cuenta</h1>
<?php if(!empty($_SESSION['message'])):?>
    <p class="alert alert-danger"><?=$_SESSION['message']?></p>
    <?php unset($_SESSION['message'])?>
<?php endif ?>
<form action ="/shop/buy/verify" method="POST">
    <div class="row">
        <div class="col-md-3">
            <input type="email" class="form-control" name="auth[email]" placeholder="ingrese su correo electronico" />
        </div>
        <div class="col-md-3">
            <input type="password" class="form-control" name="auth[password]" placeholder="ingrese su contraseña" />
        </div>
    </div>
    <div class="row">
        <div class="radio">
          <label>
            <input class="radio" type="radio" name="auth[method]" value="1" checked>
            Cuenta Existente
          </label>
        </div>
        <div class="radio">
          <label>
            <input class="radio" type="radio" name="auth[method]" value="2">
            Crear una cuenta nueva.
          </label>
        </div>
    </div>
    <button type="submit">Continuar</button>
</form>
