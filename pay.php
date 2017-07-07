<?php

$success = $_GET['success'];

if($success){
	print "<script> alert('Pago Registrado con Exito!!'); location.href='index.php';  </script>";
}else{
	print "<script> alert('Error al Realizar el Pago!!'); location.href='index.php';  </script>";
}