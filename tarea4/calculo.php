<?php 
$n=$_POST['n'];
$m=$_POST['m'];
if ($m%$n==0) {
	echo '<img src="multiplo.jpg">';
}else
echo '<img src="NoMultiplo.jpg">';
?>
<br><br><a href="index.html">Volver Menu</a>