<a href="TipoHabitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones";
$resultado=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="Forms.css">
</head>
<body>
<center><h2>Formulario de registro</h2>   
<form action="RegistrarTH.php" method="POST">
<label for="Descripcion">Descripción: </label><br>
<input type="text" name="Descripcion"><br>
<label for="NumDeCamas">Numero de camas: </label><br>
<input type="number" name="NumDeCamas" min="1"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
</form>
</center>        
</body>
</html>


