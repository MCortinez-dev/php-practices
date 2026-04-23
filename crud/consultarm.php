<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    require_once("conexion.php");

    $id=$_POST["cod"];

    $sql= "SELECT * FROM material where cod_material = '$id' ";

    $resultado = $conn->query($sql);

    if($resultado ->num_rows >0){
        
        $rows = mysqli_fetch_array($resultado);
        $cod = $rows[0];
        echo $cod;
        $des= $rows[1];
        echo "$des";
?>

<body>
    <h1>Formulario para ejecutar la modificacion</h1>

    <form action="modificardatos.php" method="post">

        <label for="id">Codigo del Material</label>
        <input readonly type="text" name="cod" id="id" value="<?php echo $cod ?>">
        <br><br>
        <label for="des">Descripcion del material</label>
        <input type="text" name="des" id="des" value="<?php echo $des ?>">

    <input type="submit" value="Modificar">
    </form>

<?php 
        }else{
            echo "ese codigo no existe";
            echo "<a href='f_modificar.php'> Volver </a>";
    }
?>

</body>
</html>