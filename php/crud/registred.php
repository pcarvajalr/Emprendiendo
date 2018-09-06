<?php
$email = $_REQUEST['txtEmail'];
$name = $_REQUEST['txtName'];
$last_name = $_RESQUEST['txtLast'];
$country = $_RESQUEST['txtCountry'];
$state =$_RESQUEST['txtState'];
$lang = $_RESQUEST['txtLang'];

include("/db/open_db.php");
$res= mysqli_query($conxn,"SELECT * FROM $tabla1");
mysqli_query($res,"INSERT INTO $tabla1 (email,name,last_name,country,state,lang)
VALUES ('$email','$name','$last_name','$country','$state','$lang')");
include("/db/close_db.php");
?>