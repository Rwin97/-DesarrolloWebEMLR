<?php 
include('conexion.php');
$sql="select nombre, apellidos, sexo, edad, celular,estado, fecha, procedencia, codigoPais
from persona, procedencias where persona.id=procedencias.id";
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
    <td><?php echo $fila['nombre'];?> </td>
    <td><?php echo $fila['apellidos'];?></td>
    <td><?php echo $fila['edad'];?></td>
    <td><?php echo $fila['sexo'];?></td>
    <td><?php echo $fila['celular'];?></td>
    <td><?php echo $fila['estado'];?></td>
    <td><?php echo $fila['fecha'];?></td>
    <td><?php echo $fila['procedencia'];?> </td>
    <td><?php echo $fila['codigoPais'];?></td>
    </tr>
    <?php 
    }
    ?>
  </tr>

</table>
</center>