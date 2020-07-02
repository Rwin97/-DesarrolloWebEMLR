<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="restarCookie.php" method="POST">
<?php  

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
</html>