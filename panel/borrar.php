<?php

include("conexion.php");

$id=$_GET["id"];

$sql="DELETE FROM datos_usuarios WHERE id_usuarios=:id";

$resultado=$base->prepare($sql);

$resultado->execute(array(":id"=>$id));

header("location:index.php");

?>