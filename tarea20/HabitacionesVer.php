<?php 
include('comprobar.php');
include('Conexión.php');

$sql="SELECT ID, IdHabitación, Fotografía FROM fotoshabitación";
$resultado=$con->query($sql);
?>

<body>
<br><br>
<div class="container">
<div class="card-columns" id="galeria" >
  
    <div class="card">
      <a href="#" data-toggle="modal" data-target="#exampleModal">
      <img src="imagenes/descarga.jpg" class="card-img-top" alt="1"></a>
        <div class="card-body">
        <h5 class="card-title">Matrimonial</h5>
        <p class="card-text">Habitacion amplia con viste a la ciudad.</p>
      </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

     <div class="modal-dialog modal-lg modal-dialog-centered">
     <img src="imagenes/descarga.jpg" alt="" class="img-fluid rounded">
     </div>
  </div>

  <div class="card">
      <a href="#" data-toggle="modal" data-target="#exampleModal">
      <img src="imagenes/unnamed.jpg" class="card-img-top" style="height:225px"></a>
        <div class="card-body">
        <h5 class="card-title">Simple</h5>
        <p class="card-text">Habitacion simple.</p>
      </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

     <div class="modal-dialog modal-lg modal-dialog-centered">
     <img src="imagenes/unnamed.jpg" alt="" class="img-fluid rounded">
     </div>
  </div>

  <div class="card">
      <a href="#" data-toggle="modal" data-target="#exampleModal">
      <img src="imagenes/standard-1-miramar.jpg" class="card-img-top" alt="" style="height:225px"></a>
        <div class="card-body">
        <h5 class="card-title">Doble</h5>
        <p class="card-text">Habitacion Con dos camas.</p>
      </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

     <div class="modal-dialog modal-lg modal-dialog-centered">
     <img src="imagenes/standard-1-miramar.jpg" alt="" class="img-fluid rounded">
     </div>
</div>
<a href="javascript:cargar('ForminsertaImagen.php')">
<input type="button" value="Insertar imagen"></a>

  </div>
</div>
</body>
