<?php
include("Conexión.php");
$id=$_POST['id'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rol=$_POST['rol'];
$estado=$_POST['estado'];
$sql="UPDATE usuarios SET Correo='$correo', Password='$contraseña', Nombres='$nombre', Apellidos='$apellidos' ,IdRol=$rol ,Estado='$estado' WHERE id=$id"; 
$resultado=$con->query($sql);
if($resultado)
echo "Se edito con exito";
else
echo "Error al editar";
?>
<meta http-equiv="refresh" content="3; URL= Usuarios.php">