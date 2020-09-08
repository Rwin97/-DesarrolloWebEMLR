<?php
include("Conexión.php");
$correo=$_POST['correo'];
$contraseña=$_POST['password'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rol=$_POST['rol'];
$estado=$_POST['estado'];
$sql="INSERT INTO usuarios(Correo, Password, Nombres, Apellidos, IdRol, Estado) VALUES ( '$correo', 
'$contraseña', '$nombre', '$apellidos', $rol, '$estado')";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>