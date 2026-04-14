#Para conectar con la base de datos, se hace un archivo y luego se invoca
<?php
    $host="localhost";
    $pass="";
    $user="root";
    $db="ejemplo";
    $port="3306";
    
    // $host="localhost";
    // $pass="";
    // $user="root"
    // $db="ejemplo"

    $conn = new mysqli($host, $user, $pass, $db); //Conservar oreden de variables

    if($conn ->connect_errno){
        echo "Fallo la conexion";
        
    }

?>