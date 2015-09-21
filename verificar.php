<?php
session_start();
include("conexion.php");
if(isset($_POST['correo'])&&!empty ($_POST['correo'])&& isset($_POST['contraseña'])&& !empty ($_POST['contraseña']))  
	{
	 $consulta="SELECT CORREO,CONTRASENA,CONTRASENA_CONF,APELLIDOS,DNI,RAZON,RUC FROM clientes WHERE CORREO='$_POST[correo]'";
	 $con=$conexion->query($consulta);
	 $sesion=$con->fetch_assoc();


			if($_POST['contraseña']==$sesion['CONTRASENA'])
			{
    					$_SESSION['name']=$_POST['correo'];
						$_SESSION['autentico']=true;
						$_SESSION['user']=$sesion['APELLIDOS'];
      					header('location:protegido.php');
			}
			else{
     			include("pagina2.php");
     		}


	}
	else
	{
		include("pagina2.php");
	}

?>