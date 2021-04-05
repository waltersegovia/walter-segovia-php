<?php
/******************************************************************************

Aplicación Nº 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.

*******************************************************************************/
$max=13;
//$palabra="Parcial";
$palabra="Recupera x";
//$palabra="Recuperatorio";



function validar($str, $max){
    
    $resultado="";
    
  if (strlen($str)<=$max) {
      $str = strtolower($str);
      
      switch (strlen($str)) {
         case 7:
             if (strcmp($str, "parcial") === 0) {
                 $resultado=1;
             }
             break;
             
         case 12:
             if (strcmp($str, "programacion") === 0) {
                 $resultado=1;
             }
             break;
             
         case 13:
             if (strcmp($str, "recuperatorio") === 0) {
                 $resultado=1;
             }
             break; 
         default:
             echo "El valor del string no esta en el listado\n";
             break;
     }
     
     
  }
  return $resultado;
}

if (validar($palabra, $max)===1) {
    echo "La palabra pertenece a un elemento del listado\n";
}
else {
    echo "La palabra no pertenece a un elemento del listado\n";
}





