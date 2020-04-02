<<<<<<< HEAD
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
=======
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
>>>>>>> 8495055ecf4b87297f66811c8f250c3601b02866
</table>