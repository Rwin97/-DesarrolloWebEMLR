<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <center>
<form>
   
<?php 
$n=$_POST['num'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" id="x<?php echo $i;?>" onchange="sumar()"><br>
<?php 
}
 ?>

<input type="button" class="btn btn-primary" id="suma">

</div>

</form>
</center>
</body>
</html>
<?php 
?>