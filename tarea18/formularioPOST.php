<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <div class="form-group">    
        <label for="nombre">Usuario: </label>
        <input type="text" name="nombre" id="nombre" class="form-control"> 
    </div>    
    <div class="form-group">    
    <label for="Contraseña">Contraseña: </label>
    <input type="password" name="contraseña" id="campo" class="form-control"><br>
    <center>
    <input type="button" id="7" value="7" onclick="tecla(7)">
    <input type="button" id="8" value="8" onclick="tecla(8)">
    <input type="button" id="9" value="9" onclick="tecla(9)"><br>
    <input type="button" id="4" value="4" onclick="tecla(4)">
    <input type="button" id="5" value="5" onclick="tecla(5)">
    <input type="button" id="6" value="6" onclick="tecla(6)"><br>
    <input type="button" id="1" value="1" onclick="tecla(1)">
    <input type="button" id="2" value="2" onclick="tecla(2)">
    <input type="button" id="3" value="3" onclick="tecla(3)"><br>
    <input type="button" id="0" value="0" onclick="tecla(0)">
    </div>  
    </center>
    <center>
    <input type="button" value="Enviar" onclick="llamarAutenticar()" class="btn btn-primary"> 
    <input type="reset" value="Limpear" class="btn btn-primary"> 
    </center>    
    </form>
</body>
</html>