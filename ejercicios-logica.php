<!-- Ejercitación de funciones, estructuras (condicionales y bucles)
    1. En una tienda de empanadas quieren saber qué día del mes venden más cantidad de empanadas.
        a. Realice un programa para almacenar la cantidad de empanadas vendidas por día (considerar que el mes tiene 30 días). Utilizar el array empanadasVendidas[]. Cargar el array con los siguientes valores: {10, 43, 46, 26, 482, 620, 324, 94, 32, 14, 65, 503, 720, 234, 48, 21, 54, 79, 89, 365, 621, 478, 832, 49, 30, 27, 44, 73, 300, 100, 200}
        b. Realizar una función que encuentre que día del mes vendió más empanadas. La función debe devolver el número de día de mayor venta. Informar al usuario que día se vendió más empanadas y cuántas se vendió.
        c. A la función mayorVenta() se le debe pasar el array empanadasVendidas[] y deberá devolver:
            i. El número de día de mayor venta.
            ii. La cantidad vendida ése día.
            iii. imprimirVentas() : para imprimir las ventas de cada uno de los días. Debe mostrar el número de día y la cantidad de empanadas vendida.
            iv. promedioVentas() : para imprimir el promedio de las ventas.
            v. menorVenta() : para imprimir la cantidad mínima de venta en un día.
            Informar día y cantidad. -->
<?php $mensaje = "Ejercicio empanadas";

$empanadasVendidas = array(10, 43, 46, 26, 482, 620, 324, 94, 32, 14, 65, 503, 720, 234, 48, 21, 54, 79, 89, 365, 621, 478, 832, 49, 30, 27, 44, 73, 300, 100, 200);

function mayorVenta($empanadasVendidas) {
    $mayor = 0;
    $dia = 0;
    $mes = 1;
# For empieza en cero, se fija cuantos elementos tiene el array para no contar mas de ese punto, incrementa de a uno
    for ($i = 0; $i < count($empanadasVendidas); $i++) {
        # if guarda en cada iteración en mayor el elemento que sea MAYOR. Además se cuenta los dias
        if ($empanadasVendidas[$i] > $mayor) {
            $mayor = $empanadasVendidas[$i];
            $dia = $i + 1;
            # El array tiene 31 elementos, por eso el elemnto 30 seria del día del 2do mes
            if ($dia > 30) {
                $mes = intdiv($dia, 30) + 1;
                $dia = $dia % 30;
            }
        }
    }
    return "En el mes $mes El día $dia se vendió la mayor cantidad de empanadas con un total de $mayor, ver que cliente compro la mayor cantidad <br><br>";
}


function imprimirVentas($empanadasVendidas) {
    $resultado = "";
    for ($i = 0; $i < count($empanadasVendidas); $i++) {
        $ventaDia = $empanadasVendidas[$i];
        $dia = $i + 1;
        $mes = 1;
        if ($dia > 30) {
            $mes = intdiv($dia, 30) + 1;
            $dia = $dia % 30;
        }
        $resultado .= "Mes $mes - Día $dia : $ventaDia empanadas <br>";
    }
    return $resultado;
}


function promedioVentas($empanadasVendidas) {
    $promedioVentas = round(array_sum($empanadasVendidas) / count($empanadasVendidas),2);
    return "<br>El promedio de ventas es $promedioVentas<br>";
}


function menorVenta($empanadasVendidas) {
    $menor = $empanadasVendidas[0];
    $dia = 1;
    $mes = 1;
# For empieza en cero, se fija cuantos elementos tiene el array para no contar mas de ese punto, incrementa de a uno
    for ($i = 0; $i < count($empanadasVendidas); $i++) {
        # if guarda en cada iteración en mayor el elemento que sea Menor. Además se cuenta los dias
        if ($empanadasVendidas[$i] < $menor) {
            $menor = $empanadasVendidas[$i];
            $dia = $i + 1;
            # El array tiene 31 elementos, por eso el elemnto 30 seria del día del 2do mes
            if ($dia > 30) {
                $mes = intdiv($dia, 30) + 1;
                $dia = $dia % 30;
            }
        }
    }
    return "En el mes $mes El día $dia se vendió la menor cantidad de empanadas con un total de $menor , fijarse las cámaras que los empleados no se coman los insumos<br><br>";
}
$resultadoMayor = mayorVenta($empanadasVendidas);
$resultadoVentas = imprimirVentas($empanadasVendidas);
$resultadoPromedio = promedioVentas($empanadasVendidas);
$resultadoMenor = menorVenta($empanadasVendidas);
/*2. Se desea calcular la cantidad de pintura necesaria para pintar un departamento.

a. Para esto se deberá realizar un programa que permita realizar el cálculo.
    i. Cantidad de ambientes del departamento o casa (1, 2, 3 o 4 ambientes).
    ii. Para cada ambiente el largo y ancho expresado en metros. Suponer: Que no se pintan el baño, lavadero ni cocina. (para simplificar).
    iii. Altura de todos los techos es: 2,5 metros. Se utiliza el mismo color de pintura para todas las habitaciones. El rendimiento de la pintura es de 8.5m2 /litro. Se realizan dos manos de pintura.
    iv. El programa debe indicar la totalidad de metros cuadrados a pintar. Cantidad de litros de pintura que hay que comprar. Para desarrollar el programa, divida en funciones las diferentes tareas.

Algunas podrían ser:
ingresoCantidadHabitaciones();
ingresoMedidasHabitacion();
calculoMetrosHabitacion(ancho, largo, alto);
calculoLitrosPintura(metrosTotales); exhibirResultados(aaa, bbb, ccc);

Codifique cada una de las funciones.*/

$mensaje1 = "Ejercicio pintor";




















?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Lógica</title>
</head>
<body>

<h1><?php echo $mensaje; ?></h1>
<?php
echo $resultadoMayor;
echo $resultadoVentas;
echo $resultadoPromedio;
echo $resultadoMenor;
?>
<br>
<br>
<h1><?php echo $mensaje1; ?></h1>
<?php

?>
</body>
</html>