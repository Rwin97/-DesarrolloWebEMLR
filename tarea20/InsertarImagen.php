<?php 
include("Conexión.php");
$tipoHabitacion=$_POST['tipoHabitacion'];
$imagen=$_FILES['img']['name'];
$separado=explode(".",$_FILES['img']['name']);
$extension=$separado[1];
$imagen=$tipoHabitacion.".".$extension;
$sql="INSERT INTO fotoshabitacion (IdHabitación ,fotografia) VALUES ($tipoHabitacion, $imagen)";
echo $sql;
$resultado=$con->query($sql);
copy($_FILES['img']['tmp_name'],'images/'.$imagen);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";

?>