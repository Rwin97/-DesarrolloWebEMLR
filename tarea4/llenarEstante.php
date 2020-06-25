<?php
include("estante.php");
$e=new estante();
$e->insertarLibro("matematicas",1);
$e->insertarLibro("Biologia",1);
$e->insertarLibro("Literatura",3);
$e->insertarLibro("Algebra de baldor",1);
$e->mostrarFila(1);
$e->mostrarEstante();
?>