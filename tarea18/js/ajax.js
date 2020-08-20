        function cargar(pagina) {

            var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
            ajax.open("get", pagina, true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("Descripcion").innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
            ajax.send(); //llamar a la pagina

        }

        function llamarAutenticar(){
            var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

            var parametros = "nombre=" + encodeURI(document.getElementById('nombre').value) + "&contraseña=" + encodeURI(document.getElementById('contraseña').value) + "&nocache=" + Math.random();
            //alert(direccion);
            ajax.open("post", "autenticar.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina

        }

   	



        