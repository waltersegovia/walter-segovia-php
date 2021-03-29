<?php
/******************************************************************************

Aplicación Nº 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

*******************************************************************************/

$lapicera=array(array('color'=>"Rojo  ", 'marca'=>"Silvapen  ", 'trazo'=>"fino  ", 'precio'=>30),
                array('color'=>"Azul  ", 'marca'=>"Bic  ", 'trazo'=>"Grueso  ", 'precio'=>40),
                array('color'=>"Negro  ", 'marca'=>"Parker  ", 'trazo'=>"fino  ", 'precio'=>50));


for ($i = 0; $i < count($lapicera); $i++) {
     echo $lapicera[$i]['color'];
     echo $lapicera[$i]['marca'];
     echo $lapicera[$i]['trazo'];
     echo $lapicera[$i]['precio'];
     echo("\n");
}

?>


