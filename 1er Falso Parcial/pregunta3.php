<?php session_start();
include('Conexión.php');

$cons="select id, nombres, apellidos, correo FROM usuarios";
$resultado=$con->query($cons);
?>
<link rel="stylesheet" href="style.css">
<body>
<center>    
<h1>Usuarios</h1>
<table>
<th>Nombres</th>
<th>Apellidos</th>
<th>Correo</th>
<tr>
<?php
    while ($fila=$resultado->fetch_assoc())
    {
      ?> 
<tr>         
<td><?php echo $fila['nombres'];?></td>
<td><?php echo $fila['apellidos'];?></td>
<td><?php echo $fila['correo'];?></td>
    <?php }?>
    </tr>
</tr>

</table>    
</center>
</body>
