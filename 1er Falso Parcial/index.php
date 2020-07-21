<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<div id="contenedor">
<div id="arriba">
<center>
        <img id="img1" src="img/usfx.png" alt="10px">
        <img id="img2" src="img/tecnologia.png" alt="10px"><br>
        <h2>UNIVERSIDAD DE SAN FRNACISCO XAVIER</h2>
        <h3>FACULTA DE TECNOLOGIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
        <span id="rojo">Sucr</span>
        <span id="amarillo">e Bol</span>
        <span id="verde">ivia</span>
        </h3>
        <h4>Carrera:Ing.: De sistemas/Ciencias de la computacion</h4>
        <h4>Semestre: 1-2020</h4>
        </center>
</div>
<div id="datos"><br>
Estos son los datos de autenticacion: <br>
<?php 
session_start();
if ($_SESSION['nivel']==1){
echo "Nombres: "."<spam id=azul>{$_SESSION['nombres']}</spam>"."<br>";
echo "Apellido: "."<spam id=azul>{$_SESSION['apellidos']}</spam>"."<br>";
echo "Nivel: <spam id=azul>Administrador</spam>";
} else{
    echo "Nombres: "."<spam id=azul>{$_SESSION['nombres']}</spam>"."<br>";
    echo "Apellido: "."<spam id=azul>{$_SESSION['apellidos']}</spam>"."<br>";
    echo "Nivel: <spam id=azul>Usuario</spam>";
}
 ?>
 </div>
<div id="derecha">
<center><br>
<a href="index.php"><button class='but1'>Inicio</button></a></li>
<a href="pregunta3.php"><button class='but2'>Pregunta 3</button></a>
<a href="pregunta4.php"><button class='but3'>Pregunta 4</button></a>
<a href="form5.html"><button class='but4'>Pregunta 5</button></a>
</div>
</center>
<div id="abajo">
<center>    
<p>Todos los Derechos Reservados</p>
</center>
</div>
</div>    
</body>
</html>