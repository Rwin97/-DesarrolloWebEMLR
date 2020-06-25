<<<<<<< HEAD
<?php
include("Conexión.php");
$id=$_GET['id'];
$sql="update usuarios set Estado='E' where id=$id";
$resultado=$con->query($sql);
if($resultado)
header("Location: Usuarios.php"); 
else
header("Location: Usuarios.php"); 
=======
<?php
include("Conexión.php");
$id=$_GET['id'];
$sql="update usuarios set Estado='E' where id=$id";
$resultado=$con->query($sql);
if($resultado)
header("Location: Usuarios.php"); 
else
header("Location: Usuarios.php"); 
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
?>