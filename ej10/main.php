<?php
/******************************************************************************

Aplicación Nº 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays

*******************************************************************************/

$l1=array('color'=>"Rojo  ", 'marca'=>"Silvapen  ", 'trazo'=>"fino  ", 'precio'=>30);
$l2=array('color'=>"Azul  ", 'marca'=>"Bic  ", 'trazo'=>"Grueso  ", 'precio'=>40);
$l3=array('color'=>"Negro  ", 'marca'=>"Parker  ", 'trazo'=>"fino  ", 'precio'=>50);

//indexado
$vector=array($l1,$l2,$l3);

//asociativo
$lapiceras=array(array('color'=>"Rojo  ", 'marca'=>"Silvapen  ", 'trazo'=>"fino  ", 'precio'=>30),
                array('color'=>"Azul  ", 'marca'=>"Bic  ", 'trazo'=>"Grueso  ", 'precio'=>40),
                array('color'=>"Negro  ", 'marca'=>"Parker  ", 'trazo'=>"fino  ", 'precio'=>50));


for ($i = 0; $i < count($lapiceras); $i++) {
     echo $lapiceras[$i]['color'];
     echo $lapiceras[$i]['marca'];
     echo $lapiceras[$i]['trazo'];
     echo $lapiceras[$i]['precio'];
     echo("\n");
}

echo("\n");
echo("****************************************");
echo("\n");

for ($i = 0; $i < count($vector); $i++) {
     echo $vector[$i]['color'];
     echo $vector[$i]['marca'];
     echo $vector[$i]['trazo'];
     echo $vector[$i]['precio'];
     echo("\n");
}
?>

