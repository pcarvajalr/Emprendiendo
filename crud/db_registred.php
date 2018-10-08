<?php

$btn_actn=$_REQUEST['Registered'];

$email = $_REQUEST['txtEmail'];
$name = $_REQUEST['txtName'];
$last_name = $_RESQUEST['txtLast'];
$country = $_RESQUEST['txtCountry'];
$state =$_RESQUEST['txtState'];
$lang = $_RESQUEST['txtLang'];


if(isset($_RESQUEST['btn_actn']) && $country!="Select Country"){
include("/db/open_db.php");
$res= mysqli_query($conxn,"SELECT * FROM $tabla1");
mysqli_query($res,"INSERT INTO $tabla1 (email,name,last_name,country,state,lang)
VALUES ('$email','$name','$last_name','$country','$state','$lang')");

	echo "<div style=\"color:red\"><strong>Datos enviados!</strong></div>";
}
else{
	echo "<div style=\"color:red\"><strong>Selecciona un pais!</strong></div>";
}

include("/db/close_db.php");
?>