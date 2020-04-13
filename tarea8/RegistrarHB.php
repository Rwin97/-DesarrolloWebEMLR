<?php
include("Conexión.php");
$Nro=$_POST['Nro'];
$idTiphabitacio=$_POST['idTipoHabitacion'];
$bp=$_POST['BP'];
$espacio=$_POST['Espacio'];
$precio=$_POST['Precio'];

$sql="INSERT INTO habitación (Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio) VALUES ( $Nro, $idTiphabitacio, '$bp', $espacio, $precio)";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>
<meta http-equiv="refresh" content="3; URL= Habitacion.php"> 