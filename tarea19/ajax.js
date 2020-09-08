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
        tipoHabitacion=document.getElementById("tipoHabitacion").value;
        bp=document.getElementById("bp").value;
        tamanio=document.getElementById("tamanio").value;
        precio=document.getElementById("precio").value;
        alert(tipoHabitacion); 
        

        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "numH="+numH + "&tipoHabitacion="+tipoHabitacion + "&bp="+bp  
        +"&tamanio="+tamanio +"&precio="+precio+"&nocache=" + Math.random();
            alert(tipoHabitacion);
            alert(bp);
            
            ajax.open('POST', 'RegistrarHB.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 

    
    function llamaregistrarTH(){  
        descripcion=document.getElementById("descripcion").value; 
        ncamas=document.getElementById("ncamas").value;
    
        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "descripcion="+descripcion + "&ncamas="+ncamas+"&nocache=" + Math.random();
            
            ajax.open('POST', 'RegistrarTH.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 

 /*--------------------------------------------------*/    
    function llamaregistrarU(){  
        correo=document.getElementById("correo").value; 
        password=document.getElementById("password").value; 
        nombre=document.getElementById("nombre").value; 
        apellidos=document.getElementById("apellidos").value; 
        rol=document.getElementById("rol").value; 
        estado=document.getElementById("estado").value;
        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "correo="+correo + "&password="+password
        +"&nombre="+nombre + "&apellidos="+apellidos
        +"&rol="+rol + "&estado="+estado +"&nocache=" + Math.random();
            
            ajax.open('POST', 'RegistrarU.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 

    
     
     