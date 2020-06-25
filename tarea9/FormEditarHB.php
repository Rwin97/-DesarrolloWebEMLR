<<<<<<< HEAD
<a href="Habitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación where ID=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Forms.css">
    <title>Document</title>
</head>
<body>
<center><h2>Formulario de registro</h2>  
<div> 
<form action="EditarHB.php" method="POST">
<label for="Nro">Numero de habitación: </label><br>
<input type="number" name="Nro" min="1" value="<?php echo $fila['Nro']; ?>" ><br>
<label for="idTipoHabitacion">HabitaciónID: </label><br>
<input type="number" name="idTipoHabitacion" min="1" value="<?php echo $fila['IdTipoHabitacion']; ?>"><br><br>
<label for="text">Baño privado: </label><br>
<select name="BP" id="BP">
<option value="Si"<?php if ($fila['BañoPrivado']=='Si') echo "checked"; ?>>Si</option>
<option value="No"<?php if ($fila['BañoPrivado']=='No') echo "checked"; ?>>No</option>
</select><br>
<label for="Espacio">Espacion de habitación: </label><br>
<input type="text" name="Espacio" value="<?php echo $fila['Espacio']; ?>"><br>
<label for="Precio">Precio: </label><br>
<input type="number" name="Precio" value="<?php echo $fila['Precio']; ?>"><br><br>
<input type="hidden" name="ID" value="<?php echo $id;?>" >
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
</form>
</div>
</center>       
</body>
=======
<a href="Habitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación where ID=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Forms.css">
    <title>Document</title>
</head>
<body>
<center><h2>Formulario de registro</h2>  
<div> 
<form action="EditarHB.php" method="POST">
<label for="Nro">Numero de habitación: </label><br>
<input type="number" name="Nro" min="1" value="<?php echo $fila['Nro']; ?>" ><br>
<label for="idTipoHabitacion">HabitaciónID: </label><br>
<input type="number" name="idTipoHabitacion" min="1" value="<?php echo $fila['IdTipoHabitacion']; ?>"><br><br>
<label for="text">Baño privado: </label><br>
<select name="BP" id="BP">
<option value="Si"<?php if ($fila['BañoPrivado']=='Si') echo "checked"; ?>>Si</option>
<option value="No"<?php if ($fila['BañoPrivado']=='No') echo "checked"; ?>>No</option>
</select><br>
<label for="Espacio">Espacion de habitación: </label><br>
<input type="text" name="Espacio" value="<?php echo $fila['Espacio']; ?>"><br>
<label for="Precio">Precio: </label><br>
<input type="number" name="Precio" value="<?php echo $fila['Precio']; ?>"><br><br>
<input type="hidden" name="ID" value="<?php echo $id;?>" >
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
</form>
</div>
</center>       
</body>
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
</html>