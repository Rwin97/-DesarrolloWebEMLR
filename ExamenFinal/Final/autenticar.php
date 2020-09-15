<?php session_start();
include("conexion.php");
$correo=$_POST['txCorreo'];
$contraseña=sha1($_POST['txPassword']);
$sql="select correo, password, nombrecompleto, nivel FROM usuarios where correo='$correo' and password='$contraseña'";
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc()){
    echo "El usuario es correcto";
    $_SESSION['correo']=$correo;
    $_SESSION['nombrecompleto']=$fila['nombrecompleto'];
    $_SESSION['nivel']=$fila['nivel'];
    
   header("Location: index.html");
}
else
  {
      echo "Usuario o Contraseña no validos"; ?>
  <meta http-equiv="refresh" content="3; URL=index.html">   

  <?php }
?>