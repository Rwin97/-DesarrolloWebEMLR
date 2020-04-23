<a href="Usuarios.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['id'];
$sql="SELECT id, Correo, Password, Nombres, Apellidos, IdRol, Estado FROM usuarios";
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
<center><h2>Formulario de registro de usuario</h2>   
<form action="EditarU.php" method="POST">
<label for="correo">Correo: </label><br>
<input type="text" name="correo" value="<?php echo $fila['Correo'];?>"><br>
<label for="contraseña">Contraseña: </label><br>
<input type="password" name="contraseña" value="<?php echo $fila['Password'];?>"><br><br>
<label for="nombre">Nombres: </label><br>
<input type="text" name="nombre" value="<?php echo $fila['Nombres'];?>"><br><br>
<label for="apellidos">Apellidos: </label><br>
<input type="text" name="apellidos" value="<?php echo $fila['Apellidos'];?>"><br><br>
<label for="rol">Rol: </label><br>
<input type="text" name="rol" value="<?php echo $fila['IdRol'];?>"><br><br>
<label for="estado">Estado: </label><br>
<input type="text" name="estado" value="<?php echo $fila['Estado'];?>"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
<input type="hidden" name="id" value="<?php echo $id;?>" >

</form>
</center>   
</form>    
</body>
</html>