<?php include('conexion.php');
$n=$_POST['numA'];
    
for ($i=0;$i<$n;$i++){
    $nombre=$_POST['N'.$i];
    $apellido=$_POST['A'.$i];
    $sexo=$_POST['S'.$i];
     $mesa=$_POST['M'.$i];

    $sql="INSERT INTO pacientes (nombres, apellidos, sexo, mesa) VALUES ('$nombre','$apellido','$sexo','$mesa')";
    
    $resultado=$con->query($sql);
 }
 if($resultado)
echo "Se registro con exito";
else
echo "Error al registrar";
?>

<a href="listar.php">Lista de Alumnos</a>
