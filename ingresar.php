<?php include 'base.php' ?>


<?php startblock('titulo') ?>
Ingresar
<?php endblock() ?>



<?php startblock('cuerpo') ?>

<div class="container" style="margin-top:2em">	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 box">
			<div class="text-center">
				<h3>Ingresar</h3>
			</div>

			<p> Ingresar con:</p>
			<div style="margin-bottom:1em">
				<a href="#" class="btn btn-primary btn-block">Facebook</a>
			</div>
			<div style="margin-bottom:1em">
				<a href="#" class="btn btn-info btn-block">Twitter</a>
			</div>
			<hr style="border-color:#ccc">
			<p>Ingresar con tu cuenta:</p>
			<form action="verificar.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="correo">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contraseña">
			    <p style="margin-top:.5em">
			    	¿Olvidaste Tu Contraseña? <a href="recuperar_clave.php">Haz click Aquí!</a>
			    </p>
			  </div>
			  
			  <div class="form-group text-center">
			  	<button type="submit" class="btn btn-warning">Ingresar</button>
			  </div>
			</form>
			<div class="text-center">
				Si aún no estás Registrado, que esperas! <a href="registrate.php">Registrate</a>
			</div>
		</div>
	</div>
</div>


<?php endblock() ?>








