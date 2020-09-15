<?php
include("conexion.php");
$idnoticia=$_POST['idnoticia'];
echo $idnoticia;
$comentario=$_POST['comentario']; 
$sql="INSERT INTO comentarios (idnoticia, comentario) VALUES ( $idnoticia ,'$comentario')";
echo $sql;
$resultado=$con->query($sql);
if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>