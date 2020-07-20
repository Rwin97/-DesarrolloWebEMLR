<form action="registrar.php" method="POST">
<?php  
$numA=$_POST['numA'];
?><label for="text">Nombre</label><br><?php
include('conexion.php'); 
for ($i=0; $i<$numA ; $i++) { 
?> <tr>
<td><input type="text" name="n<?php echo $i?>"></td>
<td><input type="text" name="a<?php echo $i?>"></td>
<td><input type="radio" name="s<?php echo $i?>" value="M">M
<input type="radio"  name="s<?php echo $i?>" value="F">F</td>
<input type="hidden" name="numA" value="<?php echo $numA?>">
<td><input type="text" name="M<?php echo $i?>"></td><br>
</tr>

<?php 
}
 ?>


<br><br>
<input type="submit" name="registar"> 
</form>