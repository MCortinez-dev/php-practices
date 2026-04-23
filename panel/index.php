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
            require_once("conexion.php");
            $registro=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);
            foreach($registros as $persona);
            ?>

            <tr>
                <td><?php echo $persona->id_usuarios?></td>
                <td><?php echo $persona->usuarios?></td>
                <td><?php echo $persona->password?></td>
                <td><?php echo $persona->hash_password?></td>
            </tr>

        </table>

    </form>

    
</body>
</html>