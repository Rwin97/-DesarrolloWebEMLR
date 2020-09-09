<?php session_start();
if (!isset($_SESSION['Correo'])){
    header("Location: Login.html"); 
}
?>