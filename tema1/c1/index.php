<?php
//Ejercicio 1
echo "<h2>Ejercicio 1</h2>";
$nombre = "Roberto";
$apellido = "Martinez";

echo "$nombre $apellido";

//Ejercicio 2
echo "<h2>Ejercicio 2</h2>";
for ($i=1; $i <= 10; $i++) { 
    echo $i . "<br>";
}

//Ejercicio 3
echo "<h2>Ejercicio 3</h2>";
$num = 600;

if ($num === 0) {
    echo "tu numero es el '0'";
} elseif ($num < 0){
    echo "tu numero es negativo";
} else {
    echo "Tu numero es positivo";
}

//Ejercicio 4
echo "<h2>Ejercicio 4</h2>";
$semana = 7;

switch ($semana) {
    case '1':
        echo "Lunes";
        break;
    
    case '2':
        echo "Martes";
        break;

    case '3':
        echo "Miercoles";
        break;

    case '4':
        echo "Jueves";
        break;

    case '5':
        echo "Viernes";
        break;

    case '6':
        echo "Sabado";
        break;

    case '7':
        echo "Domingo";
        break;
    default:
        echo "cambia el numero de la variable a uno entre 1 y 7 (ambos incluidos) para ver el resultado";
        break;
}

//Ejercicio 5
echo "<h2>Ejercicio 5</h2>";
function factorial($factorialnum) {
    $resultado = 1;
    for ($i=$factorialnum; $i > 1 ; $i--) { 
        $resultado = $i * $resultado;
    }
    return $resultado;
}

echo factorial(5);
?>


