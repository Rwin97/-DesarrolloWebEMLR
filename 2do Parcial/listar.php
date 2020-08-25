<?php 
	include("conexion.php");
	$sql="SELECT imagen, titulo, texto, fecha FROM noticias";
	$resultado=$con->query($sql);
 ?>

<table border="1px" width="900px" height="600px">
 	<tr>
 		<th>Imagen</th>
 		<th>Titulo</th>
         <th>Texto</th>
         <th>Fecha</th>
 	</tr>
 	<?php 
 	while($fila=$resultado->fetch_assoc())
 	{
 		?>
 		<tr>
 			<td><?php echo $fila["imagen"]; ?></td>
             <td><?php echo $fila["titulo"]; ?></td>
             <td><?php echo $fila["texto"]; ?></td>
             <td><?php echo $fila["fecha"]; ?></td>
 		</tr>
 		<?php
 	}
 	 	?>
 </table>