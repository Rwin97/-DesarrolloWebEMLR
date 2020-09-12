<?php
require_once __DIR__ . '/vendor/autoload.php'; 
include('comprobar.php');
include('Conexión.php');
$sql="SELECT CodigoReserva, FechaIngreso, FechaSalida, Descripcion, Precio, Pago, Nombre, Apellidos, CorreoElectronico 
FROM reservas r, tipohabitaciones th 
WHERE r.IdHabitación=th.ID";
$resultado=$con->query($sql);

$html='
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

  <tbody>';
  
    while ($fila=$resultado->fetch_assoc())
    {
    
    $html.='<tr>
    <tr> 
    <td>'.$fila['CodigoReserva'].'</td>
    <td>'. $fila['FechaIngreso'].'</td>
    <td>'. $fila['FechaSalida'].'</td>
    <td>'. $fila['Descripcion'].'</td>
    <td>'. $fila['Precio'].'</td>
    <td>'. $fila['Pago'].'</td>
    <td>'. $fila['Nombre'].'</td>
    <td>'.$fila['Apellidos'].'</td>
    <td>'. $fila['CorreoElectronico'].'</td>
    </tr>';
     }
    $html.='</tr>
  </tbody> 
    </table>
    </div> 
 </div>
</body>

';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
$mpdf->shrink_tables_to_fit = 0;
?>




