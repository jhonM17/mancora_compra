<?php include 'base.php' ?>


<?php startblock('titulo') ?>
Registrate
<?php endblock() ?>


<?php startblock('cuerpo') ?>

<div class="container" style="margin-top:2em">	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 box">
			<div class="text-center">
				<h3>Registrate</h3>
			</div>
			<div class="text-center" style="margin-bottom:1em">
				Por Favor llena los campos que tengan el símbolo asterísco (<span style="color: #f1c40f;">*</span>), son <b>Obligatorios</b>.
			</div>
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo <span style="color: #f1c40f;">*</span></label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirmar Contraseña <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe Nuevamente la Contraseña">
			    
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nombres y Apellidos - Representante <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nombres y Apellidos del Representante de la Cuenta">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">DNI <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Número de DNI">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Dirección <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe tu dirección correcta">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Lugar <span style="color: #f1c40f;">*</span></label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lugar en donde vives.">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Razón Social</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Razón Social">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">RUC</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Número de RUC">
			    
			  </div>

			  <div class="form-group text-center">
			  	<button type="submit" class="btn btn-warning">Registrar</button>
			  </div>
			</form>
			
		</div>
	</div>
</div>





<?php endblock() ?>




