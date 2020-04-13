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
<meta http-equiv="refresh" content="3; URL= TipoHaitacion.php">