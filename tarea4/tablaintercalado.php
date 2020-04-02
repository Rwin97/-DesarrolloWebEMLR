<<<<<<< HEAD
<head>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<?php
$filas=$_GET['Fila'];
$columna=$_GET['Columna'];
 ?>
 <table border="1">
 <?php	
 for($i=0;$i<=$filas;$i++){
    
	for ($j=0;$j<=$columna;$j++){
	?>	
	<td class="<?php 
	switch ($i%3){ 
		case 0:echo "rojo";
		break; 
		case 1:echo "amarillo";
		break; 
		case 2:echo "verde";
		break;   
		}
		?>
		">
	</td>
		<td class="<?php 
	switch ($i%2){ 
		case 0:echo "blanco";
		break; 
		case 1:echo "rojo";
		break;
		}
		?>
		">
	</td>
	<?php	
	}
	echo "</tr>";
}
?>
</table
















=======
<head>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<?php
$filas=$_GET['Fila'];
$columna=$_GET['Columna'];
 ?>
 <table border="1">
 <?php	
 for($i=0;$i<=$filas;$i++){
    
	for ($j=0;$j<=$columna;$j++){
	?>	
	<td class="<?php 
	switch ($i%3){ 
		case 0:echo "rojo";
		break; 
		case 1:echo "amarillo";
		break; 
		case 2:echo "verde";
		break;   
		}
		?>
		">
	</td>
		<td class="<?php 
	switch ($i%2){ 
		case 0:echo "blanco";
		break; 
		case 1:echo "rojo";
		break;
		}
		?>
		">
	</td>
	<?php	
	}
	echo "</tr>";
}
?>
</table
















>>>>>>> 8495055ecf4b87297f66811c8f250c3601b02866
