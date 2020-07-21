<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="resta.php" method="POST">
<?php    
$n=$_POST['n'];
for ($i=0; $i<$n ; $i++) { 
?>
<input type="text" name="x<?php echo $i; ?>">
<?php }?>
<br>
<?php for ($i=0; $i<$n ; $i++) {?>
<input type="text" name="y<?php echo $i;?>">
<?php } ?>

<input type="hidden" name="n" value="<?php echo $n?>"><br><br>
<input type="submit" name="restar">
</form>    
</body>
</html>

