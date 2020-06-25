<<<<<<< HEAD
<?php
include("Conexión.php");
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
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
=======
<?php
include("Conexión.php");
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
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
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
<meta http-equiv="refresh" content="3; URL= Usuarios.php"> 