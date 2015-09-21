<?php



function conectarse()

{


$host="localhost";
$user="root";
$pw="";
$db="mancora_compra";


$conectar=new mysqli($host,$user,$pw,$db)or die("no se puede conectarse");

return $conectar;

}

$conexion=conectarse();

?>