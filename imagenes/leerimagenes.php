<?php
    $id="";
    $contenido="";
    $tipo="";

    require("conexion.php");
    $conexion=mysqli_connect($host, $user, $pass);
    if(mysqli_connect_errno()){
        echo "hay un error en conexion";
        exit();
    }

    mysqli_select_db($conexion, $db) or die ("no encontro la base");

    $consulta= "SELECT * FROM imagen";

    $resultado=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultado)){
        $id = $fila["ID"];
        $contenido = $fila["CONTENIDO"];
        $tipo = $fila["TIPO"];

        echo "id:" . $id . "<br>";
        echo "tipo:" . $tipo . "<br>";
        echo "<img width=100 src='data:image/png; base64," .base64_encode($contenido) . "'>";
    }

?>