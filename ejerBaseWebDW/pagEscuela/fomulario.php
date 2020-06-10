
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../estilos/styles.css"> 
   <title>Contacto</title>
</head>

<body>
    
    <header class="site-header inicio ">
        <div class="contenedor2 contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="../imgEscuela/logo.jpg" alt="Logotipo de ANCA" width="200px" height="180px">
                </a>
    
                <nav id="navegacion" class="navegacion">
                    <a href="index.html"><b>Inicio</b></a>
                    <a href="nosotros.html"><b>Nosotros</b></a>
                    <a href="productos.html"><b>Productos</b></a>
                    <a href="fomulario.php"><b>Contacto</b></a>
                    <a href="info.html"><b>Informacion adicional</b></a>
                </nav> 
            </div>
            <h1>PRODUCTOS</h1>
        </div> 
    </header>

    <div class="container">
        <div class="form_top">
            <h2>Formulario <span>Contacto</span></h2>
        </div>
        
<!-- INSERTAR DATOS -->
        <form class="form_reg" action="insertar.php" method="post">
            <input type="text" name="nombre" class="input" placeholder="Nombre"
            required autofocus>
            <input type="text" name="apellidop" class="input" placeholder="Apellido Paterno"
            required>
            <input type="text" name="apellidom" class="input" placeholder="Apellido Materno"
            required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="text" name="telefono" class="input" placeholder="Telefono" 
            required>
            <label for="area">Area:</label>
            <select name="nombreArea" id="nombreArea">
            <?php
                include "conectar.php";
                $resConectar=conecta();
                $sqlTipo="SELECT*FROM tipo_material";
                $tablaTipo=mysql_query($sqlTipo);
                $numfilasTipo=mysql_num_rows($tablaTipo);
                for($i=0;$i<$numfilasTipo;$i++){
                    $filaTipo=mysql_fetch_array($tablaTipo);
                    echo´<OPTION´.$filaTipo[´Tipo´].´</OPTION>´;
                }
                ?>
            <textarea class="input" cols="30" rows="10" placeholder="Escriba aqui su mensaje"></text
            <div class="btn_form">
                <input type="submit" name="enviar" class="btn_submit" value="Enviar">
            </div>
        </form>
            
 <!-- ACTUALIZAR DATOS -->      
            <form class="form_reg" action="actBase.php" method="post">
            <input type="text" name="nombre" class="input" placeholder="Nombre"
            required autofocus>
            <input type="text" name="apellidop" class="input" placeholder="Apellido Paterno"
            required>
            <input type="text" name="apellidom" class="input" placeholder="Apellido Materno"
            required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="text" name="telefono" class="input" placeholder="Telefono" 
            required>
            <label for="area">Area:</label>
            <select name="nombreArea" id="nombreArea">
<?php
                include "conectar.php";
                $resConectar=conecta();
                $sqlTipo="SELECT*FROM tipo_material";
                $tablaTipo=mysql_query($sqlTipo);
                $numfilasTipo=mysql_num_rows($tablaTipo);
                for($i=0;$i<$numfilasTipo;$i++){
                    $filaTipo=mysql_fetch_array($tablaTipo);
                    echo´<OPTION´.$filaTipo[´Tipo´].´</OPTION>´;
                }
                ?>
            <textarea class="input" cols="30" rows="10" placeholder="Escriba aqui su mensaje"></text
            <div class="btn_form">
                  <input type="submit" name="modi" class="btn_submit" value="Modificar">
            </div>
        </form>

<!-- ELIMINAR DATOS -->
                <form class="form_reg" action="eliminar.php" method="post">
            <input type="text" name="nombre" class="input" placeholder="Nombre"
            required autofocus>
            <input type="text" name="apellidop" class="input" placeholder="Apellido Paterno"
            required>
            <input type="text" name="apellidom" class="input" placeholder="Apellido Materno"
            required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="text" name="telefono" class="input" placeholder="Telefono" 
            required>
            <label for="area">Area:</label>
            <select name="nombreArea" id="nombreArea">
            <?php
                include "conectar.php";
                $resConectar=conecta();
                $sqlTipo="SELECT*FROM tipo_material";
                $tablaTipo=mysql_query($sqlTipo);
                $numfilasTipo=mysql_num_rows($tablaTipo);
                for($i=0;$i<$numfilasTipo;$i++){
                    $filaTipo=mysql_fetch_array($tablaTipo);
                    echo´<OPTION´.$filaTipo[´Tipo´].´</OPTION>´;
                }
                ?>
            <textarea class="input" cols="30" rows="10" placeholder="Escriba aqui su mensaje"></text
            <div class="btn_form">
            <input type="submit" name="borrar" class="btn_submit" value="Eliminar">
                </div>
        </form>        
                 
</body>
</html>

    
                   
                 