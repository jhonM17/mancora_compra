<?php
include("conexion.php");



 	if( isset($_POST['correo'])&&    !empty ($_POST['correo'])&&
   		isset($_POST['contraseña'])&&  !empty ($_POST['contraseña'])&&
   		isset($_POST['contraseña_conf'])&&        !empty ($_POST['contraseña_conf'])&&
   		isset($_POST['apellidos'])&&      !empty ($_POST['apellidos'])&&
   		isset($_POST['dni'])&&         !empty ($_POST['dni']) &&
   		isset($_POST['razon'])&&         !empty ($_POST['razon'])&&
   		isset($_POST['ruc'])&&         !empty ($_POST['ruc'])) 

	{

		$consulta="INSERT INTO clientes(CORREO,CONTRASENA,CONTRASENA_CONF,APELLIDOS,DNI,RAZON,RUC) VALUES 
  										    ('$_POST[correo]','$_POST[contraseña]','$_POST[contraseña_conf]',
  										    '$_POST[apellidos]','$_POST[dni]','$_POST[razon]','$_POST[ruc]'
  										    )";
		$con=$conexion->query($consulta);
	
		include("pagina.php");

	}

	else
	{
		include("pagina2.php");
			
	}



?>