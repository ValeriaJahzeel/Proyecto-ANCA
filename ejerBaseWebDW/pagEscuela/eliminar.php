<?php
include "conectar.php";
 $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
        $resConectar = conecta();
        
 if (isset($_POST['modi'])) {
      $q = "DELETE * FROM clientes WHERE apellidoP='$apellidoP' apellidoM='$apelldiom' correo='$correo'";

        $ejecutarInsertar = mysqli_query($q,$resConectar);
        }
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
    }
    ?>