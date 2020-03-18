<?php  
$n=$_POST['limite'];
$x = 1;    
$y = 0; 
for($i=0;$i<=$n;$i++){

    $z = $x + $y;    
   	echo $z."<br/>";         
    $x=$y;       
    $y=$z;     
			}

?>