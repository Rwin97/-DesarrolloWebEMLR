<?php
include("Conexión.php");
$CReserva=$_POST['codigoReserva']; 
$FIngreso=$_POST['fechaIngreso'];
$FSalida=$_POST['fechaSalida']; 
$IDHabitacion=$_POST['IdHabitacion'];
$precio=$_POST['precio']; 
$pago=$_POST['pago'];
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellidos'];
$correo=$_POST['correo']; 
$sql="INSERT INTO reservas (CodigoReserva, FechaIngreso, FechaSalida, IdHabitación, Precio, Pago, Nombre, Apellidos, CorreoElectronico)
VALUES ('$CReserva', '$FIngreso', '$FSalida', $IDHabitacion, $precio, $pago, '$nombre', '$apellido', '$correo')";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>
								