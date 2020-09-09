<?php
include("Conexión.php");
$id=$_GET['ID'];
$sql="delete from habitación where ID=$id";
$resultado=$con->query($sql);
if($resultado)
echo "Se elimino con exito";
else
echo "Error al eliminar";
?>
