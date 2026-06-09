<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen BD</title>
</head>
<body>

    <form action="recepcionimagen.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="archivo">Selecciona una imagen:</label>
                </td>
                <td>
                    <input type="file" name="imagen" id="archivo">
                </td>
            </tr>
            <tr colspan="2">
                <td colspan="2">
                    <input type="submit" value="Accion Imagen">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>