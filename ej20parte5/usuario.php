<?php
class Usuario
{
    public $nombre;
    public $clave;

    static function ValidarUsuario(Usuario $usuario)
    {
        $resultado = NULL; 
        if(isset($usuario->nombre) && isset($usuario->clave))
        {           
	        if($usuario->nombre == "admin" && $usuario->clave == "1234")
	        {
		        echo "OK";
                $resultado = "OK";
	        }
	        else
	        {
		    echo "Usuario no registrado";
            $resultado = "Clave incorrecta";
	        }
        }           
        else
        {
	    echo "faltan datos";
        $resultado = "faltan datos";
        }

        $archivo = fopen("log.txt","a");
        fwrite($archivo, "$resultado; $usuario->nombre, ".date("Ymd")."\n");
        fclose($archivo);
    }
}
?>