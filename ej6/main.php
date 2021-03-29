<?php
/******************************************************************************

Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.


*******************************************************************************/
$elementos=5;
$vector=array();
$contador=0;
$suma=0;
$promedio=0;
while ($contador<$elementos) {
    $numero=rand(1,10); //Lo hago de 1 a 10 porque no lo especifica
    $vector[$contador]=$numero;
    $contador++;
}

for ($i=0; $i < count($vector) ; $i++) { 
   $suma+=$vector[$i];
}

for ($i=0; $i < count($vector) ; $i++) { 
    echo("$vector[$i]");
    echo("\n");
 }

if (($suma/$elementos)<6) {
    echo("El promedio es menor a 6");
}
elseif (($suma/$elementos)>6) {
    echo("El promedio es mayor a 6");
}
else {
    echo("El promedio es igual a 6");
}
$promedio=$suma/$elementos;
echo("\n");
echo ("$suma/$elementos = $promedio ");
?>
