<?php
    $cod = $_POST["cod"];

    $sql = "DELETE FROM material WHERE cod_material = '$cod'";

    require_once("conexion.php");

    if($conn->query($sql)===TRUE){
        header('location: f_borrar.php');
        exit();
        echo "el dato se borro";
        echo "<a href='f_borrar.php'> Volver</a>";
        
    }else{
        echo "hay error";
        echo "<a href='f_borrar.php'> Volver </a>";
    }

    $conn->close();
?>