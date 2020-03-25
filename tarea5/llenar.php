<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restas.php" method="POST">

<?php  
$n=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i;?>">
<input type="text" name="y<?php echo $i;?>"><br>
<?php 
}
 ?>
<input type="hidden" name="n" value="<?php echo $n?>"><br><br>
<input type="submit" name="restar"> 
</form>
</body>
</html>