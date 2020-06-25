<<<<<<< HEAD
<?php
include("Conexión.php");
$id=$_POST['ID'];
$descripcion=$_POST['Descripcion'];
$numDeCamas=$_POST['NumDeCamas'];
$sql="update tipohabitaciones set Descripcion='$descripcion', NroCamas=$numDeCamas where ID=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>
=======
<?php
include("Conexión.php");
$id=$_POST['ID'];
$descripcion=$_POST['Descripcion'];
$numDeCamas=$_POST['NumDeCamas'];
$sql="update tipohabitaciones set Descripcion='$descripcion', NroCamas=$numDeCamas where ID=$id" ; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
<meta http-equiv="refresh" content="3; URL= TipoHabitacion.php">