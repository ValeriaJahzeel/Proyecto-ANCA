 <?php
include "conectar.php";
 $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
        $resConectar = conecta();
 if (isset($_POST['modi'])) {
       
        $insertarDatos = "INSERT INTO clientes (ApellidoP, ApellidoM, Nombre, Tel, Correo) VALUES(
                                                    '$apellidop', 
                                                    '$apellidom',
                                                    '$nombre',
                                                    '$telefono',
                                                    '$correo')";

        $ejecutarInsertar = mysqli_query($insertarDatos,$resConectar);
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