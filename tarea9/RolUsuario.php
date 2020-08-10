<?php session_start();
if (($_SESSION['IdRol']!=1))
{
	 header("Location: Mensaje.html"); 
	} 
?>

