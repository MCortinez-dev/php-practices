<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    require("conexion.php");
    $consulta = "SELECT * FROM imagen";

    $resultado = mysqli_query($conn, $consulta);

    while($fila = mysqli_fetch_array($resultado)) {
        $nombre_imagen = $fila["TIPO"];

        ?>

        <div>
            <img src="/php-practices/imagenservidor/img/<?php echo $nombre_imagen?>" alt="imagen" width="30%">
        </div>

        <?php
    }

    ?>

</body>
</html>