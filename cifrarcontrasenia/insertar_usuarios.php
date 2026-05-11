<?php
    $usuario = $_POST["usu"];
    $contrasenia = $_POST["contra"];

    // $variable=['cost'=>8] esto luego se coloca en el tercer argumento
    $pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));

    


?>