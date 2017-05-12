<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.15/datatables.min.css"/>

	    <!-- TEMPORAL, LLEVAR AL FINAL DEL ARCHIVO -->
	    <script src="/js/jquery-3.2.1.min.js"></script>
	    <script type="text/javascript" src="/js/datatables.min.js"></script>
    </head>
    <body>

			<nav class="navbar navbar-default navbar-static-top">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <a class="navbar-brand pull-right	" href="/">LaTienda</a>
			      <a href="/">
			      	<img style="height:50px" src="/images/logo3.png">
			      </a>
			    </div>



			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			      <li><a href="/shop/product">Productos</a></li>
			        <li><a href="/admin/category">Categorias</a></li>
			        <li><a href="/admin/category/new">Crear Categoria</a></li>
                    <li><a href="/shop/product/showCart">Ver Carro</a></li>

			        <?php if(!empty($_SESSION['user'])): ?>
			        	<li><a href="javascript:void(0);">Bienvenido <?=$_SESSION['user']["email"]?></a></li>
			        	<li><a href="/shop/auth/logout">Cerrar Sesion</a></li>
			        <?php else: ?>
				        <li><a href="/shop/auth/signup">Registrarse</a></li>
				        <li><a href="/shop/auth/signin">Login</a></li>
				    <?php endif; ?>
			      </ul>
			    </div><!-- /.navbar-collapse -->

			  </div>
			</nav>

				<div class="container">
					<div class="row">
						<?php @include($this->view) ?>
					</div>
				</div>

        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/cart.js"></script>
        <script src="/js/buy.js"></script>

    </body>
</html>
