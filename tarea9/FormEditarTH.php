<<<<<<< HEAD
<a href="TipoHabitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones";
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
<form action="EditarTH.php" method="POST">
<label for="Descripcion">Descripción: </label><br>
<input type="text" name="Descripcion" value="<?php echo $fila['Descripcion']; ?>"><br>
<label for="NumDeCamas">Numero de camas: </label><br>
<input type="number" name="NumDeCamas" min="1" value="<?php echo $fila['NroCamas']; ?>"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
<input type="hidden" name="ID" value="<?php echo $id;?>" >

</form>
</center>   
</form>    
</body>
=======
<a href="TipoHabitacion.php">Regresar a la pagina principal</a>
<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones";
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
<form action="EditarTH.php" method="POST">
<label for="Descripcion">Descripción: </label><br>
<input type="text" name="Descripcion" value="<?php echo $fila['Descripcion']; ?>"><br>
<label for="NumDeCamas">Numero de camas: </label><br>
<input type="number" name="NumDeCamas" min="1" value="<?php echo $fila['NroCamas']; ?>"><br><br>
<input type="reset" value="Limpear">
<input type="submit" value="Guardar">
<input type="hidden" name="ID" value="<?php echo $id;?>" >

</form>
</center>   
</form>    
</body>
>>>>>>> e7491393ab60aad01aed9c79e3f5765045050072
</html>