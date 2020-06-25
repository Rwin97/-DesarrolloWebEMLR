<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restarSessiones.php" method="POST">
<?php 
session_start();
$n=$_POST['n'];
$_SESSION['n']=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i;?>">
<?php 
}
 ?>
<br>
<?php for ($i=0; $i<$n ; $i++) {?>
<input type="text" name="y<?php echo $i;?>">
<?php } ?>
<input type="submit" name="restar"> 
</form>
</body>
</html>
<?php 
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restarSessiones.php" method="POST">
<?php 
session_start();
$n=$_POST['n'];
$_SESSION['n']=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i;?>">
<?php 
}
 ?>
<br>
<?php for ($i=0; $i<$n ; $i++) {?>
<input type="text" name="y<?php echo $i;?>">
<?php } ?>
<input type="submit" name="restar"> 
</form>
</body>
</html>
<?php 
>>>>>>> 4a88ea3aee8bb4f1a89af579e9c651c5a861af7d
?>