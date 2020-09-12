<?php 
include('comprobar.php');
include('Conexión.php');
$sql="SELECT th.Descripcion, COUNT(r.IdHabitación) AS NReservas , r.Precio 
FROM habitación h INNER JOIN reservas r ON h.IdTipoHabitacion=r.IdHabitación 
INNER JOIN tipohabitaciones th ON th.ID=r.IdHabitación 
WHERE r.Precio=h.Precio 
GROUP BY th.Descripcion, r.IdHabitación, r.Precio";
$resultado=$con->query($sql);
 ?>
<body><br>
 <div class="card">
  <div class="card-header bg-info">
  Estadistica de reservas
  </div>
  <div class="card-body">

<div class="table-responsive"> 
  <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">Tipo de habitacion</th>
      <th scope="col">Cantidad de reservas</th>
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
    <td><?php echo $fila['Descripcion'];?> </td>
    <td><?php echo $fila['NReservas'];?></td>
    <td><?php echo $fila['Precio'];?></td>
    </tr>
  </tr>
  <?php }?>
  </tbody> 
</table>
<ul>
<div class="d-flex justify-content-center"> 
<a href="EstadisticaR.php"><input type="button" class="btn btn-outline-primary" value="Descargar Reporte"></a>  
</div>
</ul> 
</div> 
</body>

