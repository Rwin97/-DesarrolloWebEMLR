<?php session_start();
$correo=$_POST['correo'];
$password=$_POST['contraseña'];
$_SESSION['correo']=$_POST['correo'];
/*echo $correo;
echo $password;*/

if($correo==1){
  echo $correo."Administrador"; 
}else{
    echo $correo."Usuario";
}

?>
<br>
<a href="acceso.php">acceso</a>