<?php session_start();
include('Conexión.php');
$correo=$_POST['txCorreo'];
$password=sha1($_POST['txPassword']);
$sql="select Correo, Nombres, Descripcion from usuarios, roles 
where Correo='$correo' and Password='$password'";
echo $sql;
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc()){
    echo "Es  usuario correcto";
    $_SESSION['Nombres']=$fila['Nombres'];
    $_SESSION['Correo']=$correo;
    $_SESSION['IdRol']=$fila['IdRol'];
    
   header("Location: Index.php");
}
else
  {
      echo "Usuario o Contraseña novalidos"; ?>
  <meta http-equiv="refresh" content="URL=Login.html">   

  <?php }
?>