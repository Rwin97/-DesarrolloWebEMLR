<?php 
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion FROM tipohabitaciones";
$resultado=$con->query($sql);
?>

<body>
    <br><br>
<form enctype="multipart/form-data">
<label for="text">tipo habitacion</label> <br>  
<select id="tipoHabitacion">
<?php   
while($fila=$resultado->fetch_assoc()){
?>
<option value="<?php echo $fila['ID'];?>"><?php echo $fila['Descripcion'];?></option>
<?php } ?>
</select><br><br>

<label for="text">Cargar Imagen</label><br>
<input type="file" id="img" name="Img"><br><br>
<input type="button" value="Cargar" onclick="Insertar()">
</form>    


</body>