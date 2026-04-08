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
calculoLitrosPintura(metrosTotales); 
exhibirResultados(aaa, bbb, ccc);
Codifique cada una de las funciones.*/

$mensaje1 = "Ejercicio pintor";

$altura = 2.5;
$rendimiento = 8.5;
$manos_pintura = 2;

function ingresoMedidasHabitacion($cantidad,$alto){

    $resultado = "";

    if(isset($_GET["largoHabitacion"]) && isset($_GET["anchoHabitacion"])){
        # Aca la IA colaboro diciendome que los PHP puede generar arrays usando get, se me complicaba usar diccionarios en PHP.
        $largos = $_GET["largoHabitacion"];
        $anchos = $_GET["anchoHabitacion"];

        for($i=0;$i<$cantidad;$i++){
            $largo = $largos[$i] ?? ""; #Evita problemas de null en campos
            $ancho = $anchos[$i] ?? "";
            # Dentro del bucle se imprime cada detalle de las habitaciones al tener dos array generados paralelamente se mantiene la relatividad alto ancho
            if($largo != "" && $ancho != ""){
                $resultado .= "Habitación ".($i+1)." mide $largo x $ancho x $alto <br>";
            }
        }
    }
    return $resultado;
}

function calculoMetrosHabitacion($cantidad,$alto){

    $total = 0;
    $detalle = "";
    #Superglobales, para evitar crear arrays como la lógica PHP esta al inicio aprovecho las superglobales que me hacen dos array correlativos y ordenados.
    if(isset($_GET["largoHabitacion"]) && isset($_GET["anchoHabitacion"])){
        $largos = $_GET["largoHabitacion"];
        $anchos = $_GET["anchoHabitacion"];

        for($i=0;$i<$cantidad;$i++){
            $largo = $largos[$i] ?? "";
            $ancho = $anchos[$i] ?? "";
            if($largo != "" && $ancho != ""){
                $metrosHabitacion = ($largo + $ancho) * 2 * $alto; # formula optima conciderando que el altura es fija
                $detalle .= "Habitación ".($i+1)." tiene $metrosHabitacion m2 de paredes<br>";
                $total += $metrosHabitacion; # suno los metros individuales para conservar solo el total acualizado con un valor acumulado cuando termina el bucle
            }
        }
    }
    return [$total,$detalle]; #Agregue detalles de m2 por habitacion en índice 1
}

function calculoLitrosPintura($metrosTotales,$rendimiento,$manos){
    $litros = ($metrosTotales * $manos) / $rendimiento;
    return round($litros,2);
}

function exhibirResultados($textoHabitaciones,$detalleMetros,$metrosTotales,$litros){

    $salida = ""; # Genero variable string vacio
    # Comienzo concatenación
    $salida .= $textoHabitaciones;
    $salida .= "<br>";
    $salida .= $detalleMetros;
    $salida .= "<br>Metros totales a pintar: $metrosTotales m2";
    $salida .= "<br>Litros de pintura necesarios: $litros litros";

    return $salida;
}
# Uso funciones anteriores
$cantidadHabitaciones = $_GET["cantidadHabitaciones"] ?? 0;

$textoHabitaciones = ingresoMedidasHabitacion($cantidadHabitaciones,$altura);

$resultadoMetros = calculoMetrosHabitacion($cantidadHabitaciones,$altura);
$metrosTotales = $resultadoMetros[0];
$detalleMetros = $resultadoMetros[1];

$litros = calculoLitrosPintura($metrosTotales,$rendimiento,$manos_pintura);

$resultadoFinal = exhibirResultados($textoHabitaciones,$detalleMetros,$metrosTotales,$litros);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio Pintor</title>
</head>

<body>

<h1><?php echo $mensaje; ?></h1>
<?php
echo $resultadoMayor;
echo $resultadoVentas;
echo $resultadoPromedio;
echo $resultadoMenor;
?>

<h1><?php echo $mensaje1; ?></h1>

<form method="GET">

<label>Cantidad habitaciones:</label>
<input type="text" name="cantidadHabitaciones"><br><br>

<label>Largo habitación 1:</label>
<input type="text" name="largoHabitacion[]">

<label>Ancho habitación 1:</label>
<input type="text" name="anchoHabitacion[]"><br><br>

<label>Largo habitación 2:</label>
<input type="text" name="largoHabitacion[]">

<label>Ancho habitación 2:</label>
<input type="text" name="anchoHabitacion[]"><br><br>

<label>Largo habitación 3:</label>
<input type="text" name="largoHabitacion[]">

<label>Ancho habitación 3:</label>
<input type="text" name="anchoHabitacion[]"><br><br>

<label>Largo habitación 4:</label>
<input type="text" name="largoHabitacion[]">

<label>Ancho habitación 4:</label>
<input type="text" name="anchoHabitacion[]"><br><br>

<input type="submit" value="Calcular pintura">

</form>
<br>

<?php
echo $resultadoFinal;
?>

</body>
</html>