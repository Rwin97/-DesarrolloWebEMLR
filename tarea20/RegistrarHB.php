<?php
include("Conexión.php");
$Nro=$_POST['numH'];
$idTiphabitacio=$_POST['tipoHabitacion'];
$bp=$_POST['bp'];
$espacio=$_POST['tamanio'];
$precio=$_POST['precio'];

$sql="INSERT INTO habitación (Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio) VALUES ( $Nro, '$idTiphabitacio', '$bp', $espacio, $precio)";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>
