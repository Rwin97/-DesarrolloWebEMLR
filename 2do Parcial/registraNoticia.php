<?php session_start();
include("conexion.php");
$imagen=$_POST['foto'];
$titulo=$_POST['titulo'];
$textoN=$_POST['textoNoticia'];
$fecha=$_POST['fecha'];
$sql="INSERT INTO noticias (imagen, titulo, texto, fecha) VALUES ( '$imagen', '$titulo', '$textoN', '$fecha' )";
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>
<meta http-equiv="refresh" content="3; URL= listar.php"> 
