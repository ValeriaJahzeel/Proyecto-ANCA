<?php
function conecta(){
    //conexion a la base de datos
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="bd_anca";
    $errorServ="No se puede conectar con el servidor";
    $errorBD="No se puede seleccionar la base de datos";
    //conexion al servidor local
    $enlace = mysqli_connect($servidor, $usuario, $clave) or die ($errorServ);
    //seleccionar la base de datos
    mysql_select_db($baseDeDatos) or die ($errorBD);
    //retorno de la conexion
    return ($enlace);
}
?>