function cargar(pagina) {

    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    ajax.open("get", pagina, true); //a quien llamara
    ajax.onreadystatechange = function() { // funcion de respuesta
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); //llamar a la pagina
    
    }


     /********----------------------*********/
    function llamar(pagina) {

        var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
        ajax.open("get", pagina, true); //a quien llamara
        ajax.onreadystatechange = function() { // funcion de respuesta
            if (ajax.readyState == 4) {
                document.getElementById("resultado").innerHTML = ajax.responseText;
            }
        }
        ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
        ajax.send(); //llamar a la pagina
        
        }


   /********----------------------*********/
    function tecla(n){
        document.getElementById('textPassword').value=document.getElementById('textPassword').value+n;
        }

        /********----------------------*********/

        function introducir(){
        num=document.getElementById("num").value;
        var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

        var parametros = "num="+num + "&nocache=" + Math.random();
        //alert(direccion);
        ajax.open("post", "introducir.php", true); //a quien llamara
        ajax.onreadystatechange = function() { // funcion de respuesta
            if (ajax.readyState == 4) {
                document.getElementById("resultado").innerHTML = ajax.responseText;
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
        ajax.send(parametros); //llamar a la pagina

        }       
        
        /********----------------------*********/
        function sumar(){
            var x = document.getElementById("x").value;
            document.getElementById("suma").innerHTML = x;
          }


       /********----------------------*********/

       function Comentar(id){
        var ajax=new XMLHttpRequest();
        var parametros = "FormComentar.php?id="+id+ "&nocache=" + Math.random();
        
         ajax.open("get", parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('resultado').innerHTML=ajax.responseText;
              
              }	
         }
         
             alert(id);
             
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     }  


    function introducirComentario(idnoticia){
        comentario=document.getElementById("comentario").value; 
        alert(idnoticia);
        var ajax=new XMLHttpRequest();
        ajax.onreadystatechange=function()
        {
         if(ajax.readyState == 4) { 
             
              document.getElementById('contenido').innerHTML=ajax.responseText;
             
             }	
        }
        var parametros = "idnoticia="+idnoticia +"&comentario="+comentario + "&nocache=" + Math.random();
        alert(idnoticia);
            ajax.open('POST', 'RegistrarComentario.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 
    
    function calendario () {
        mes=document.getElementById("mes").value;
        anio=document.getElementById("anio").value;
        
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4) {
				document.getElementById("resultado").innerHTML=ajax.responseText;
			}
        }
        var parametros = "calendario.php?mes="+mes+"&anio="+anio+ "&nocache=" + Math.random();
        ajax.open("GET", parametros, true);
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(parametros);
    }



 
       