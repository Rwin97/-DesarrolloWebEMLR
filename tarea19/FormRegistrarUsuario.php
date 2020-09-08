<?php
include('comprobar.php');
include('Conexión.php');
?>
<body>
  <br>
<div class="list-group">
<div class="row justify-content-center">
<div class="col-med-20">
<div class="card">
  <div class="card-header bg-info">
    Registrar Usuario
  </div>
  <div class="card-body">
    
  <form class="form-horizontal" action="RegistrarU.php" method="POST">

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="correo">Correo: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="correo">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="contraseña">Contraseña: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="password" name="contraseña">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="nombre">Nombres: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="nombre">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="apellidos">Apellidos: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="apellidos">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="rol">Rol: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="rol">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="estado">Estado: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="estado">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Guardar">
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>
</body>


