<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación where ID=$id";
$resultado=$con->query($sql);  
$fila=$resultado->fetch_assoc();
?>
<body>
  <br>
<div class="list-group">
<div class="row justify-content-center">
<div class="col-med-20">
<div class="card">
  <div class="card-header bg-info">
    Registrar Tipo de Habitacion 
  </div>
  <div class="card-body">
    
  <form class="form-horizontal">

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Nro">Numero de habitación: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" min="1" id="numH" value="<?php echo $fila['Nro']; ?>"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="idTipoHabitacion">HabitaciónID: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" min="1" id="tipoHabitacion" value="<?php echo $fila['IdTipoHabitacion']; ?>">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="text">Baño privado: </label><br>   
  <div class="col-md-6">
  <select class="form-control" id="bp">
<option value="Si"<?php if ($fila['BañoPrivado']=='Si') echo "checked"; ?>>Si</option>
<option value="No"<?php if ($fila['BañoPrivado']=='No') echo "checked"; ?>>No</option>
</select><br> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Espacio">Espacion de habitación: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="tamanio" value="<?php echo $fila['Espacio']; ?>">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Precio">Precio: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" name="Precio" id="precio" value="<?php echo $fila['Precio']; ?>">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="editarHB(<?php echo $fila['ID'];?>)">
  <input type="hidden" name="ID" value="<?php echo $id;?>">

  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>
</body>