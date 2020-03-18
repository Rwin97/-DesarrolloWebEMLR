<?php  
$cadena=$_POST['cadena'];
$pirm=strlen("$cadena");
$k=($pirm/2)-1;
for($j=1;$j<=$pirm+1;$j++){
	echo '<center>' .substr("$cadena",$k,$j), "<br><br>" .'</center';
	if($k== -$k){
	$k=0;  
	}
	else{
	$k=$k-1;	
	}
	$j=$j+1;
}
?>		