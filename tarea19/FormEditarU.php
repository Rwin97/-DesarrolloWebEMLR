<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['id'];
$sql="SELECT id, Correo, Password, Nombres, Apellidos, IdRol, Estado FROM usuarios where id=$id";
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
  <label class="col-md-4 col-form-label text-md-right text-dark" for="correo">Correo: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="correo" value="<?php echo $fila['Correo'];?>"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="contraseña">Contraseña: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="password" id="password" value="<?php echo $fila['Password'];?>">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="nombre">Nombres: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="Nombre" id="nombre" value="<?php echo $fila['Nombres'];?>"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="apellidos">Apellidos: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="apellidos" value="<?php echo $fila['Apellidos'];?>">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="rol">Rol: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="rol" value="<?php echo $fila['IdRol'];?>">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="estado">Estado: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="Estado" id="estado" value="<?php echo $fila['Estado'];?>">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="editarU(<?php echo $fila['id'];?>)">
  <input type="hidden" name="id" value="<?php echo $id;?>" >
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>
</body>
