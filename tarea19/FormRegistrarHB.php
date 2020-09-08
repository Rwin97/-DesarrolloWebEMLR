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
  <br>
<div class="list-group">
<div class="row justify-content-center">
<div class="col-med-20">
<div class="card">
  <div class="card-header bg-info">
    Registrar Habitacion 
  </div>
  <div class="card-body">
    
  <form class="form-horizontal">

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Nro">Numero de habitación: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" name="Nro" id="numH" min="1">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="idTipoHabitacion">Tipo de habitación: </label><br>   
  <div class="col-md-6">
  <select id="tipoHabitacion" class="form-control">
<?php   
while($fila=$resultado->fetch_assoc()){
?>
<option value="<?php echo $fila['ID'];?>"><?php echo $fila['Descripcion'];?></option>
<?php } ?>
</select>
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="text">Baño privado: </label><br>   
  <div class="col-md-6">
  <select class="form-control" name="BP" id="bp">
  <option value="Si">Si</option>
  <option value="NO">No</option>
</select>
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Espacio">Espacion de habitación: </label>   
  <div class="col-md-6">
  <input class="form-control" type="number" step="0.01" name="espacio" id="tamanio" min="1">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Precio">Precio: </label>   
  <div class="col-md-6">
  <input class="form-control" type="number" name="Precio" id="precio">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="llamaregistrarHB()"> 
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>      
</body>
</html>
