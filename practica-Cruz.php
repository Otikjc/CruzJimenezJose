<?php
/**
 * Script de suma y resto de dos variables
 * 
 * El Script pretende mostrar al usuario el resultado de dos operaciones con dos variables predefinidas.
 * Las dos operaciones son una suma y el resto de una división
 * Para cada una de las operaciones, el programa llamará a una función distinta (suma o resto), pasará 
 * los valores predefinidos y se devolvera el resultado a una tercera variable llamada "resultado"
 * Este resultado se mostrará por pantalla a través de la función echo()
 * 
 * 
 * {@internal Este script se ha realizado para el ejercicio 5.2}
 * 
 * @author José Cruz Jiménez <jcrujimz@gmail.com>
 * @version 1.0.0
 * 
 */



/**
 * Se trata de una función que devuelve la suma de dos variables
 * 
 * @param int $variable1
 * @param int $variable2
 * @return int
 */
function suma($variable1, $variable2)
{
    $vdevuelta=$variable1 + $variable2;
    return ($vdevuelta);
}
/**
 * Se trata de una función que devuelve el resto de una división entre dos variables
 * 
 * @param int $variable1
 * @param int $variable2
 * @return int 
 */
function resto($variable1, $variable2)
{
    $vdevuelta=$variable1 % $variable2;
    return ($vdevuelta);
}

$var1 = 5;
$var2 = 10;
$resultado = 0;

$resultado = suma($var1, $var2);

echo("La suma de las dos variables es: " . $resultado."<br>");

$resultado = resto($var1, $var2);

echo("El resto de las dos variables es: " . $resultado."<br>");

