<a href="Habitacion.php">Regresar a la pagina principal</a>
<?php
/*include(Conexion.php);
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones";
$resultado=$con->query($sql);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de registro</title>
</head>
<body>
<center><h2>Formulario de registro</h2>   
<form action="RegistrarHB.php" method="POST">
<label for="Nro">Numero de habitación: </label><br>
<input type="number" name="Nro" min="1"><br>
<label for="idTipoHabitacion">HabitaciónID: </label><br>
<input type="number" name="idTipoHabitacion" min="1"><br><br>
<label for="text">Baño privado: </label><br>
<select name="BP" id="BP">
<option value="Si">Si</option>
<option value="NO">No</option>
</select><br>
<label for="Espacio">Espacion de habitación: </label><br>
<input type="text" name="Espacio"><br>
<label for="Precio">Precio: </label><br>
<input type="number" name="Precio"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
</form>
</center>        
</body>
</html>
