<?php
    $usuario = $_POST["usu"];
    $contrasenia = $_POST["contra"];

    $pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));

    try{
        $base=new PDO('mysql:host=localhost:3307; dbname=usuarios', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql="INSERT INTO datos_usuarios (usuarios, hash_password) VALUES (:usu, :contra)";

        $resultado = $base->prepare($sql);

        $resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));

        echo "usuario registrado";

        $resultado->closeCursor();

    }catch(Exception $e){

        echo "Linea del error: ". $e->getLine();
        echo " Mensaje: ". $e->getMessage();
    }finally{
        $base=null;
    }
?>