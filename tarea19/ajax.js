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

/*--------------------------------------------------*/     
     function llamaregistrarHB(){
        numH=document.getElementById("numH").value;
        tipoHabitacion=document.getElementById("tipoHabitacion");
        bp=document.getElementsByName("bp");
        tamanio=document.getElementById('tamanio').value;
        precio=document.getElementById("precio").value;
        //alert(tamanio); 
        

        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "numH="+numH + "&tipoHabitacion="+tipoHabitacion + "&bp="+bp + 
        +"&Xtamanio="+tamanio +"&precio="+precio+"&nocache=" + Math.random();
            alert(tamanio);
            alert (numH);
            ajax.open('POST', 'RegistrarHB.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 
     
     