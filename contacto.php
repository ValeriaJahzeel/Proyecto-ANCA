<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="bd_anca";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){
    echo"Error en la conexion con el servidor";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/main_contacto.css"> 
   <title>Contacto</title>
</head>

<body>
    <!--
    <header class="site-header inicio ">
        <div class="contenedor2 contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="img/logo.png" alt="Logotipo de ANCA" width="200px" height="180px">
                </a>
    
                <nav id="navegacion" class="navegacion">
                    <a href="index.html"><b>Inicio</b></a>
                    <a href="nosotros.html"><b>Nosotros</b></a>
                    <a href="productos.html"><b>Productos</b></a>
                    <a href="contacto.html"><b>Contacto</b></a>
                    <a href="info.html"><b>Informacion adicional</b></a>
                </nav> 
            </div>
            <h1>PRODUCTOS</h1>
        </div> Contenedor
    </header>
-->
    <div class="container">
        <div class="form_top">
            <h2>Formulario <span>Contacto</span></h2>
        </div>

        <form class="form_reg" action="">
            <input type="text" name="nombre" class="input" placeholder="Nombre"
            required autofocus>
            <input type="text" name="apellidop" class="input" placeholder="Apellido Paterno"
            required>
            <input type="text" name="apellidom" class="input" placeholder="Apellido Materno"
            required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="text" name="telefono" class="input" placeholder="Telefono" 
            required>
            <textarea class="input" cols="30" rows="10" placeholder="Escriba aqui su mensaje"></textarea>

            <div class="btn_form">
                <input type="submit" name="enviar" class="btn_submit">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST["nombre"];
        $apellidop = $_POST["apellidop"];
        $apellidom = $_POST["apellidom"];
        $correo = $_POST["email"];
        $telefono = $_POST["telefono"];
        /*Id*/

        $insertarDatos = "INSERT INTO clientes VALUES(
                                                    '$apellidop', 
                                                    '$apellidom',
                                                    '$nombre',
                                                    '$telefono',
                                                    '$correo')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>