<?php 
include('comprobar.php');
include('Conexión.php');
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación";
$resultado=$con->query($sql);
 ?>
 <link rel="stylesheet" href="stylo.css">
 
 <body><br>
 <div class="card">
  <div class="card-header bg-info">
  Habitaciones
  </div>
  <div class="card-body">

<div class="table-responsive"> 
  <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">N° de Habitación</th>
      <th scope="col">Tipo Habitación</th>
      <th scope="col">Baño Privado</th>
      <th scope="col">Espacio</th>
      <th scope="col">Precio</th>
     <?php if ($_SESSION['IdRol']==1)
		{?>
  <th scope="col">Acción</th>
  <?php }?> 
    </tr>
  </thead>

  <tbody>
  <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <tr> 
    <td><?php echo $fila['Nro'];?> </td>
    <td><?php echo $fila['IdTipoHabitacion'];?></td>
    <td><?php echo $fila['BañoPrivado'];?></td>
    <td><?php echo $fila['Espacio'];?></td>
    <td><?php echo $fila['Precio'];?></td>
    
		<?php if ($_SESSION['IdRol']==1)
		{?>
    <td> 
    <div class="d-flex justify-content-center">
    <a href="javascript:formEditarHB(<?php echo $fila['ID'];?>)"><img src="editar.png" width="10px"><input type="button" class="btn btn-outline-secondary" value="Editar"></a>
    <a href="javascript:eliminarHB(<?php echo $fila['ID'];?>)"><img src="eliminar.png" width="10px"><input type="button" class="btn btn-outline-danger" value="Eliminar"></a>
    </div>
    </td>
    <?php }?>  
    </tr>
    
    <?php }?>
  </tr>
  </tbody>
</table>
</div> 


<ul>
<div class="d-flex justify-content-center">
		<?php if ($_SESSION['IdRol']==1)
		{?>  
<a href="javascript:cargar('FormRegistrarHB.php')"><input type="button" class="btn btn-outline-primary" value="Registrar"></a>  
<?php }?>  
</div>
</ul>
</body>