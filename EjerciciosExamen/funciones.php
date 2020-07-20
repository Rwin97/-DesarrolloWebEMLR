<?php   
class Operacion 
{
private $dato;
public function __construct($valor){
$this->dato=$valor;
}

function fibonacci(){ 
   $x=1; 
   $y=0;
   $fibo=0;
   for($i=0;$i<=$this->dato;$i++){
   $y=$x;
   $x=$fibo+$x;
   $fibo=$y;
   echo $fibo; 
   }

  }

}


?>