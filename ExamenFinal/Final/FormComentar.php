<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include('conexion.php');
$id=$_GET['id'];
echo $id;
$sql="SELECT idnoticia, comentario, nombre FROM comentarios WHERE idnoticia=$id";
$resultado=$con->query($sql);  
$fila=$resultado->fetch_assoc();
?>

<body>
<form>
<div class="form-group">    
<label for="text">Comentario</label>
<input type="text" id="comentario">
<div class="d-flex justify-content-center">
<input type="button" class="btn btn-primary" value="Guardar" onclick="introducirComentario(<?php echo $fila['idnoticia'];?>)">
</div>
</div>
</form>
</body>
</html>