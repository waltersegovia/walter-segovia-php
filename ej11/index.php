<?php
/******************************************************************************

Aplicación Nº 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).


*******************************************************************************/

function potencia()
{
    for ($i = 1; $i < 5; $i++) {
        echo"Primeras 4 potencias de $i";
        echo"\n";
         for ($j = 2; $j < 6; $j++) {
              $resultado=pow($i,$j);
              echo"$resultado";
              echo"\n";
         }
    }
}
echo potencia();
?>
