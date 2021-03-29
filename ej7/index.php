<?php
/******************************************************************************

Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.


*******************************************************************************/

$vector=array();
$contador=0;
$numero=1;
$indice=0;
while ($contador<10) {
    if ($numero%2!=0) {
        $vector[$contador]=$numero;
    $contador++;
    }
    $numero++;
}

echo("Estructura for");
    echo"\n";
    //echo("<br/>");
    
for ($i=0; $i < count($vector) ; $i++) { 
    echo("$vector[$i]");
    
    echo"\n";
    //echo("<br/>");
 }

echo("Estructura While");
    echo"\n";
    //echo("<br/>");
while ($indice<count($vector)) {    
    echo("$vector[$indice]");
    echo"\n";
    //echo("<br/>");
    $indice++;
}

echo("Estructura foreach");
    echo"\n";
    //echo("<br/>");
foreach ($vector as $value) {
    echo("$value");
        
    echo"\n";
    //echo("<br/>");
}

?>


