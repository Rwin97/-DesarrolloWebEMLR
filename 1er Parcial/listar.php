<?php 
include('Conexion.php');
$sql="select nombres, apellidos, sexo, mesa from pacientes";
$resultado=$con->query($sql);
 ?>

 <link rel="stylesheet" href="tabla.css">
<center>
<table >
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Sexo</th>
  <th>Mesa</th>
  <tr> 
  <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <td><?php echo $fila['nombres'];?> </td>
    <td><?php echo $fila['apellidos'];?></td>
    <td><?php echo $fila['sexo'];?></td>
    <td><?php echo $fila['mesa'];?></td>
  </tr>
  <?php }?> 

</center>
