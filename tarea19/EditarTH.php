<?php
include("Conexión.php");
$id=$_POST['ID'];
$descripcion=$_POST['descripcion'];
$numDeCamas=$_POST['ncamas'];
$sql="update tipohabitaciones set Descripcion='$descripcion', NroCamas=$numDeCamas where ID=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>