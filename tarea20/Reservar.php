<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion FROM tipohabitaciones";
$resultado=$con->query($sql);  
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
  <label class="col-md-4 col-form-label text-md-right text-dark" for="fechaIngreso">Fecha ingreso: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="date" id="fechaIngreso">
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="fechaSalida">FechaSalida: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="date" id="fechaSalida"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="apellidos">IdHabitación: </label><br>   
  <div class="col-md-6">
  <select class="form-control" type="text" id="IdHabitacion">
  <?php   
while($fila=$resultado->fetch_assoc()){
?>
<option value="<?php echo $fila['ID'];?>"><?php echo $fila['Descripcion'];?></option>
<?php } ?>
</select>  
  </div></div><br>
  
  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="precio">Precio: </label><br>   
  <div class="col-md-6">
  <select type="text" id="precio" class="form-control">
  <option value="10">10</option>
  <option value="50">50</option>
  <option value="40">40</option> 
  </select>  
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
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="RegistrarReserva(<?php echo $fila['id'];?>)">
  <input type="hidden" name="id" value="<?php echo $id;?>" >
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>

</body>