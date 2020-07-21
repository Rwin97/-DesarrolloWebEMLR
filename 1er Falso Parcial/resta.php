<center>
<body>
<h2>RESULTADO: </h2><br>    
<?php
$n=$_POST['n'];
?>
<table style="border: 1px solid;">
<tr>
<?php  
for ($i=0;$i<$n;$i++){?>
	<td style="border: 1px solid;"> <?php echo $_POST['x'.$i]-$_POST['y'.$i]; ?></td>
<?php }?> 
</tr>
</table>
</body>
</center>
<a href="index.php">Regresar</a>