<<<<<<< HEAD
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
<meta http-equiv="refresh" content="3; URL= TipoHabitacion.php"> 
=======
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
<meta http-equiv="refresh" content="3; URL= TipoHabitacion.php"> 
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
