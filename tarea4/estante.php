<?php
class estante{
	private $fila1=array();
	private $fila2=array();
	private $fila3=array();
	private $tope1;
	private $tope2;
	private $tope3;
	function constructor(){
		$this->tope0=0;
		$this->tope1=0;
		$this->tope2=0; 
	}
	public function insertarLibro($libro, $Lfila){
	switch ($Lfila) {
		case 1:
		$this->fila1[$this->tope1]=$libro;
		$this->tope1++;
		break;
		case 2:
		$this->fila2[$this->tope2]=$libro;
		$this->tope2++;
		break;
		case 3:
		$this->fila3[$this->tope3]=$libro;
		$this->tope3++;
		break;
		default:
		echo "no hay mas filas.<br>";
		break;
	}
	}
	public function eliminarLibro($Lfila){
	switch ($Lfila) {
		case 1:
		if ($thi->tope1==0) 
		echo "la fila esta vacia.<br>";
		else{  $this->tope1--;
			return $this->fila1[$this->tope1];
		}
		case 2:
		if ($thi->tope2==0) 
		echo "la fila esta vacia.<br>";
		else{  $this->tope2--;
			return $this->fila2[$this->tope3];
		}
		case 3:
		if ($thi->tope3==0) 
		echo "la fila esta vacia.<br>";
		else{  $this->tope3--;
			return $this->fila3[$this->tope3];
		}
		default:
		echo "no hay mas filas.<br>";
		break;
	}
	}
	public function mostrarFila($Lfila){
	switch ($Lfila) {
		case 1:
		for ($i=0; $i<=$this->tope1 ; $i++) { 
			echo $this->fila1[$i]."<br>";
		}
		break;
		case 2:
		for ($i=0; $i<=$this->tope2 ; $i++) { 
			echo $this->fila2[$i]."<br>";
		}
		break;
		case 3:
		for ($i=0; $i<=$this->tope3; $i++) { 
			echo $this->fila3[$i]."<br>";
		}
		break;
		default:
		echo "noexisten mas filas";
	}
	}
	public function mostrarEstante(){
		echo "fila 1 ocupada";
		for ($i=0; $i<$this->tope1 ; $i++) 
			echo $this->fila1[$i]."</br>";
			echo "fila 2 ocupado";
		for ($i=0; $i<$this->tope2 ; $i++)  
			echo $this->fila2[$i]."</br>";
			echo "fila 2 ocupado";
		for ($i=0; $i<$this->tope3 ; $i++) 
			echo $this->fila3[$i]."</br>";		
		
		}
	
		}
 ?>