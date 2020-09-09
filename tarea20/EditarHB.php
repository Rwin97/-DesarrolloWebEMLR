<?php
include("Conexión.php");
$id=$_POST['ID'];
$Nro=$_POST['numH'];
$idTiphabitacio=$_POST['tipoHabitacion'];
$bp=$_POST['bp'];
$espacio=$_POST['tamanio'];
$precio=$_POST['precio'];
$sql="update habitación set Nro=$Nro, IdTipoHabitacion=$idTiphabitacio, BañoPrivado='$bp', Espacio=$espacio, Precio=$precio where ID=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>
