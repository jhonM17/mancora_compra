<?php require_once 'ti.php' ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php startblock('titulo') ?>
		<?php endblock() ?>
	</title>
	<link rel="stylesheet" type="text/css" href="estaticos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estaticos/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container">
    <!--Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="protegido.php">Máncora Compra</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Mis Compras</a></li>
        <li><a href="#">Mis Pedidos</a></li>
        <li><a href="#">Timeline</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        

        <li class="dropdown">
          <a href="protegido.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user'];?> </a>
          <ul class="dropdown-menu">
            <li><a href="#">Mi Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="salir.php">Salir</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<?php startblock('cuerpo') ?>

<?php endblock() ?>



<footer class="container-fluid" style="margin-top:2em; background-color:#eee; border-top: 1px solid #ccc; padding:1em 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="text-center"><b>Acerca de Máncora Compra</b></h4>
				<p class="text-justify">
					Máncora Compra es una plataforma donde los usuarios ofrecen sus productos para vender, ya sean nuevos o usados pero en buenas condiciones.
				</p>
			</div>

			<div class="col-md-4">
				<h4 class="text-center"><b>Métodos de Pago</b></h4>
				<p class="text-justify">
					<ul>
						<li>
							Condiciones y Terminos de Pago.
						</li>
						<li>
							Medios Facilitadores de Pago.
						</li>
						<li>
							Facilidades de Pago.
						</li>
					</ul>
				</p>
			</div>

			<div class="col-md-4">
				<h4 class="text-center"><b>Contáctanos</b></h4>
				<p class="text-center">Para informarte más sobre nuestra plataforma...</p>
				<p class="text-justify">
					<span class="glyphicon glyphicon-earphone"></span> Llámanos al Celular: 985462536<br>
					<span class="glyphicon glyphicon-pushpin"></span> Ubícanos en: Av. Grau #545 - Máncora - Talara - Piura - Perú
				</p>
			</div>
		</div>
	</div>

	<div class="container" style="border-top: 1px solid #ccc; padding-top:1em; margin-top:1em">
		<div class="row">
			<div class="col-md-12">
				Desarrollador por ...
			</div>
		</div>
	</div>
	
</footer>

	
	


	<script type="text/javascript" src="estaticos/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="estaticos/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="estaticos/js/parallax.min.js"></script>
</body>
</html>