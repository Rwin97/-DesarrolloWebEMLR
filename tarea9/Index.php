<?php include('comprobar.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondo.css">
    <title>Document</title>
</head>
<body>   
 <?php 
if ($_SESSION['IdRol']==1)
echo "Administrador: ".$_SESSION['Nombres'];
else
echo "Recepcionista: ".$_SESSION['Nombres'];	
 ?>
 <center>  
 <div class="ConteArriba">
 <div class="menu">
    
<ul><a href="Index.php">Incio</a></ul>  
<ul><a href="TipoHabitacion.php">Tipo de Habitación</a></ul>  
<ul><a href="Habitacion.php">Habitación</a></ul> 
<ul><a href="Usuarios.php">Usuarios</a></ul>   
<ul><a href="cerrar.php">Cerrar cesión</a></ul>  
</div>
</div>
<br><br><br>
<img src="imagenes/descarga.jpg" width="60%">
</center>
</body>
</html>
