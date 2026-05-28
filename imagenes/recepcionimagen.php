<?php
    $nombreimagen = $_FILES["imagen"]["name"];
    $tipoimagen = $_FILES["imagen"]["type"];
    $tamañoimagen = $_FILES["imagen"]["size"];
    $contenido = "";

    if($tamañoimagen<=4000000){
        if($tipoimagen == "image/jpeg" || $tipoimagen == "image/jpg" 
        || $tipoimagen == "image/png" || $tipoimagen == "image/gif"){
        
            require("conexion.php");
            $conexion=mysqli_connect($host, $user, $pass);
            if(mysqli_connect_errno()){
                echo "hay un error en conexion";
                exit();
            }

            mysqli_select_db($conexion, $db) or die ("no se encuentra la base de datos");

            $archivo = fopen($_FILES['imagen']['tmp_name'], "r");

            $contenido=fread($archivo, $tamañoimagen);

            $contenido=addslashes($contenido);

            $consulta="INSERT INTO imagen (NOMBRE, TIPO, CONTENIDO) VALUES
            ('$nombreimagen', '$tipoimagen', '$contenido')";

            $resultado=mysqli_query($conexion, $consulta);

            if(mysqli_affected_rows($conexion)>0){
                echo "se guardo la imagen";
            } else {
                echo "no se guardo la imagen";
            }
        } else {
            echo "tipo de archivo incorrecto";
        }
    } else {
        echo "esa imagen es muy pesada";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="index.php">VOLVER</a>
    <br><br>
    <a href="leerimagenes.php"></a>
</body>
</html>