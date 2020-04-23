<?php 
include('comprobar.php');
include('Conexión.php');
$sql="select ID, Nro, IdTipoHabitacion, BañoPrivado, Espacio, Precio from habitación";
$resultado=$con->query($sql);
 ?>
 <link rel="stylesheet" href="stylo.css">
 <br><br>
 <body>
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

 <h1>Habitaciones</h1>
 <table>
  <th>N° de Habitación</th>
  <th>Tipo Habitación</th>
  <th>Baño Privado</th>
  <th>Espacio</th>
  <th>Precio</th>
  <?php if ($_SESSION['IdRol']==1)
		{?>
  <th>Acción</th>
  <?php }?>  
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
    
		<?php if ($_SESSION['IdRol']==1)
		{?>
    <td> 
    <a href="FormEditarHB.php?ID=<?php echo $fila['ID']; ?>"><img src="editar.png" width="10px"><input class="buttonEditar" type="button" value="Editar"></a>
    <a href="EliminarHB.php?ID=<?php echo $fila['ID']; ?>"><img src="eliminar.png" width="10px"><input class="buttonEliminar" type="button" value="Eliminar"></a>
    </td>
    <?php }?>  
    </tr>
    
    <?php }?>
  </tr>
</table>
</center>
<br>
<center>
<ul>
		<?php if ($_SESSION['IdRol']==1)
		{?>  
<a href="FormRegistrarHB.php"><input class="buttonRegistrar" type="button" value="Registrar"></a>  
<?php }?>
</ul>
</center>
</body>