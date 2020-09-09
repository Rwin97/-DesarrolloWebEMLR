<?php
include('comprobar.php');
include('Conexión.php');
$id=$_GET['ID'];
$sql="SELECT ID,Descripcion,NroCamas FROM tipohabitaciones where ID=$id";
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
  <label class="col-md-4 col-form-label text-md-right text-dark" for="Descripcion">Descripción: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="text" id="descripcion" value="<?php echo $fila['Descripcion']; ?>"> 
  </div></div><br>

  <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right text-dark" for="NumDeCamas">Numero de camas: </label><br>   
  <div class="col-md-6">
  <input class="form-control" type="number" min="1" id="ncamas" value="<?php echo $fila['NroCamas']; ?>">
  </div></div><br>

  <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <input type="reset" class="btn btn-outline-info btn-lg btn-block" value="Limpear">
  <input type="button" class="btn btn-outline-info btn-lg btn-block" value="Guardar" onclick="editarTH(<?php echo $fila['ID'];?>)">
  <input type="hidden" name="ID" value="<?php echo $id;?>" >
  </div></div>
</form> 

</div>
</div>
</div>
</div>
</div>
</body>
