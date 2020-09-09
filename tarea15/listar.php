<?php include("Conexión.php");
$sql2="select id, nombre,apellido from person";

$resultado2=$con->query($sql2);
        ?>
        <link rel="stylesheet" href="tabla.css">
        <body>
        <br><br>
        <center>
        <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>Operaciones</th>
            </tr> 
        <?php
		while ($fila=$resultado2->fetch_assoc())
		{
			?>
		<tr>
		<td><?php echo $fila['nombre'];?> </td>
        <td><?php echo $fila['apellido'];?></td>
        
        
    <td> 
    <a href="javascript:formEditar(<?php echo $fila['id'];?>)"><img src="editar.png" width="10px">
    <input class="buttonEditar" type="button" value="Editar"></a>


    <a href="javascript:eliminar(<?php echo $fila['id'];?>)"><img src="eliminar.png" width="10px">
    <input class="buttonEliminar" type="button" value="Eliminar"></a>
    </td> 
    </tr>  
    <?php }?>       
        </table>
        </center>
        
        </body>