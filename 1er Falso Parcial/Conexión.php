<?php 
$con = new mysqli("localhost","root","","bd_banco");
if ($con->connect_error) 
	die("conexion fallida".$con->_connect_error);
 ?>