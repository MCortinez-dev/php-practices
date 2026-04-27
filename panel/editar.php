<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h1>Modificar los datos</h1>

<?php

require_once("conexion.php");

if(!isset($_POST['bot_modificar'])){

    $id=$_GET["id"];
    $nomb=$_GET["nom"];
    $contra=$_GET["pas"];

}else{

    $id=$_POST["id"];
    $nomb=$_POST["nom"];
    $contra=$_POST["contra"];

    $sql="UPDATE datos_usuarios 
        SET usuarios=:n_nom, password=:n_contra 
        WHERE id_usuarios=:n_id";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(

        ":n_id"=>$id,
        ":n_nom"=>$nomb,
        ":n_contra"=>$contra

    ));

    header("Location:index.php");

}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<table border="2">

<tr>

<td>
<label>Identificador</label>
</td>

<td>
<input type="text" name="id" value="<?php echo $id ?>">
</td>

</tr>

<tr>

<td>
<label>Usuario</label>
</td>

<td>
<input type="text" name="nom" value="<?php echo $nomb ?>">
</td>

</tr>

<tr>

<td>
<label>Password</label>
</td>

<td>
<input type="text" name="contra" value="<?php echo $contra ?>">
</td>

</tr>

<tr>

<td colspan="2">

<input type="submit" value="modificar" name="bot_modificar">

</td>

</tr>

<tr>

<td colspan="2">

<a href="index.php">Volver</a>

</td>

</tr>

</table>

</form>

</body>
</html>