<?php
require_once __DIR__ . '/vendor/autoload.php'; 

$html=
include('comprobar.php');
include('Conexión.php');
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación";
$resultado=$con->query($sql);
$html.='
<link rel="stylesheet" href="stylo.css">
 <center> 
 <body><br>
 <div class="container">
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

  <tbody>';

    while ($fila=$resultado->fetch_assoc())
    { 

    $html.=  '<tr>
    <tr> 
    <td>'.$fila['Nro'].'</td>
    <td>'.$fila['IdTipoHabitacion'].'</td>
    <td>'.$fila['BañoPrivado'].'</td>
    <td>'.$fila['Espacio'].'</td>
    <td>'.$fila['Precio'].'</td>
     
    </tr>';
    
    }
    $html.='
  </tr>
  </tbody> 
</table>
</div> 
</div> 
</center>
';
 


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
$mpdf->shrink_tables_to_fit = 0;


?>