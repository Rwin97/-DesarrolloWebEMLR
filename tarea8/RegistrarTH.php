<?php
include("Conexión.php");
$descripcion=$_POST['Descripcion'];
$numHabitaciones=$_POST['NumDeCamas'];
$sql="INSERT INTO tipohabitaciones (Descripcion, NroCamas) VALUES ( '$descripcion', $numHabitaciones)";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>
<meta http-equiv="refresh" content="3; URL= TipoHaitacion.php"> 