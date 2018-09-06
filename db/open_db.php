<?php
$host="localhost";
$usuariobd="root";
$passwordbd="";
$basededatos="learn_teaching";
//lista de tablas
$tabla1="re_user";
$tabla2="pro_user";
/////
//No muestre el error
error_reporting(0);
$conxn = new mysqli($host, $usuariobd, $passwordbd, $basededatos);
if ($conexion->connect_errno) {
	# code...E
	echo "<div class=\"alert alert-warning\"><strong>Error!</strong> El sitio presenta fallos con la BD.</div>";
	exit();
}
?>