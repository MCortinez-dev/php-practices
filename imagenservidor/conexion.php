<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "usuarios";
$puerto = "3307";

$conn = new mysqli($host,$user, $pass, $db, $puerto);

if($conn->connect_errno){
    echo "Fallo la conexion";
}
?>