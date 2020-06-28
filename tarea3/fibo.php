<?php  
$n=$_POST['limite'];
$x = 1;    
$y = 0; 
$fibo=0;
for($i=0;$i<=$n;$i++){
    $y = $x;    
    $x=$fibo+$x;       
    $fibo=$y;
    echo $y."<br/>";        
			}

?>