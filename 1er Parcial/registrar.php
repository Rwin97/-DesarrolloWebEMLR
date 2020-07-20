<?php include('conexion.php');
$n=$_POST['numA'];  


for ($i=0;$i<$n;$i++){
    $nombre=$_POST['n'];
   $apellido=$_POST['a'];
   $sexo=$_POST['s'];
    $mesa=$_POST['M'];

    $sql="INSERT INTO pacientes (nombres, apellidos, sexo, mesa) VALUES ('$nombre','$apellido','$sexo','$mesa')";
    
    $resultado=$con->query($sql);
 }
 if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>

<a href="listar.php">Lista de Alumnos</a>


 