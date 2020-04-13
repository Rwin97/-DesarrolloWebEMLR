<?php
include("Conexión.php");
$id=$_POST['ID'];
$Nro=$_POST['Nro'];
$idTiphabitacio=$_POST['idTipoHabitacion'];
$bp=$_POST['BP'];
$espacio=$_POST['Espacio'];
$precio=$_POST['Precio'];
$sql="update habitación set Nro=$Nro, IdTipoHabitacion=$idTiphabitacio, BañoPrivado='$bp', Espacio=$espacio, Precio=$precio where ID=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>
<meta http-equiv="refresh" content="3; URL= Habitacion.php">