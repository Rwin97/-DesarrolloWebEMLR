<a href="Index.html">Regresar a la pagina principal</a>
<?php 
include('Conexión.php');
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación   ";
$resultado=$con->query($sql);
 ?>
 <link rel="stylesheet" href="stylo.css">
 <br><br>
 <center>
 <h1>Habitaciones</h1>
 <table>
  <th>N° de Habitación</th>
  <th>Tipo Habitación</th>
  <th>Baño Privado</th>
  <th>Espacio</th>
  <th>Precio</th>
  <th>Acción</th>
  <tr>

   <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr> 
    <td><?php echo $fila['Nro'];?> </td>
    <td><?php echo $fila['IdTipoHabitacion'];?></td>
    <td><?php echo $fila['BañoPrivado'];?></td>
    <td><?php echo $fila['Espacio'];?></td>
    <td><?php echo $fila['Precio'];?></td>
    <td>
    <a href="FormEditarHB.php?ID=<?php echo $fila['ID']; ?>"><img src="editar.png" width="10px"><input class="buttonEditar" type="button" value="Editar"></a>
    <a href="EliminarHB.php?ID=<?php echo $fila['ID']; ?>"><img src="eliminar.png" width="10px"><input class="buttonEliminar" type="button" value="Eliminar"></a>
    
  </td>      
    </tr>
    <?php 
    }
    ?>
  </tr>
</table>
</center>
<br>
<center>
<a href="FormRegistrarHB.php"><input class="buttonRegistrar" type="button" value="Registrar"></a>  
</center>
