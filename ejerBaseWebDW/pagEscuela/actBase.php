<?php
include "conectar.php";
 $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
	$nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
	$vNomArea = $_POST['nombreArea'];
	$vBoton = $_POST['enviar'];
	$resConectar = conecta();
	$sqlTipo="SELECT idTipo_herramienta FROM AREA
		WHERE tipo=´$vNomArea´;";
	$sqlCveTipo = mysql_query($sqlTipo,$resConectar);
	$resulCveTipo = mysql_fetch_array($sqlCveTipo);
	$vCveTipo = $resulCveTipo["idTipo_herramienta"];

    if (isset($_POST['enviar'])) {
       
        $insertarDatos = "INSERT INTO clientes (ApellidoP, ApellidoM, Nombre, Tel, Correo) VALUES(
                                                    '$apellidop', 
                                                    '$apellidom',
                                                    '$nombre',
                                                    '$telefono',
                                                    '$correo')";

        $ejecutarInsertar = mysqli_query($insertarDatos,$resConectar);

        if(!$ejecutarInsertar){
            echo "<SCRIPT LANGUAJE='Javascript' TYPE='txt/Javascript'>
            alert("Ocurrio un error...")
            Javascript:history.back(1)
            </SCRIPT>";
        } else{
             echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert("Mensaje enviado")
                window.location='../index.html'
                </SCRIPT>";
        }
    } else{
        $modi="UPDATE clientes SET tipoH = ´$vNomArea´ WHERE cveA = ´$vNomArea´;";
                    $modificar=mysql_query($modi,$resConectar);
                    if(!$modificar){
                    echo "<SCRIPT LANGUAJE = 'Javascript' TYPE='text/Javascript'>
                    alert("Ocurrio un error...No se guardo el registro")
                    Javascript:history.back(1)
                    </SCRIPT>";
                    }
        else{
            echo "<SCRIPT LANGUAJE='Javascript' TYPE='text/Javascript'>
            alert("Registro modificado")
            window.location='contacto.php'
            </SCRIPT>";
        }
    }
?>
