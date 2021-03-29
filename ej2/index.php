<?php
/******************************************************************************

Aplicación Nº 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.


*******************************************************************************/

$time = time();

echo date("d-m-Y (H:i:s)", $time);

echo"<br/>";
echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));

echo"<br/>";
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");

echo"<br/>";
$hoy = getdate();
print_r($hoy);

echo"<br/>";
$mes=date("m");
$estacion="Error";

switch ($mes) {
    case '1':
        $estacion="Verano";
        break;
    case '2':
         $estacion="Verano";
        break;
        
    case '3':
        if (date("d") >= 21) {
           $estacion="Otoño";
        }
        else {
            $estacion="Verano";
        }
         
        break;
        
    case '4':
         $estacion="Otoño";
        break;
        
    case '5':
        $estacion="Otoño";
        break;
        
    case '6':
        if (date("d") >= 21) {
           $estacion="Invierno";
        }
        else {
            $estacion="Otoño";
        }
        break;
        
    case '7':
        $estacion="Invierno";
        break;
        
    case '8':
        $estacion="Invierno";
        break;
        
    case '9':
          if (date("d") >= 21) {
           $estacion="Primavera";
        }
        else {
            $estacion="Invierno";
        }
        break;
        
    case '10':
         $estacion="Primavera";
        break;
        
    case '11':
        $estacion="Primavera";
        break;
        
    case '12':
          if (date("d") >= 21) {
           $estacion="Verano";
        }
        else {
            $estacion="Primavera";
        }
        break;
    default:
        // code...
        break;
}

echo"<br/>";
echo"Estamos en: $estacion";
