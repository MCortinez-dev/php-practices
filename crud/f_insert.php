<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario para guardar los materiales</h1>
    <form action="insertar.php" method="post">
        <label for="mat">Codigo Material</label>
        <input type="text" name="mat" id="mat">
        <br><br>
        <label for="desc">Descripción</label>
        <input type="text" name="desc" id="desc">
        <br><br>
        <input type="submit" value="Guardar">

    </form>
</body>
</html>