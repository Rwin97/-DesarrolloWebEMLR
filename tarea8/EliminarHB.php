<?php
include("Conexión.php");
$id=$_GET['ID'];
$sql="delete from tipohabitaciones where ID=$id";
$resultado=$con->query($sql);
if($resultado)
echo "Se elimino con exito";
else
echo "Error al eliminar";
?>
<meta http-equiv="refresh" content="3; URL= Habitacion.php"> 