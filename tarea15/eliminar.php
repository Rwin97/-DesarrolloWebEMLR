<?php
include("Conexión.php");
$id=$_GET['id'];
$sql="delete from person where id=$id";
$resultado=$con->query($sql);
if($resultado)
echo "Se elimino con exito";
else
echo "Error al eliminar"; 
?>