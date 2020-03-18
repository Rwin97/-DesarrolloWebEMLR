<?php  
$n=$_POST['numero'];
$factorial=1;
for ($i=$n; $i>0 ; $i--) { 
    $factorial=$factorial*$i;
}

echo "el factorial de  ".$n." es " .$factorial;


?>