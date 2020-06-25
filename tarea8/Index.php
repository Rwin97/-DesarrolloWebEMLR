<?php include('comprobar.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
 <?php
 echo "Usted esta autenticado como ".$_SESSION['Nombres'];
 ?>   
<Ul><a href="TipoHabitacion.php">Tipo de Habitación</a></Ul>
<Ul><a href="Habitacion.php">Habitación</a></Ul>   
</body>
</html>
