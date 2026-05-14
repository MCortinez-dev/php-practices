<?php
    try{
        $login = htmlentities(addslashes($_POST["usu"]));

        $password=htmlentities(addslashes($_POST["contra"]));

        $contador = 0;

        $base=new PDO("mysql:host=localhost:3307; dbname=usuarios", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM datos_usuarios WHERE usuarios= :login";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":login"=>$login));

        while($registros=$resultado->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($password, $registros['hash_password'])){
                $contador++;
            }
        }

        if ($contador>0){

            echo "usuario registrado";
        }else{
            echo "usuario no registrado";
        }
    }catch(Exception $e){
        die("error:" . $e->getMessage());
    }

?>
