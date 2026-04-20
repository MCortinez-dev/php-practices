<?php
    $cod = $_POST["cod"];

    $sql = "DELETE FROM material WHERE cod_material = $cod";

    require_once("conexion.php");

    if($conn->query($sql)===TRUE){
        echo "el dato se borro";
        echo "<a href='f_borrar.php'> Volver</a>";
        header('location: f_borrar.php');
    }else{
        echo "hay error";
        echo "<a href='f_borrar.php'> Volver </a>";
    }

    $conn->close();
?>