<?php
/******************************************************************************

Aplicación Nº 15 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color, un método virtual (ToString) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).
Ejemplo:

  *   *******
 ***  *******
***** *******
Utilizar el método ToString para obtener toda la información completa del objeto, y luego
dibujarlo por pantalla.


*******************************************************************************/
//Clase abstracta
abstract class FiguraGeometrica{
  protected $color;
  protected $perimetro;
  protected $superficie;
  
    function __construct() {
    }
  
  abstract protected function CalcularDatos();
  abstract public function Dibujar();
  
  public function __toString(){
    return "Figura geométrica";  
  }
  
  public function GetColor(){
   return $this->color;
  }
  
  public function SetColor($color){
   $this->color = $color;
  }
  
}    

//Clase derivada Triangulo
class Triangulo extends FiguraGeometrica{
   private $altura;
   private $base;
   
   function __construct($b,$h){
       $this->altura=$h;
       $this->base=$b;
   }
   
   protected function CalcularDatos(){
   
      $this->superficie=($this->altura*$this->base)/2;
   }
   
   public function Dibujar(){
     $this->CalcularDatos();
     echo "  *  \n ***\n*****\n";
     echo "Superficie: ". $this->superficie;
     echo "\n";
   }
   
   public function __toString(){
    return "Figura Triangulo\nBase=$this->base,Altura=$this->altura\n";  
   }
} 

//***** Clase derivada Rectangulo *****

 class Rectangulo extends FiguraGeometrica{
   private $ladoUno;
   private $ladoDos;
   
   function __construct($ladoUno,$ladoDos){
       $this->ladoUno=$ladoUno;
       $this->ladoDos=$ladoDos;
   }
   
   protected function CalcularDatos(){
      $this->perimetro=2*($this->ladoUno+$this->ladoDos);
      $this->superficie=$this->ladoUno*$this->ladoDos;
     
   }
   
   public function Dibujar(){
     $this->CalcularDatos();
     echo "\n*******\n*******\n*******\n";
     echo "Superficie: ". $this->superficie;
     //echo "\n";
     echo "\nPerimetro: ". $this->perimetro;
   }
   
   public function __toString(){
    return "\nFigura Rectangulo\nLado 1=$this->ladoUno, Lado 2=$this->ladoDos\n"; 
   }
}   

//***** Funcionalidad ******

$objTriangulo=new Triangulo(3,5);
$objRectangulo=new Rectangulo(2,6);

echo $objTriangulo;
$objTriangulo->Dibujar();

echo $objRectangulo;
$objRectangulo->Dibujar();


