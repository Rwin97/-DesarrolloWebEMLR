<?php
include('Conexión.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sql="update person set id=$id, nombre='$nombre', apellido='$apellido' where id=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>