<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura</title>
</head>
<body>

<?php
require_once("conexion.php");

$consulta = "SELECT * FROM material";

$resultado = $conn->query($consulta);

if($resultado -> num_rows >0){
    echo "<h1>Registro de materiales</h1><br>";
    while($fila = mysqli_fetch_array ($resultado)){
        echo $fila[0];
        echo $fila[1];
        echo "<br>";
        }
}
else{
    echo "No hay datos";
}

include("../footer.php");

?>

</body>
</html>