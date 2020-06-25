<<<<<<< HEAD
<?php
session_start();
$n=$_SESSION['n'];
?>
<table style="border: 1px solid;">
<tr>
<?php  
for ($i=0;$i<$n;$i++){?>
	<td style="border: 1px solid;"> 
	<?php echo $_POST['x'.$i]-$_POST['y'.$i]; ?></td>
<?php }?> 

</tr>
=======
<?php
session_start();
$n=$_SESSION['n'];
?>
<table style="border: 1px solid;">
<tr>
<?php  
for ($i=0;$i<$n;$i++){?>
	<td style="border: 1px solid;"> 
	<?php echo $_POST['x'.$i]-$_POST['y'.$i]; ?></td>
<?php }?> 

</tr>
>>>>>>> 4a88ea3aee8bb4f1a89af579e9c651c5a861af7d
</table>