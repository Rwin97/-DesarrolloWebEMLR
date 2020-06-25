<<<<<<< HEAD
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
=======
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
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
<meta http-equiv="refresh" content="3; URL= Habitacion.php"> 