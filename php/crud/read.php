<?php
$actn =$_REQUEST['actn'];

include("/db/");

switch ($accion){
    case 'login':
        $nombre_img = $_FILES['imagen']['name'];
         $directorio = $_SERVER['DOCUMENT_ROOT'].'/VideoManto/foto/';
        move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
        
        $nom=$_REQUEST['txtNom'];
        $edad=$_REQUEST['txtEdad'];
        $sexo=$_REQUEST['txtSexo'];
        $sueldo=$_REQUEST['txtSueldo'];
        $pas=$_REQUEST['txtPas'];
        $res = $cnx->query("insert into empleados values(null,'$nom',$edad,'$sexo',$sueldo,'$pas','$nombre_img')");
        break;
    case 'eliminar':
        $cod=$_REQUEST['cod'];
        $res = $cnx->query("delete from empleados where codigo=$cod");
        break;
}

?>