<?php
include('comprobar.php');
include('Conexión.php');
$sql="select ID, CodigoReserva, FechaIngreso, FechaSalida, IdHabitación, Precio, Pago, Nombre, Apellidos, CorreoElectronico 
from reservas";
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
    Reservar Habitacion 
  </div>
  <div class="card-body">
    
  <form class="form-horizontal">  						

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="text">Codigo de Reserva: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="codigoReserva"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="date">Fecha ingreso: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="date" id="fechaIngreso">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="date">FechaSalida: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="date" id="fechaSalida"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="apellidos">IdHabitación: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="IdHabitacion">
  </div></div><br>
  
  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="precio">Precio: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="precio">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="pago">Pago: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="pago">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="nombre">Nombres: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="Nombre" id="nombre"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="apellidos">Apellidos: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="apellidos">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="correo">Correo: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="correo"> 
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="RegistrarReserva()">
  <input type="hidden" name="id" value="<?php echo $id;?>" >
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>

</body>