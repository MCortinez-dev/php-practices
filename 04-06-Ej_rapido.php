<!-- Trabajo individual,
Crear un formulario HTML simple con dos inputs numéricos. Al enviar, un script PHP debe recibir los datos, detectar qué operación se pidió, calcular y devolver el resultado.
Entregar el archivo comprimido renombrado como ej 3 y  el apellido del participante.

Recuerden citar la IA y en que porcentaje del totalidad de la tarea colaboró.

Ejemplo: ej_3_acri_perez_lopez.zip -->

Calculadora de prueba - Coloque dos numeros en los primeros cuadros y luego la operacion correspondiente en el último recuadro.
<br>
<br>
<form method="GET">

<input type="number" name="numero_1" />
<input type="number" name="numero_2" />

<input type="text" name="operacion" placeholder="+ - * /" />

<button type="submit">Calcular</button>

</form>

<?php
# Isset colaboro la IA
if (isset($_GET["numero_1"]) && isset($_GET["numero_2"]) && isset($_GET["operacion"])) {

    $numero1 = $_GET["numero_1"];
    $numero2 = $_GET["numero_2"];
    $operacion = $_GET["operacion"];

    function operacion($numero1, $numero2, $operacion) {

        $resultado = null;

        switch ($operacion) {

            case "+":
                $resultado = $numero1 + $numero2;
                break;

            case "-":
                $resultado = $numero1 - $numero2;
                break;

            case "*":
                $resultado = $numero1 * $numero2;
                break;

            case "/":
                $resultado = $numero1 / $numero2;
                break;

            default:
                echo "Operación no válida";
                return;
        }

        echo "Resultado: " . $resultado;
    }

    operacion($numero1, $numero2, $operacion);
}

?>

<!-- Aun no estoy completamente embebido en php, asi que la IA me corrigió los errores de estructura, conozco como se resuelve sigo programando en otro lenguaje. -->