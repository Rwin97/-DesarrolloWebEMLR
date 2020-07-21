<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="registrar.php" method="post">
<label for="text">Nombre</label><br>
<?php
session_start();
include('conexion.php'); 
$numA=$_POST['numA'];
for ($i=0; $i<$numA ; $i++) { 
?> <tr>
<td><input type="text" name="N<?php echo $i?>"></td>
<td><input type="text" name="A<?php echo $i?>"></td>
<td><input type="radio" name="S<?php echo $i?>" value="M">M
<input type="radio"  name="S<?php echo $i?>" value="F">F</td>
<td><input type="text" name="M<?php echo $i?>"></td><br>
</tr>
<?php 
}
 ?>
<br><br>
<input type="hidden" name="numA" value="<?php echo $numA?>">
<input type="submit" name="registar"> 
</form>
</body>
</html>
