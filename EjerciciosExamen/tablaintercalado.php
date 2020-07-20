<?php
$fila=$_POST['fila'];
$columna=$_POST['columna'];

echo 'filas<br>' .$fila.'<br>';
echo 'columnas<br>' .$columna;
?>
<link rel="stylesheet" href="style.css">
<table border='1px'>
<?php    
for($i=0; $i<$fila; $i++){
    echo '<tr>';
    for($j=0; $j<$columna; $j++){   
        ?>
 <td class="<?php 
 	switch($i%3)
     {
     case 0: echo "Rojo";
       break;
     case 1: echo "Amarillo";
       break;  
     case 2: echo "Verde";
       break;
       } 
      ?>">
    </td>
<?php
}
echo "</tr>";
}
?>

</table>
