<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT id, Correo ,Nombres ,Apellidos ,Estado FROM usuarios";
$resultado=$con->query($sql);
 ?> 
 <link rel="stylesheet" href="Estilo.css">
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


 <h1>Tipo de Habitacion</h1>
 <table class="mostrar">
  <th>Nombres</th>
  <th>Apellidos</th>
  <th>Correo</th>
  <th>Estado</th>
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
    <td><?php echo $fila['Nombres'];?> </td>
    <td><?php echo $fila['Apellidos'];?></td>
    <td><?php echo $fila['Correo'];?> </td>
    <td><?php echo $fila['Estado'];?></td>

    <?php if ($_SESSION['IdRol']==1)
		{?>
    <td>
    <a href="FormEditarU.php?id=<?php echo $fila['id']; ?>">
    <img src="editar.png" width="10px"><input class="buttonEditar" type="button" value="Editar"></a>
    <a href="EliminarU.php?id=<?php echo $fila['id']; ?>"
    ><img src="eliminar.png" width="10px"><input class="buttonEliminar" type="button" value="Eliminar"></a>
  </td>   
  <?php }?>  
    </tr>
    <?php 
    }
    ?>
  </tr>

</table>
</center><br>
<center>
<ul>
<?php if ($_SESSION['IdRol']==1)
		{?>
<a href="FormRegistrarUsuario.php"><input class="buttonRegistrar" type="button" value="Nuevo Usuario"></a>
<?php }?>  
</ul>
</center>
</body>