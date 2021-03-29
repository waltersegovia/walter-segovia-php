<?php
/******************************************************************************

Aplicación Nº 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.


*******************************************************************************/

$i = 273; 
$contador=1;
$suma=1;
while ($i==true){
    $contador++;
    echo"$suma";
  
         $suma = $suma+$contador;
         if (($suma + $contador+1)>1000) {
             $i=false;
         }
    
    echo "<br>";
} 

echo"Suma: $suma";

echo"Cantidad de numeros: $contador";
?>



