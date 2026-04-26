<?php
    $cod = $_POST["cod"];
    $des = $_POST["des"];

    $sql = "UPDATE material SET descripcion = '$des' WHERE cod_material = '$cod'";

    require_once("conexion.php");

    if($conn->query($sql)===TRUE){
        echo "el dato se modifico";
        //echo "<a href='f_borrar.php'> Volver</a>";
        header('location: f_modificar.php');
    }else{
        echo "hay error";
        echo "<a href='f_modificar.php'> Volver </a>";
    }

    $conn->close();
?>