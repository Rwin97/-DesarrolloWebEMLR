<?php include('funciones.php');
$dato=$_GET['n'];
$fiboS= new Operacion ($dato);

$fiboS->fibonacci();
?>