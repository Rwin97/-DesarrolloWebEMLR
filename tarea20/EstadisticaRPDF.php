<?php  
require_once __DIR__ . '/vendor/autoload.php'; 
include('comprobar.php');
include('Conexión.php');
$sql="SELECT th.Descripcion, COUNT(r.IdHabitación) AS NReservas , r.Precio 
FROM habitación h INNER JOIN reservas r ON h.IdTipoHabitacion=r.IdHabitación 
INNER JOIN tipohabitaciones th ON th.ID=r.IdHabitación 
WHERE r.Precio=h.Precio 
GROUP BY th.Descripcion, r.IdHabitación, r.Precio";
$resultado=$con->query($sql);
$html='
<link rel="stylesheet" href="stylo.css">
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

  <tbody>';
  
    while ($fila=$resultado->fetch_assoc())
    {
    
    $html.='<tr>
    <tr> 
    <td>'.$fila['Descripcion'].'</td>
    <td>'.$fila['NReservas'].'</td>
    <td>'.$fila['Precio'].'</td>
    </tr>
  </tr>';
   }
  $html.='</tbody> 
</table> 
</div> 
</body>
';



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
$mpdf->shrink_tables_to_fit = 0;
?>
