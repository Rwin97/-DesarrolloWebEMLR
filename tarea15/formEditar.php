<?php
include('Conexión.php');
$id=$_GET['id'];
$sql="SELECT id, nombre, apellido FROM person WHERE id=$id";
$resultado=$con->query($sql);  
$fila=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h2>Formulario de registro</h2>   
<form  method="Post">
<label for="nombre">Nombre: </label><br>
<input type="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
<label for="apellido">Numero de camas: </label><br>
<input type="apellido" name="apellido" value="<?php echo $fila['apellido']; ?>"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar" onclick="llamarEditar(<?php echo $fila['id'];?>)">
<input type="hidden" name="ID" value="<?php echo $id;?>" >
</form>
</center>   
</form>    
</body>
</html>