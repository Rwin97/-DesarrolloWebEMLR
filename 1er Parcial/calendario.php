<link rel="stylesheet" href="mes.css">
<center>
<table border="0.5px">
<tr>
<th>Lunes</th>
<th>Martes</th>
<th>Miercoles</th>
<th>Jueves</th>
<th>Viernes</th>
<th>Sabado</th>
<th>Domingo</th>
</tr>
<tr>
<?php    
$mes=$_POST['mes'];
$year=$_POST['year'];
//for ($i=0; $i<$n ; $i++) { 
?> 
<td><?php  echo cal_days_in_month(CAL_GREGORIAN, 7, 2020);?> </td> 
    <td><?php  echo cal_days_in_month(CAL_GREGORIAN, 7, 2020);?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    <td><?php echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, 20,7, 2020) , 1 );?> </td>
    echo cal_days_in_month(CAL_GREGORIAN, 7, 2020);
</tr>
</table>
</center>