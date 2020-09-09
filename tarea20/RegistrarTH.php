<?php
include("Conexión.php");
$descripcion=$_POST['descripcion']; 
$numHabitaciones=$_POST['ncamas'];
$sql="INSERT INTO tipohabitaciones (Descripcion, NroCamas) VALUES ( '$descripcion', $numHabitaciones)";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>