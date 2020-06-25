<?php 
include('conexion.php');
$sql="select Nombres, Apellidos, Sexo, Edad, Celular,Estado, Fecha, Procedencia, CodigoPais from perosnas, procedencia where perosnas.ID=procedencia.ID";
$resultado=$con->query($sql);
 ?>
 <style>
table, th, td{
border: 1px solid blue;
}   
th{
  background: blue;
} 
 </style>
 <center>
 <table>
  <th>Nombres</th>
 	<th>Apellidos</th>
 	<th>Sexo</th>
 	<th>Edad</th>
  <th>Celular</th>
  <th>Estado</th>
  <th>Fecha</th> 
 	<th>Procedencia</th>
 	<th>CodigoPais</th>
    <tr>

   <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <td><?php echo $fila['Nombres'];?> </td>
    <td><?php echo $fila['Apellidos'];?></td>
    <td><?php echo $fila['Edad'];?></td>
    <td><?php echo $fila['Sexo'];?></td>
    <td><?php echo $fila['Celular'];?></td>
    <td><?php echo $fila['Estado'];?></td>
    <td><?php echo $fila['Fecha'];?></td>
    <td><?php echo $fila['Procedencia'];?> </td>
    <td><?php echo $fila['CodigoPais'];?></td>
    </tr>
    <?php 
    }
    ?>
  </tr>

</table>
</center>