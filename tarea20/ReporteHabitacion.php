<?php
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=nombre_archivo.xls');
?>
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