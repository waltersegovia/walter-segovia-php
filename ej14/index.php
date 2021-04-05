<?php
/******************************************************************************

Aplicación Nº 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.


*******************************************************************************/
$numero=15;
//$numero=18;

function esPar($valor){
    
    $resultado="Error";
    
  if ($valor % 2 === 0) {
     $resultado=true;
     }
     
    else{
    $resultado=false;
    }  
     return $resultado;
}
  


if (esPar($numero)) {
    echo "El número $numero es par\n";
}
else {
    echo "El número $numero es impar\n";
}


