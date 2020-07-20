<?php session_start();
if ($_SESSION['correo']==1){
echo "Administrador"; ?>
<div>
<a href=""><button>Crear</button></a>
<a href=""><button>Listar</button></a>
<a href=""><button>Borrar</button></a>
<a href=""><button>Salir</button></a>
</div>
<?php
}else {
    echo "Usuario"; 
    ?>
    <div>
    <a href=""><button>Listar</button></a>
    </div>
<?php
}
?>
<a href="index.html">volver al menu principal</a>
<a href="ejercicio4.html">volver a login</a> 
