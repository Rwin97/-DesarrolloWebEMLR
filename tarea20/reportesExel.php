<?php 
include('comprobar.php');
include('Conexión.php');
$sql="SELECT CodigoReserva, FechaIngreso, FechaSalida, Descripcion, Precio, Pago, Nombre, Apellidos, CorreoElectronico 
FROM reservas r, tipohabitaciones th 
WHERE r.IdHabitación=th.ID";
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
      <th scope="col">CodReserva</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Fecha de salida</th>
      <th scope="col">Habitacion</th>
      <th scope="col">Precio</th>
      <th scope="col">Pago</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>

  <tbody>
  <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <tr> 
    <td><?php echo $fila['CodigoReserva'];?> </td>
    <td><?php echo $fila['FechaIngreso'];?></td>
    <td><?php echo $fila['FechaSalida'];?></td>
    <td><?php echo $fila['Descripcion'];?></td>
    <td><?php echo $fila['Precio'];?></td>
    <td><?php echo $fila['Pago'];?></td>
    <td><?php echo $fila['Nombre'];?></td>
    <td><?php echo $fila['Apellidos'];?></td>
    <td><?php echo $fila['CorreoElectronico'];?></td>
    </tr>
    <a href="">
    <?php }?>
    </tr>
  </tbody> 
    </table>
    </div> 
    <ul>
  <div class="d-flex justify-content-center">
    <a href="ListaReservas.php"><input type="button" class="btn btn-outline-primary" value="Descargar Reporte"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="ReporteResePDF.php"><input type="button" class="btn btn-outline-danger" value="Descargar Reporte PDF"></a>
    </div>
    </ul>
 </div>
</body>
