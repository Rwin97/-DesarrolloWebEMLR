<?php session_start();
if (!isset($_SESSION['Nombres'])){
    header("Location: Login.html"); 
}
?>