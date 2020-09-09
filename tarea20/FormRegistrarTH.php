<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones";
$resultado=$con->query($sql);
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
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Descripcion">Descripción: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" name="Descripcion" id="descripcion"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="NumDeCamas">Numero de camas: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" name="NumDeCamas" min="1" id="ncamas">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="llamaregistrarTH()">
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>
</body>


