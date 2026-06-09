<?php
    $nombre = "";

    $nombre_imagen = $_FILES['imagen']['name'];

    $tipo_imagen = $_FILES['imagen']['type'];

    $tamanio_imagen = $_FILES['imagen']['size'];

    if($tamanio_imagen <= 5000000){
        if($tipo_imagen == "image/jpg" || $tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png"){
            
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/php-practices/imagenservidor/img/';
            
            $carpeta_destino = addslashes($carpeta_destino);
            
            move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
            
            echo "la imagen se guardo";
        }else{

            echo "la extension no es valida";

            echo "<h2> <a href=index.php> Volver a cargar </a> </h2>";

        }

        include("conexion.php");

        $consulta = "INSERT INTO imagen(ID, NOMBRE, TIPO, CONTENIDO) VALUES 
        (null, '$nombre', '$nombre_imagen', 'null')";

        $resultado = mysqli_query($conn, $consulta);

        if(mysqli_affected_rows($conn)>0){
            echo "Se guardo la informacion";
        } else {
            echo "verifica, por que no se guardo";
            echo "<h2> <a href=index.php> Volver a cargar </a> </h2>";
        };
    }

?>
