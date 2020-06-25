<<<<<<< HEAD

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restarCookie.php" method="POST">
<?php  
session_start();
$n=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i;?>">
<?php 
}
 ?>
<br><br>
<?php for ($i=0; $i<$n ; $i++) {?>
<input type="text" name="y<?php echo $i;?>">
<?php }
setcookie("n", $n, time()+3600);//Creacion de cookie
 ?>

<input type="submit" name="restar"> 
</form>
</body>
=======

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restarCookie.php" method="POST">
<?php  
session_start();
$n=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i;?>">
<?php 
}
 ?>
<br><br>
<?php for ($i=0; $i<$n ; $i++) {?>
<input type="text" name="y<?php echo $i;?>">
<?php }
setcookie("n", $n, time()+3600);//Creacion de cookie
 ?>

<input type="submit" name="restar"> 
</form>
</body>
>>>>>>> 4a88ea3aee8bb4f1a89af579e9c651c5a861af7d
</html>