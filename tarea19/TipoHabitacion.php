<?php
include('comprobar.php');
include('Conexión.php');
$sql="select ID, Descripcion, NroCamas from tipohabitaciones   ";
$resultado=$con->query($sql);
 
 ?>
 <link rel="stylesheet" href="Estilo.css">
 <body><br>
 <div class="card">
  <div class="card-header bg-info">
    Tipo de habitacion 
  </div>
  <div class="card-body">

<div class="table-responsive"> 
  <table class="table  table-bordered">
  <thead>
    <tr> 
  <th scope="col">Descripcion</th>
  <th scope="col">N° de camas</th> 
  <?php if ($_SESSION['IdRol']==1)
		{?>
  <th scope="col">Acción</th>
  <?php } ?>
  </tr>
  </thead>


  <tbody>
  <tr>

   <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <td><?php echo $fila['Descripcion'];?> </td>
    <td><?php echo $fila['NroCamas'];?></td>
    <?php if ($_SESSION['IdRol']==1)
		{?>
    <td>
    <div class="d-flex justify-content-center">
    <a href="javascript:formEditar(<?php echo $fila['ID'];?>)">
    <img src="editar.png" width="10px"><input  type="button" class="btn btn-outline-secondary" value="Editar"></a>
    <a href="javascript:eliminar(<?php echo $fila['ID'];?>)">
    <img src="eliminar.png" width="10px"><input type="button" class="btn btn-outline-danger" value="Eliminar"></a>
    </div>
  </td> 
  <?php } ?>
    </tr>
    <?php } ?>
  </tr>

</table>
</div>
<br>

<?php if ($_SESSION['IdRol']==1)
		{?>
<ul>
<div class="d-flex justify-content-center">
<a href="javascript:cargar('FormRegistrarTH.php')"><input type="button" class="btn btn-outline-primary" value="Registrar"></a>
</div>
</ul>
<?php } ?>

</body>