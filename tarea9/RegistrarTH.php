<<<<<<< HEAD
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
=======
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
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
<meta http-equiv="refresh" content="3; URL= TipoHabitacion.php"> 