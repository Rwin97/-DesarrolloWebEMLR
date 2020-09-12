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
     
    </tr>
    
    <?php }?>
  </tr>
  </tbody> 
</table>
</div> 

<ul>
<div class="d-flex justify-content-center">
<a href="ReporteHabitacion.php"><input type="button" class="btn btn-outline-primary" value="Descargar Reporte"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="ReporteHabPDF.php"><input type="button" class="btn btn-outline-danger" value="Descargar Reporte PDF"></a>
</div>
</ul>