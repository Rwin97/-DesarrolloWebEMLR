<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>   
 
</body>
</html>

<!doctype html>
<html lang="en">
  <head>

  <link rel="stylesheet" href="fondo.css">
    <title>Document</title>
    
    <link rel="stylesheet" href="login.css">
    <title>Logeo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script type="text/javascript" src="ajax.js"></script>

    <title>Menu Hotel</title>
  </head>
  <body>
  <!--<?php include('comprobar.php'); ?>--> 
  <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
  <!--<a class="navbar-brand" href="#">Hotel</a>--> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>       

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="Index.php">Incio<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item ">
      <?php if ($_SESSION['IdRol']==1)
		{?>
     <a class="nav-link" href="javascript:cargar('TipoHabitacion.php')">Tipo de Habitación<span class="sr-only">(current)</span></a>
    <?php }?> 
       
      </li>

      <li class="nav-item ">
      <?php if ($_SESSION['IdRol']==1)
		    {?>
       <a class="nav-link" href="javascript:cargar('Habitacion.php')">Habitación<span class="sr-only">(current)</span></a>
      <?php }?> 
      </li>

      <li class="nav-item ">
      <?php if ($_SESSION['IdRol']==1)
		  {?>
       <a class="nav-link" href="javascript:cargar('Usuarios.php')">Usuarios<span class="sr-only">(current)</span></a>
        <?php }?> 
      </li>

      <li class="nav-item ">
      <?php if ($_SESSION['IdRol']==2)
		  {?>
       <a class="nav-link" href="javascript:cargar('HabitacionesVer.php')">Ver Habitaciones<span class="sr-only">(current)</span></a>
        <?php }?>  
      </li>  
       
      <li class="nav-item ">
      <?php if ($_SESSION['IdRol']==2)
		  {?>
        <a class="nav-link" href="javascript:cargar('Reservar.php')">Reservar<span class="sr-only">(current)</span></a>
        <?php }?> 
      </li>  

      <li class="nav-item dropdown">
      <?php if ($_SESSION['IdRol']==1)
		  {?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:cargar('habitacionR.php')">Listado de habitaciones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:cargar('ReportesExel.php')">Listado de reservas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:cargar('EstadisticaReserva.php')">Estadística de reservas</a>
        </div>
        <?php }?> 
      </li>

      </ul>  
      <ul class="nav navbar-nav justify-content-around">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php 
        if ($_SESSION['IdRol']==1)
        echo "Administrador: ".$_SESSION['Nombres'];
        else
        echo "Recepcionista: ".$_SESSION['Nombres'];	
        ?><span class="sr-only">(current)</span></a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cerrar.php">Cerrar cesion</a>
        </div>
      </li>
      </ul>
      </div>  
  
</nav> 


<div class="container" id="contenido"> 
    <div class="row">
        <div class="col" id="conteni2">

<div class="row" >
<div class="col" ><br><br>
<img src="imagenes/descarga.jpg" class="img-fluid rounded mx-auto d-block">

</div>


</div>
  

</div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
