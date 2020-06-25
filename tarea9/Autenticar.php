<<<<<<< HEAD
<?php session_start();
include('Conexión.php');
$correo=$_POST['txCorreo'];
$password=sha1($_POST['txPassword']);
$sql="select Correo, Nombres, U.IdRol, Descripcion FROM usuarios AS U, roles AS R  
where Correo='$correo' and Password='$password'";
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc()){
    echo "Es  usuario correcto";
    $_SESSION['Correo']=$correo;
    $_SESSION['Nombres']=$fila['Nombres'];
    $_SESSION['Descripcion']=$fila['Descripcion'];
    $_SESSION['IdRol']=$fila['IdRol'];
    
   header("Location: Index.php");
}
else
  {
      echo "Usuario o Contraseña no validos"; ?>
  <meta http-equiv="refresh" content="3; URL=Login.html">   

  <?php }
=======
<?php session_start();
include('Conexión.php');
$correo=$_POST['txCorreo'];
$password=sha1($_POST['txPassword']);
$sql="select Correo, Nombres, U.IdRol, Descripcion FROM usuarios AS U, roles AS R  
where Correo='$correo' and Password='$password'";
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc()){
    echo "Es  usuario correcto";
    $_SESSION['Correo']=$correo;
    $_SESSION['Nombres']=$fila['Nombres'];
    $_SESSION['Descripcion']=$fila['Descripcion'];
    $_SESSION['IdRol']=$fila['IdRol'];
    
   header("Location: Index.php");
}
else
  {
      echo "Usuario o Contraseña no validos"; ?>
  <meta http-equiv="refresh" content="3; URL=Login.html">   

  <?php }
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
?>