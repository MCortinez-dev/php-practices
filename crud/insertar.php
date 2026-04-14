<?php
$mat = $_POST["mat"];
$desc = $_POST["desc"];

require_once("conexion.php");

$sql = "INSERT INTO material (cod_material, descripcion) VALUES ('$mat','$desc')";

if($conn->query($sql) === true){
    echo "El dato se guardó correctamente";
    echo "<br><button><a href='f_insert.php'>Volver</a></button>";
}else{
    echo "Error: " . $sql . $conn->error;
}
?>