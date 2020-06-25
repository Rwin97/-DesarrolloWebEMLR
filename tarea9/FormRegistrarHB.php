<<<<<<< HEAD
<a href="Habitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion FROM tipohabitaciones";
$resultado=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Forms.css">
    <title>Formulario de registro</title>
</head>
<body>
<center><h2>Formulario de registro</h2>   
<form action="RegistrarHB.php" method="POST">
<label for="Nro">Numero de habitación: </label><br>
<input type="number" name="Nro" min="1"><br>
<label for="idTipoHabitacion">Tipo de habitación: </label><br>
<select name="idTipoHabitacion">
<?php
while($fila=$resultado->fetch_assoc()){
?>
<option value="<?php echo $fila['ID'];?>"><?php echo $fila['Descripcion'];?></option>
<?php } ?>
</select><br>
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
=======
<a href="Habitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion FROM tipohabitaciones";
$resultado=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Forms.css">
    <title>Formulario de registro</title>
</head>
<body>
<center><h2>Formulario de registro</h2>   
<form action="RegistrarHB.php" method="POST">
<label for="Nro">Numero de habitación: </label><br>
<input type="number" name="Nro" min="1"><br>
<label for="idTipoHabitacion">Tipo de habitación: </label><br>
<select name="idTipoHabitacion">
<?php
while($fila=$resultado->fetch_assoc()){
?>
<option value="<?php echo $fila['ID'];?>"><?php echo $fila['Descripcion'];?></option>
<?php } ?>
</select><br>
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
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
