<?php
    $host="localhost";
    $pass="";
    $user="root";
    $db="ejemplo";
    $port="3306";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno){
        echo "Fallo la conexion";
    }
?>