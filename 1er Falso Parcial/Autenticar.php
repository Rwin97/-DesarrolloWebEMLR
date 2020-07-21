<?php session_start();
include('Conexión.php');
$correo=$_POST['correo'];
$password=$_POST['contraseña'];
$sql="select id,correo, password, nombres, apellidos, nivel FROM usuarios  
where correo='$correo' and Password='$password'";
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc()){
    echo "Es  usuario correcto";
    $_SESSION['correo']=$correo;
    $_SESSION['nombres']=$fila['nombres'];
    $_SESSION['apellidos']=$fila['apellidos'];
    $_SESSION['nivel']=$fila['nivel']; 
   header("Location: index.php");
}
else
  {
      echo '<span style="color: red">Usuario no valido</span>'; ?>
  <meta http-equiv="refresh" content="3; URL=login.html">   

  <?php }
?>