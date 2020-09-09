<?php
include('comprobar.php');
include('Conexión.php');
$sql="SELECT id, Correo ,Nombres ,Apellidos ,Estado FROM usuarios";
$resultado=$con->query($sql);
 ?> 
 <link rel="stylesheet" href="Estilo.css">
 
 <body><br>
 <div class="card">
  <div class="card-header bg-info">
    Usuarios 
  </div>
  <div class="card-body">

<div class="table-responsive"> 
  <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Estado</th>
      <?php if ($_SESSION['IdRol']==1)
		{?>
  <th scope="col">Acción</th>
  <?php }?>  
    </tr>
  </thead>


  <tbody>
  <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <tr>
    <td><?php echo $fila['Nombres'];?> </td>
    <td><?php echo $fila['Apellidos'];?></td>
    <td><?php echo $fila['Correo'];?> </td>
    <td><?php echo $fila['Estado'];?></td>

    <?php if ($_SESSION['IdRol']==1)
		{?>
    <td>
    <div class="d-flex justify-content-center">
    <a href="javascript:formEditarU(<?php echo $fila['id'];?>)">
    <img src="editar.png" width="10px"><input  type="button" class="btn btn-outline-secondary" value="Editar"></a>
    <a href="javascript:eliminarU(<?php echo $fila['id'];?>)"><img src="eliminar.png" width="10px"><input type="button" class="btn btn-outline-danger" value="Eliminar"></a>
    
    </div>
  </td>   
  <?php }?>  
    </tr>
    <?php 
    }
    ?>
  </tr>
  
</table>
</div> 

   
<br>

<ul>
<div class="d-flex justify-content-center">
<?php if ($_SESSION['IdRol']==1)
		{?>
<a href="javascript:cargar('FormRegistrarUsuario.php')"><input type="button" class="btn btn-outline-primary" value="Nuevo Usuario"></a>
<?php }?> 
</div> 
</ul>
</div>
</div>
</body>

