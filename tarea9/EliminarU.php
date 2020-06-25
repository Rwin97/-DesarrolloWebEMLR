<?php
include("Conexión.php");
$id=$_GET['id'];
$sql="update usuarios set Estado='E' where id=$id";
$resultado=$con->query($sql);
if($resultado)
header("Location: Usuarios.php"); 
else
header("Location: Usuarios.php"); 
?>