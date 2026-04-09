<?php

$mensajeOk = "Bienvenido, su registro ha sido exitoso";
$mensajeNot = "Debe de ser mayor de edad para poder registrarse";

function edad($dato,$mensaje1,$mensaje2) {

    if ($dato > 18) {
        return $mensaje1;
    } else {
        return $mensaje2;
    }
}

if (isset($_POST["nombre"]) && isset($_POST["contrasena"]) && isset($_POST["edad"])) {

    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];
    $edad = $_POST["edad"];

    $verificacion = edad($edad,$mensajeOk,$mensajeNot);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio rápido página de registro</title>
</head>

<body>

<form method="POST">

<label>Ingrese su Nombre</label>
<input type="text" name="nombre"><br><br>

<label>Ingrese su Contraseña</label>
<input type="text" name="contrasena"><br><br>

<label>Ingrese su Edad</label>
<input type="text" name="edad"><br><br>

<input type="submit" value="Registrarse">

</form>

<?php
if (isset($verificacion)) {
    echo "<h2>$verificacion</h2>";
}
?>

</body>
</html>

