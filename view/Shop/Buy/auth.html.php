<h1>Ingrese con su usuario o cree una nueva cuenta</h1>
<form action ="/shop/buy/account" method="POST">
    <div class="radio">
      <label>
        <input class="" rel="" type="radio" name="user[method]" value="1" checked>
        Cuenta Existente
      </label>
    </div>
    <div class="radio">
      <label>
        <input class="" rel="" type="radio" name="user[method]" value="2">
        Crear una cuenta nueva.
      </label>
    </div>
    <input type="email" placeholder="ingrese su correo electronico" />
    <input type="password" placeholder="ingrese su contraseña" />
</form>
