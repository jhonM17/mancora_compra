<?php

session_start();
if(!$_SESSION['autentico']){

header('location:salir.php');


}

?>