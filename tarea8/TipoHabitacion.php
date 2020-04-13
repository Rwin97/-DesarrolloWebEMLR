<a href="Index.html">Regresar a la pagina principal</a>
<?php 
include('Conexión.php');
$sql="select ID, Descripcion, NroCamas from tipohabitaciones   ";
$resultado=$con->query($sql);
 ?>
 <link rel="stylesheet" href="Estilo.css">
 
 <center>
 <h1>Tipo de Habitacion</h1>
 <table class="mostrar">
  <th>Descripcion</th>
  <th>N° de camas</th>
  <th>Acción</th>
  <tr>

   <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <td><?php echo $fila['Descripcion'];?> </td>
    <td><?php echo $fila['NroCamas'];?></td>
    <td>
    <a href="FormEditarTH.php?ID=<?php echo $fila['ID']; ?>"><img src="editar.png" width="10px"><input class="buttonEditar" type="button" value="Editar"></a>
    <a href="EliminarTH.php?ID=<?php echo $fila['ID']; ?>"><img src="eliminar.png" width="10px"><input class="buttonEliminar" type="button" value="Eliminar"></a>
    
  </td>   
    </tr>
    <?php 
    }
    ?>
  </tr>

</table>
</center><br>
<center>
<a href="FormRegistrarTH.php"><input class="buttonRegistrar" type="button" value="Registrar"></a>
</center>