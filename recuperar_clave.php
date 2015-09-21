<?php include 'base.php' ?>


<?php startblock('titulo') ?>
Recuperar Contraseña
<?php endblock() ?>


<?php startblock('cuerpo') ?>

<div class="container" style="margin-top:2em">	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 box">
			<div class="text-center">
				<h3>Recuperar Contraseña</h3>
			</div>
			
			<p class="text-center">Para Recuperar tu contraseña escribe los datos que se te piden a continuación...</p>
			
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu Correo">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirmar Correo</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirma tu Correo">
			    
			  </div>
			  
			  <div class="form-group text-center">
			  	<button type="submit" class="btn btn-warning">Recuperar</button>
			  </div>
			</form>
			
		</div>
	</div>
</div>


<?php endblock() ?>







