<?php
/******************************************************************************

Parte 5 - Ejercicios POO y archivos CSV
Aplicación Nº 20 (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario

*******************************************************************************/

include './usuario.php';
$nuevoUsuario = new Usuario();

$nuevoUsuario->nombre = $_POST["usuario"];
$nuevoUsuario->clave = $_POST["clave"];

echo Usuario::ValidarUsuario($nuevoUsuario);

?>

