<?php
include('comprobar.php');
include('Conexión.php');
$sql="select ID, Descripcion, NroCamas from tipohabitaciones   ";
$resultado=$con->query($sql);
 
 ?>
 <link rel="stylesheet" href="Estilo.css">
 <body>
 <br><br>
 <?php
 echo "Usuario: ".$_SESSION['Nombres'];
 ?>
 <center>
 <div class="ConteArriba">
 <div class="menu">
    
<ul><a href="Index.php">Incio</a></ul>  
<ul><a href="TipoHabitacion.php">Tipo de Habitación</a></ul>  
<ul><a href="Habitacion.php">Habitación</a></ul> 
<ul><a href="Usuarios.php">Usuarios</a></ul>   
<ul><a href="cerrar.php">Cerrar cesión</a></ul>  
</div>
</div>


 <h1>Tipo de Habitacion</h1>
 <table class="mostrar">
  <th>Descripcion</th>
  <th>N° de camas</th>
  <?php if ($_SESSION['IdRol']==1)
		{?>
  <th>Acción</th>
  <?php } ?>
  <tr>

   <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <td><?php echo $fila['Descripcion'];?> </td>
    <td><?php echo $fila['NroCamas'];?></td>
    <?php if ($_SESSION['IdRol']==1)
		{?>
    <td>
    <a href="FormEditarTH.php?ID=<?php echo $fila['ID']; ?>">
    <img src="editar.png" width="10px"><input class="buttonEditar" type="button" value="Editar"></a>
    <a href="EliminarTH.php?ID=<?php echo $fila['ID']; ?>"
    ><img src="eliminar.png" width="10px"><input class="buttonEliminar" type="button" value="Eliminar"></a>
  </td> 
  <?php } ?>
    </tr>
    <?php } ?>
  </tr>

</table>
</center><br>
<center>
<?php if ($_SESSION['IdRol']==1)
		{?>
<ul>
<a href="FormRegistrarTH.php"><input class="buttonRegistrar" type="button" value="Registrar"></a>
</ul>
<?php } ?>
</center>
</body>