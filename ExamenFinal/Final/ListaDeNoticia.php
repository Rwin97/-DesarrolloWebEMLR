<?php
include('conexion.php');
$sql="SELECT n.id, n.imagen, n.titulo, n.texto, n.fecha, c.comentario FROM noticias n 
INNER JOIN comentarios c ON n.id=c.idnoticia
GROUP by n.id, n.imagen, n.titulo, n.texto, n.fecha, c.comentario";
$resultado=$con->query($sql); 
?>
<body><br>
 <div class="card">
  <div class="card-body">

<div class="table-responsive"> 
  <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Titulo</th>
      <th scope="col">Texto</th>
      <th scope="col">Fecha</th>
      <th scope="col">Comentaios</th>
    </tr>
  </thead>


  <tbody>
  <?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?>
    <tr>
    <td><img src="images/<?php echo $fila['imagen'];?>" width="100px" height="100px"></td>
    <td><?php echo $fila['titulo'];?></td>
    <td><?php echo $fila['texto'];?> </td> 
    <td><?php echo $fila['fecha'];?></td>

    <td>
    <?php echo $fila['comentario'];?>    
    <div class="d-flex justify-content-center">
    <a href="javascript:Comentar(<?php echo $fila['id'];?>)">
    <input  type="button" class="btn btn-outline-secondary" value="Insertar comentario"></a>
    
    </div>
  </td>   
  <?php }?>  
    </tr>
  
</table>
</div> 
</div>
</div>
</body>
