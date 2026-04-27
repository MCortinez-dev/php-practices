<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>CRUD Create read Update Delete</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    
    <?php
        require_once("conexion.php");

        if(isset($_POST["cr"])){
            $nombre=$_POST["nom"];
            $contrasenia=$_POST["contra"];
            $hpas=$_POST["phash"];

            $sql= "INSERT INTO datos_usuarios(usuarios, password, hash_password) 
                VALUES (:n_nom, :n_cont, :n_hpas)";

            $resultado=$base->prepare($sql);

            $resultado->execute(array(
                ":n_nom"=>$nombre,
                ":n_cont"=>$contrasenia,
                ":n_hpas"=>$hpas
            ));
        }
    ?>

        <table width="50%" border="1" align="center">

            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Pass Cifrada</th>
                <th></th>
                <th></th>
            </tr>

            <?php

            $registro=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);

            foreach($registro as $persona):

            ?>

            <tr>

                <td><?php echo $persona->id_usuarios?></td>
                <td><?php echo $persona->usuarios?></td>
                <td><?php echo $persona->password?></td>
                <td><?php echo $persona->hash_password?></td>

                <td>

                    <a href="editar.php?id=<?php echo $persona->id_usuarios?>&nom=<?php echo $persona->usuarios?>&pas=<?php echo $persona->password?>">
                        <input type="button" value="Modificar">
                        <img src="../img/editar.png" width="30px">
                    </a>

                </td>

                <td>

                    <a href="borrar.php?id=<?php echo $persona->id_usuarios?>">
                        <input type="button" value="Borrar">
                        <img src="../img/eliminar.png" width="30px">
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

            <tr>

                <td></td>

                <td>
                    <input type="text" name="nom">
                </td>

                <td>
                    <input type="text" name="contra">
                </td>

                <td>
                    <input type="text" name="phash">
                </td>

                <td>

                    <input type="submit" value="Guardar" name="cr">
                    <img src="../img/save.png" width="30px">

                </td>

            </tr>

        </table>

    </form>

</body>
</html>